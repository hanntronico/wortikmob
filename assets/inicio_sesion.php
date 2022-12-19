<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- <link rel="shortcut icon" type=image/png href=https://animaproject.s3.amazonaws.com/home/favicon.png/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />
    <link rel="stylesheet" type="text/css" href="inicio-de-sesion.css" />
    <link rel="stylesheet" type="text/css" href="menu-1.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body style="margin: 0; background: #ffffff;">
    <input type="hidden" id="anPageName" name="page" value="inicio-de-sesion" />



<div id="menu-container">
    <div class="menu-container-center-horizontal">
      
      <div class="menu-1 poppins-normal-storm-dust-16px screen">
        <img
          class="group"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/group@2x.svg"
        />

        <div class="barra-superior">
          <a href="#" onclick="accionaMenu()">
            <img
              class="close-2-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/close--2--1@2x.svg"
            />  
          </a>
        </div>

        <img
          class="vector-17"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-17@2x.svg"
        />
        <div class="redes-sociales">
          <div class="fb">
            <img
              class="brandicofacebook"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/brandico-facebook@2x.svg"
            />
          </div>
          <div class="ins">
            <img
              class="akar-iconsinstagram-fill"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-instagram-fill@2x.svg"
            />
          </div>
          <div class="tw">
            <img
              class="akar-iconstwitter-fill"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-twitter-fill@2x.svg"
            />
          </div>
          <div class="in">
            <img
              class="vector"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector@2x.svg"
            />
          </div>
        </div>

        <div class="estado-default-tipo">
          <div class="botn-p">
            <div class="botn-primario poppins-medium-white-16px">
              Iniciar Sesión
            </div>
          </div>
        </div>

        <div class="group-156">
          <div class="frame-63">
            <div class="publicar-empleo">Publicar empleo</div>
          </div>
        </div>

        <div class="soy-postulante">Soy Postulante</div>
        <div class="busco-talento">Busco talento</div>
        <div class="subir-cv">Subir CV</div>
        <div class="blog">Blog</div>

      </div>

    </div>
</div>



    <div class="container-center-horizontal">
      <div class="inicio-de-sesion screen">
        <div class="overlap-group" id="main-frame">
          
          <div style="width: 100%; text-align: right; padding: 12px 15px 5px 0px; border: 0px solid yellow;">
             <a href="#" onclick="accionaMenu()">
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

          <form action="iniciar.php" method="POST" accept-charset="utf-8">

            <div class="frame-125">


              <div class="titulo-bienvenida poppins-semi-bold-malachite-16px">¡Te damos la <br> Bienvenida!</div>

                <input type="text" class="usuario usuario-1 form-control poppins-semi-bold-malachite-16px" name="txtUsuario" id="txtUsuario" placeholder="Usuario">

                <div class="contrasea">
                  <input type="password" class="contrasea-1 form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña">
                  <div class="eye-1">
                    <a href="javascript:;" onclick="togglePasswordInput()"><img src="img/eye.svg" alt=""></a>
                  </div>
                </div>



                <div class="olvid-mi-contrasea poppins-light-chicago-12px">
                  Olvidé mi contraseña
                </div>

                <div class="no-tienes-una-cuenta-regstrate">
                  <span class="poppins-light-chicago-12px">
                    ¿No tienes una cuenta?
                  </span>
                  <span class="span poppins-normal-malachite-12px">
                    <a href="registro_candidato.php" style="text-decoration: none; color: #339698;">Regístrate</a>
                  </span>
                </div>

              <div class="estado-default-tipo">
                <button type="submit" class="botn-p botn-primario poppins-medium-white-16px" style="border: none;">
                  Iniciar Sesión
                </button>
              </div>


              <div class="accesso-google">
                <div class="frame-52">
                  <div class="acceder-con">Acceder con</div>
                  <img
                    class="image-28"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/630d39884df0c20ccf0bd4be/img/image-28@2x.png"
                  />
                </div>
              </div>
          
            </div>
          </form>





        </div>
      </div>
    </div>



   <script type="text/javascript">
    function togglePasswordInput() {
      var input = document.getElementById('txtPassword');
      if (input.type === 'text') {
        input.type = 'password';
      } else {
        input.type = 'text';
      }
    }

    function accionaMenu() {
      var menu = document.getElementById('menu-container');
      if (menu.style.display === 'block') {
        menu.style.display = 'none';
      } else {
        menu.style.display = 'block';
      }      
    }

  </script>

  </body>
</html>
