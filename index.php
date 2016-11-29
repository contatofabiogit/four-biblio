<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Four Biblio</title>

        <?php include_once './padroes/cabecalho_head.php'; ?>

        <link rel="stylesheet" href="css/estilo-login.css" />
    </head>
    <body>
        <div class="container principal">
            <form method="POST" action="./processamento/validacao_login.php">
                <div class = "page-header">
                    <img src="img/logo.png" class="img-responsive imagem1" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="icone"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="usuario" placeholder="LOGIN" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="icone"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="senha" placeholder="SENHA" aria-describedby="basic-addon1">
                </div>
                <div class="input-group botao">
                    <button type="submit" class="btn btn-four">ACESSAR <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></button>
                </div>
            </form>
            <footer>
                <img src="img/rodape.png" class="img-responsive imagem2 text-center" />
            </footer>
        </div>
    </body>
</html>
