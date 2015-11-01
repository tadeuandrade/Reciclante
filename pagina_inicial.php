<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="20" alt="Brand" src="./img/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">                        
                        <li>
                            <a href="informacao.php">INFORMACAO<br></a>
                        </li>
                        <?php
                        session_start();
                        if (isset($_SESSION["usuario_logado"])) {
                            echo ("
                        <li>
                            <a href='reciclar.php' >RECICLAR/COLETAR<br></a>
                        </li>
                        <li>
                            <a href='efetuar_logoff.php' >Sair<br></a>
                        </li>
                        ");
                        } else {
                            echo ("<li>
                            <a href='index.php'>LOGIN<br></a>
                        </li>");
                            
                            
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>