<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Inicio Sesión - Acipet Unal</title>
  </head>
  <form action="" method="post">

  <body>

      <div class="login-container">
          <div class="login-info-container">
             <!-- Capturando mensaje de error -->
          <?php
            if (isset($_GET["m"])){
              switch($_GET["m"]){
                case "1";
                  ?>
                    <div class="alert alert-danger alert-bordered pd-y-20" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="d-sm-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20"></i>
                      <div class="mg-t-20 mg-sm-t-0">
                        <h5 class="mg-b-2 tx-danger">Usuario No registrado</h5>
                        <p class="mg-b-0 tx-gray">Si cree que es un error, escribanos al correo webmaster@acipetunal.com</p>
                      </div>
                      </div>
                    </div>
                  <?php
                break;

                case "2";
                  ?>
                    <div class="alert alert-danger alert-bordered pd-y-20" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="d-sm-flex align-items-center justify-content-start">
                          <i class="icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20"></i>
                          <div class="mg-t-20 mg-sm-t-0">
                          <h5 class="mg-b-2 tx-danger">Ingrese su usuario y contraseña</h5>
                          </div>
                      </div>
                    </div>
                  <?php
                break;
              }
            }
          ?>
            <h1 class="title">¡Bienvenido!</h1>
            <p>Inicia sesión para descargar tus certificados.</p>
            <forms class="inputs-container">
                <input class="input" type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo electronico">
                <input class="input" type="password" id="usu_pass" name="usu_pass" class="form-control" autocomplete="off" placeholder="Contraseña">
                <p>Consulta tus certificados <a href="view/Consulta/" target="_blank"><span class="span"> Aquí</span></a></p>
                <input type="hidden" name="enviar" class="form-control" value="si">
                <button  type="submit" class="btn">Iniciar Sesión</button>
            </forms>
          </div>
            <img class="image-container" src="public/img/Logo Acipet Unal.png"  alt="Certificados Acipet Unal">
        </div>

    <script src="public/lib/jquery/jquery.js"></script>
    <script src="public/lib/popper.js/popper.js"></script>
    <script src="public/lib/bootstrap/bootstrap.js"></script>

  </body>
  <div class="footer">
  <footer><a class="creator" target="_blank" href="https://juanjosedeleon.com">By Juan José De León</a></footer>
  </div>
</html>
