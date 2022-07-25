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
            <h4 class="tituloPagina">Editar fornecedor</h4>
            <a href="<?php echo URL_BASE; ?>fornecedores" id="botaoVoltar" class="w3-button w3-margin-bottom" href="">Voltar a listagem</a>
        </div>
        
        <div style="display: none;">
            <label>Usuário 1</label>
        </div>

        <div class="w3-row area-inputs">
            <div class="container-input w3-margin-top">
                <label>Razão social</label>
                <input type="text" name="nomeCliente" id="nomeCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['RazaoSocial']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-input w3-margin-top">
                <label>CNPJ</label>
                <input type="text" name="cnpjCliente" id="cnpjCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['Cnpj']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-input w3-margin-top">
                <label>Celular</label><br>
                <input type="text" id="celularCliente" name="celularCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['celular']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-input w3-margin-top">
                <label>Email</label><br>
                <input type="text" id="emailCliente" name="emailCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['email']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-input w3-margin-top">
                <label>Endereço</label><br>
                <input type="text" id="enderecoCliente" name="enderecoCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['endereco']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

        </div>

        <div class="w3-row area-inputs">
            <div class="container-input w3-margin-top">
                <label>Bairro</label><br>
                <input type="text" id="bairroCliente" name="bairroCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['bairro']; ?>">
            </div>&nbsp;&nbsp;&nbsp;
            <div class="container-select w3-margin-top">
                <label>UF</label><br>
                <input type="text" id="ufCliente" name="ufCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['uf']; ?>">
            </div>&nbsp;&nbsp;&nbsp;
            <div class="container-input w3-margin-top">
                <label>Cidade</label><br>
                <input type="text" id="cidadeCliente" name="cidadeCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['cidade']; ?>">
            </div>&nbsp;&nbsp;&nbsp;

            <div class="container-select w3-margin-top">
                <label>Código</label><br>
                <input type="text" id="codigoCliente" name="codigoCliente" class="w3-input w3-block w3-border" value="<?php echo $data['dadosFornecedor']['idFornecedor']; ?>" disabled>
            </div>&nbsp;&nbsp;&nbsp;
            
        </div>

        <div class="w3-row area-inputs w3-margin-top">
            <button type="button" onclick="atualizarFornecedor()" class="w3-button w3-theme w3-margin-top w3-margin-bottom">Atualizar</button>
            &nbsp;&nbsp;<a href="<?php echo URL_BASE; ?>fornecedores" class="w3-button w3-margin-top w3-margin-bottom w3-right">Cancelar</a>
        </div>
        <!-- </form> -->
  </div>

  <script src="<?php echo URL_BASE; ?>static/js/jquery.js"></script>
  <script src="<?php echo URL_BASE; ?>static/js/fornecedores.js"></script>
</body>

</html>