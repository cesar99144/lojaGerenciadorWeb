<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>santri</title>

    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/w3.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/santri.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/toastr.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/brands.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/fontawesome.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/regular.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/solid.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/svg-with-js.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/v4-shims.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/listagemUsuarios.css">

    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }

      tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

  </head>
  <body>
    <script src="static/js/jquery.js"></script>
    <div>
      <div id="lista_usuarios" class="w3-margin">
        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Nome">
        <button class="w3-button w3-theme w3-margin-top">Buscar</button>
        <a href="<?php echo URL_BASE; ?>usuarios/new" class="w3-button w3-theme w3-margin-top w3-right">Cadastrar novo usuário</a>

        <table>
          <thead>
            <tr>
              <th>Nome</td>
              <th>Login</td>
              <th>Ativo</td>
              <th>Opções</td>  
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Maria Moraes</td>
              <td>MARIA</td>
              <td>Sim</td>
              <td>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-user-times"></i></button>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-edit"></i></button>
              </td>
            </tr>

            <tr>
              <td>João da Silva</td>
              <td>JOAO</td>
              <td>Sim</td>
              <td>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-user-times"></i></button>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-edit"></i></button>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </body>
</html>