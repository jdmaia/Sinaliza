<html>

    <head>
        <title> Sinaliza - Conteúdo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    
    <body>
        <!-- UP BAR -->
        <div class="alert alert-success" >
            Olá FULANO
            <a style="float: right; padding-left: 2%" href=""> Sair</a>
            <a style="float: right" href=""> Meu Perfil  </a>
        </div>
        
        <div style="padding: 2% 2% 2% 2%">
            
            <!-- TEXT-AREA CONTEUDO -->
            <div class="panel panel-success" style="display: inline-block; width: 65%">
                <div class="panel-heading">
                    NOME_CONTEÚDO
                </div>
                <div class="panel-body">
                    <textarea style="background-color: white; width: 100%; height: 60%; margin: auto; text-align: justify" disabled>
Aqui estará escrito o conteúdo. Só tem um probleminha: pra formatar os textos aqui dentro é necessário usar javascript. Lascou!!
                    </textarea>
                </div>
            </div>
            
            <!-- ÁREA DE GERENCIAMENTO -->
            <div class="panel panel-success" style="display: inline-block; float: right; padding: 1% 5% 5% 5%">
                <h4>Pular para tópico:</h4>
                
                <!-- DROP DOWN -->
                <div class="dropdown" style="margin-bottom: 10%">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Tópicos
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Introdução</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 1</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 3</a></li>
                    </ul>
                </div>
                
                <button class="btn btn-defaul" type="button" style="width: 100%; margin-bottom: 10%">Tela Principal</button>
                <button class="btn btn-defaul" type="button" style="width: 100%">Realizar Tese</button>
            </div>
            
        </div>
    </body>

</html>