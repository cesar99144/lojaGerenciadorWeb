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

    <div id="lista_usuarios" class="w3-margin sessao-pagina">

      <div class="topoDadosPagina">
        <h4 class="tituloPagina">Cadastro de usuários</h4>
        <a href="<?php echo URL_BASE; ?>usuarios" id="botaoVoltar" class="w3-button w3-margin-bottom" href="">Voltar a listagem</a>
      </div>
      
      <div style="display: none;">
        <label>Usuário 1</label>
      </div>

      <div class="w3-row area-inputs">
          <div class="container-input w3-margin-top">
            <label>Nome</label>
            <input type="text" class="w3-input w3-block w3-border">
          </div>&nbsp;&nbsp;&nbsp;

          <div class="container-input w3-margin-top">
            <label>Login</label><br>
            <input type="text" class="w3-input w3-block w3-border">
          </div>&nbsp;&nbsp;&nbsp;

          <div class="w3-margin-top">
            <label>Senha</label><br>
            <input type="text" class="w3-input w3-block w3-border">
          </div>&nbsp;&nbsp;&nbsp;
      </div>

      <div class="w3-row area-inputs">
          <div class="container-select w3-margin-top">
            <label>Ativo</label><br>
            <!-- <input type="text" class="w3-input w3-block w3-border "> -->
            <select class="w3-input w3-block w3-border" name="" id="">
              <option value="">Sim</option>
              <option value="">Não</option>
            </select>
          </div>
          <ul id="listaCheckBox" class="areaChecks">
            <li id="opt_cadastrar_clientes"><input type="checkbox" checked value="cadastrar_clientes"> <label>Cadastrar clientes</label></li>
            <li id="opt_excluir_clientes"><input type="checkbox" value="excluir_clientes"> <label>Excluir clientes</label></li>
            <li id="opt_mais"><input type="checkbox" value="mais"> <label>E assim sucessivamente</label></li>
          </ul>
      </div>

      <div class="w3-row area-inputs w3-margin-top">
          <button class="w3-button w3-theme w3-margin-top w3-margin-bottom">Gravar</button>
          &nbsp;&nbsp;<a href="<?php echo URL_BASE; ?>usuarios" class="w3-button w3-margin-top w3-margin-bottom w3-right">Cancelar</a>
      </div>
  </div>
</body>

</html>