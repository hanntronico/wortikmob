<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type=image/png href=https://animaproject.s3.amazonaws.com/home/favicon.png/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />
    <link rel="stylesheet" type="text/css" href="inicio-de-sesion.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body style="margin: 0; background: #ffffff;">
    <input type="hidden" id="anPageName" name="page" value="inicio-de-sesion" />

    <div class="container-center-horizontal">
      <div class="inicio-de-sesion screen">

        <div class="overlap-group">
          
          <div style="width: 100%; text-align: right; padding: 12px 15px 5px 0px; border: 0px solid yellow;">
             <a href="menu2.php">
                <img
                  class="align-justify-2"
                  src="assets/align-justify 1.png"
                />
            </a>
          </div>

          <div style="display: flex; justify-content: center; align-content: center;">
            <img
              class="logo-versin-positiva-6"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/logo---versi-n-positiva-6@2x.svg"
            />            
          </div>



          <div class="frame-125">

            <form action="iniciar.php" method="POST" accept-charset="utf-8">

              <div class="titulo-bienvenida poppins-semi-bold-malachite-16px">¡Te damos la <br> Bienvenida!</div>



                <input type="text" class="usuario usuario-1 form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario">
            
                <!-- <input type="password" class="contrasea contrasea-1 form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña"> -->

            
<!--               <div class="estado-default-tipo">
                <button type="submit" class="botn-p botn-primario poppins-medium-white-16px" style="border: none;">
                  Iniciar Sesión
                </button>
              </div> -->
            
            </form>


<!--             <div class="frame-52">
              <div class="acceder-con">Acceder con</div>
              <img
                class="image-28"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/image-28@2x.png"
              />
            </div>
            <div class="olvid-mi-contrasea poppins-light-chicago-12px">Olvidé mi contraseña</div>
            <p class="no-tienes-una-cuenta-regstrate">
              <span class="poppins-light-chicago-12px">¿No tienes una cuenta?</span
              ><span class="span poppins-light-chicago-12px">&nbsp;</span
              ><span class="span poppins-normal-malachite-12px">Regístrate</span>
            </p>
 -->

            
          </div>


<!--           <div class="frame-125">
            <div class="te-damos-la-bienvenida poppins-semi-bold-malachite-16px">¡Te damos la Bienvenida!</div>

            <form action="iniciar.php" method="POST" accept-charset="utf-8">


                <input type="text" class="usuario usuario-1 form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario">
            
                <input type="password" class="contrasea contrasea-1 form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña">

            
              <div class="estado-default-tipo">
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
            <div class="olvid-mi-contrasea poppins-light-chicago-12px">Olvidé mi contraseña</div>
            <p class="no-tienes-una-cuenta-regstrate">
              <span class="poppins-light-chicago-12px">¿No tienes una cuenta?</span
              ><span class="span poppins-light-chicago-12px">&nbsp;</span
              ><span class="span poppins-normal-malachite-12px">Regístrate</span>
            </p>

          </div> -->

        </div>
      </div>
    </div>
  </body>
</html>
