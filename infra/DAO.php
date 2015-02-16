<?php

require_once "../model/aluno.php";

/**
 * Classe responsável por fazer as operações com o banco de dados
 */
class DAO {

    private static $database = "sinal";
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $pdo_instance;

    public function __construc() {
        
    }

    public static function connect() {
        if (!isset(self::$pdo_instance)) {
            self::$pdo_instance = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$database, self::$user, self::$password);
        }
    }

    /* NOVO ALUNO */

    public static function novoAluno($nome, $email, $senha) {
        /* CHECAGEM DE EMAIL */
        if (self::existeEmail($email) == TRUE) {
            return "Email já cadastrado.";
        }

        /* INSERT */
        $stmt = self::$pdo_instance->prepare("INSERT INTO aluno(nome, email, senha) VALUES(:nome, :email, :senha)");
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();
    }
    
    public static function getAluno($email){
        $stmt = self::$pdo_instance->prepare("SELECT * FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $found = $stmt->fetch(PDO::FETCH_ASSOC);
        $aluno = new Aluno($found["nome"], $found["email"], $found["senha"]);
        $aluno->setModulo($found["modulo"]);
        $aluno->setData($found["data"]);
        return $aluno;
    }

    private static function existeEmail($email) {
        /* CHECAGEM DE EMAIL */
        $stmt = self::$pdo_instance->prepare("SELECT email FROM aluno WHERE email=:email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
            return TRUE;
        }
        return FALSE;
    }
    
    

    public static function validaLogin($email, $senha) {
        if (self::existeEmail($email) == TRUE) {
            $stmt = self::$pdo_instance->prepare("SELECT id, senha, modulo, data FROM aluno WHERE email=:email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $found = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($found["senha"] == $senha) {
                if($found["modulo"] ==  NULL){
                    $stmt = self::$pdo_instance->prepare("UPDATE aluno SET modulo=:modulo, data=:data WHERE id=:id");
                    $stmt->bindValue(":id", $found["id"]);
                    $stmt->bindValue(":modulo", 1);
                    $stmt->bindValue(":data", date("d/m/Y"));
                    $stmt->execute();
                }
                return TRUE;
            }
        }
        return FALSE;
    }

}

?>