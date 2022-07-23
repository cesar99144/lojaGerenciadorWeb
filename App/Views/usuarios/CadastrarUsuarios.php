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

</head>

<body>
  <script src="<?php echo URL_BASE; ?>static/js/jquery.js"></script>
  <div class="container-pagina">
    <div id="lista_usuarios" class="w3-margin">

      <h4 class="tituloPagina">Cadastro de usuários</h4>

      <div style="display: none;">
        <label>Usuário 1</label>
      </div>

      <div class="container-input w3-margin-top">
        <label>Nome</label>
        <input type="text" class="w3-input w3-block w3-border">
      </div>

      <div class="container-input w3-margin-top">
        <label>Login</label><br>
        <input type="text" class="w3-input w3-block w3-border">
      </div>

      <div class="container-input w3-margin-top">
        <label>Senha</label><br>
        <input type="text" class="w3-input w3-block w3-border">
      </div>

      <div class="container-input w3-margin-top">
        <label>Ativo</label><br>
        <!-- <input type="text" class="w3-input w3-block w3-border "> -->
        <select class="w3-input w3-block w3-border" name="" id="">
          <option value="">Sim</option>
          <option value="">Não</option>
        </select>
      </div>

      <ul id="listaCheckBox" class="">
        <li id="opt_cadastrar_clientes"><input type="checkbox" checked value="cadastrar_clientes"> <label>Cadastrar clientes</label></li>
        <li id="opt_excluir_clientes"><input type="checkbox" value="excluir_clientes"> <label>Excluir clientes</label></li>
        <li id="opt_mais"><input type="checkbox" value="mais"> <label>E assim sucessivamente</label></li>
      </ul>

      <button class="w3-button w3-theme w3-margin-top w3-margin-bottom">Gravar</button>
      <a href="<?php echo URL_BASE; ?>usuarios" class="w3-button w3-margin-top w3-margin-bottom w3-right">Cancelar</a>

    </div>
  </div>
</body>

</html>