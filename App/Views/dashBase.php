<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/dashboard.css">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/santri.css">
    </head>
    <body>
        <header>
            <!-- <div class="containerLogo">
                <img id="logo-cliente" class="w3-margin-top" src="<?php echo URL_BASE; ?>static/imagens/logo_cliente.jpg"/>
            </div> -->
            <div class="containerEmpresa">
                <label>Nome empresa</label>
            </div>
            <div>
                <ul id="listaMenu">
                    <li><a class="itemAtivo" href="<?php echo URL_BASE; ?>usuarios">Usuários</a></li>
                    <li><a href="">Clientes</a></li>
                    <li><a class="" href="">Produtos</a></li>
                </ul>
            </div>
            <div>
                Logout
            </div>
        </header>
        <section id="conteudo">
            <?php require_once 'App/Views/'.$view.'.php'; ?>
        </section>
    </body>
</html>