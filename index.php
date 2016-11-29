<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Four Biblio</title>

        <?php include_once './padroes/cabecalho_head.php'; ?>

        <link rel="stylesheet" href="css/estilo-login.css" />
    </head>
    <body>
        <div class="container principal">
            <div class = "page-header">
                <img src="img/logo.png" class="img-responsive" />
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="icone"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="LOGIN" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="icone"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="SENHA" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-four">ACESSAR <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></button>
            </div>
            
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 text-center">
                        <img class="img-responsive tamanho" src="img/rodape.png" />
                    </div>              
                </div>
            </div>
        </footer>

    </body>
</html>
