<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>santri</title>

  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/w3.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/santri.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/toastr.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/cadastrarUsuarios.css">

  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/brands.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/fontawesome.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/regular.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/solid.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/svg-with-js.css">
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/v4-shims.css">
  <!-- Toasts -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>

<body>
  
    <div id="lista_usuarios" class="w3-margin sessao-pagina">

        <div class="topoDadosPagina">
            <h4 class="tituloPagina">Cadastro de produtos</h4>
            <a href="<?php echo URL_BASE; ?>produtos" id="botaoVoltar" class="w3-button w3-margin-bottom" href="">Voltar a listagem</a>
        </div>
        
        <div style="display: none;">
            <label>Usuário 1</label>
        </div>

        <div class="w3-row area-inputs">
            <!-- <form action="<?php echo URL_BASE; ?>usuarios/create" method="POST"> -->
            <div class="container-input w3-margin-top">
                <label>Nome</label>
                <input type="text" name="nomeProduto" id="nomeProduto" class="w3-input w3-block w3-border">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-select w3-margin-top">
                <label>Estoque</label><br>
                <input type="text" id="estoqueProduto" name="estoqueProduto" class="w3-input w3-block w3-border">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-select w3-margin-top">
                <label>Preço</label><br>
                <input type="text" id="precoProduto" name="precoProduto" class="w3-input w3-block w3-border">
            </div>&nbsp;&nbsp;&nbsp;

        </div>

        <div class="w3-row area-inputs w3-margin-top">
            <button type="button" onclick="cadastrarProduto()" class="w3-button w3-theme w3-margin-top w3-margin-bottom">Gravar</button>
            &nbsp;&nbsp;<a href="<?php echo URL_BASE; ?>produtos" class="w3-button w3-margin-top w3-margin-bottom w3-right">Cancelar</a>
        </div>
        <!-- </form> -->
  </div>

  <script src="<?php echo URL_BASE; ?>static/js/jquery.js"></script>
  <script src="<?php echo URL_BASE; ?>static/js/produtos.js"></script>
</body>

</html>