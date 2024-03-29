<?php 
  session_start();
  include_once "../conf/conf.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <link rel="shortcut icon" type=image/png href=https://animaproject.s3.amazonaws.com/home/favicon.png/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo ENLACE_WEB ?>assets/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ENLACE_WEB ?>assets/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ENLACE_WEB ?>assets/inicio-de-sesion_emp.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="inicio-de-sesion" />

    <div class="container-center-horizontal">
      <div class="inicio-de-sesion screen">
        <div class="overlap-group">
          
          <div style="width: 100%; text-align: right; padding: 15px;">
             <a href="menu2.php">
            <img
              class="align-justify-2"
              src="<?php echo ENLACE_WEB ?>assets/assets/align-justify 1.png"
            />
            </a>
          </div>

<!--           <img
            class="group"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62daa4495150f1813bf77495/img/group-1@2x.svg"
          /> -->
<!--           <div class="overlap-group3">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">20</div></div>
          </div> -->

          <div class="frame-125">
            <div class="te-damos-la-bienvenida poppins-semi-bold-malachite-16px">¡Hola, te damos la Bienvenida!</div>
<!--             <div class="usuario">
              <div class="usuario-1">
              </div>
            </div> -->

            <form action="<?php echo ENLACE_WEB ?>assets/iniciar_emp.php" method="POST" accept-charset="utf-8">


                <input type="text" class="usuario usuario-1 form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario">
            
                <input type="password" class="contrasea contrasea-1 form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña">

<!--             <div class="contrasea">
              <div class="contrasea-1">
                 
              </div>

              <img
                class="eye-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/eye-1@2x.svg"
              />
            </div> -->

            
              <div class="estado-default-tipo">
                <!-- <div class="botn-p"><div class="botn-primario poppins-medium-white-16px">Iniciar Sesión</div></div> -->
                <button type="submit" class="botn-p botn-primario poppins-medium-white-16px" style="border: none;">
                  Iniciar Sesión
                </button>
              </div>
            
            </form>


            <div class="frame-52">
              <div class="acceder-con">Acceder con</div>
              <img
                class="image-28"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/image-28@2x.png"
              />
            </div>
            <div class="olvid-mi-contrasea poppins-light-chicago-12px">Recordar contraseña</div>
            <p class="no-tienes-una-cuenta-regstrate">
              <!-- <span class="poppins-light-chicago-12px">¿No tienes una cuenta?</span> -->
              <!-- <span class="span poppins-light-chicago-12px">&nbsp;</span> -->
              <span class="span poppins-normal-malachite-12px">Regístrate</span>
              <span class="poppins-light-chicago-12px">en Wortika</span>
            </p>
          </div>
          <img
            class="logo-versin-positiva-6"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/logo---versi-n-positiva-6@2x.svg"
          />
        </div>
      </div>
    </div>
  </body>
</html>
