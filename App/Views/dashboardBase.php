<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santri</title>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/dahsboardAdmin.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div id="nomeEmpresaArea">
                Nome empresa
            </div>
            <div id="dadosUserLogado">
                Olá, <?php echo $_SESSION['userNome']; ?>
                <a id="botaoLogout" href="<?php echo URL_BASE; ?>usuarios/logout">Logout</a>
            </div>
        </header>
        <nav id="subNavMenu">
            <ul id="listaMenu">
                <li><a id="usuarios" href="<?php echo URL_BASE; ?>usuarios"><i class='bx bxs-user'></i> Usuários</a></li>
                <li><a id="clientes" href="<?php echo URL_BASE; ?>clientes"><i class='bx bxs-user-account'></i> Clientes</a></li>
                <li><a id="produtos" href="<?php echo URL_BASE; ?>produtos"><i class='bx bxs-package'></i> Produtos</a></li>
                <li><a id="fornecedores" href="<?php echo URL_BASE; ?>fornecedores"><i class='bx bxs-basket'></i> Fornecedores</a></li>
            </ul>
        </nav>
        <section class="w3-margin" id="conteudo">
            <?php require_once 'App/Views/'.$view.'.php'; ?>
        </section>

        <script src="<?php echo URL_BASE; ?>static/js/dashboard.js"></script>
    </body>
</html>