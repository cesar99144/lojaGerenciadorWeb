<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>santri</title>

    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/w3.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/santri.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/toastr.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css/usuarios.css">

    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/brands.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/fontawesome.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/regular.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/solid.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/svg-with-js.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>static/css-awesome/v4-shims.css">

    <style>
      #login {
        max-width: 95%;
        margin: auto;
        width: 380px;
        margin-top: 5%;
      }

      #logo-cliente {
        max-width: 100%;
        margin: auto;
        width: 700px;    
      }

      #logo-santri {
        max-width: 50%;
        margin: auto;
        width: 380px;    
      }
    </style>

  </head>
  <body>
  
    <div id="login">
      <form action="<?php echo URL_BASE; ?>usuarios/login" method="POST">
          <img id="logo-cliente" class="w3-margin-top" src="<?php echo URL_BASE; ?>static/imagens/logo_cliente.jpg"/>
          <?php 
            //Exibe mensagens de validação para o usuário
            if(!empty($data['mensagem'])):

              foreach($data['mensagem'] as $m):
                  echo "<div id='areaRetorno'>".$m."</div>"."<br>";
              endforeach;

            endif;

          ?>
          <input class="w3-input w3-border w3-margin-top" name="userLogin" id="nomeUser" type="text" placeholder="Usuário">
          <input class="w3-input w3-border w3-margin-top" name="userSenha" id="senhaUser" type="password" placeholder="Senha">
          <button type="submit" class="w3-button w3-theme w3-margin-top w3-block">Logar</button>
      </form>
      <a href="http://www.santri.com.br">
        <img id="logo-santri" class="w3-right w3-margin-top" src="<?php echo URL_BASE; ?>static/imagens/logo_santri.svg"/>
      </a>

      <script src="<?php echo URL_BASE; ?>static/js/jquery.js"></script>
      <script src="<?php echo URL_BASE; ?>static/js/usuarios.js"></script>
    </div>
  </body>
</html>