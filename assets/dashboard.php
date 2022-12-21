<?php  
  session_start();
  // $_SESSION["idPosutlante"] = 1; 
  include_once "../conf/conf.php";

  $sql = "SELECT id,
                 name,
                 surnames,
                 birthdate,
                 ubication,
                 sexo,
                 phone,
                 email,
                 doc_id,
                 localidad,
                 cv,
                 position,
                 image
          FROM profiles
          WHERE id = " . $_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  </head>
  <body style="margin: 0; background: #f9f9f9" class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar" style="padding: 0px;">
      <?php include 'menu.php' ?>
    </div>
  </aside>




<!-- <nav class="navbar navbar-light bg-faded">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
          <img
            class="align-justify-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"
          />
  </button>

  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mi perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Postulaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mensajes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gaurdados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Salarios</a>
      </li>      
    </ul>
  </div>

</nav> -->


    <input type="hidden" id="anPageName" name="page" value="dashboard" />

    <div class="container-center-horizontal" style="border: 0px solid green; padding: 0px 8px;">
      <div class="dashboard screen" style="height: 70px; border: 0px solid red; width: 100%;">
        <div class="overlap-group44">

          <div class="overlap-group33">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo">
              <div class="number poppins-semi-bold-white-12px">0</div>
            </div>
          </div>
          
          <div class="titulo">
            <img src="img/logo_wortika_verde_titulo@2x.svg" />  
          </div>


          <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" id="btnMenu" href="#" role="button">
              <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg">
            </a>
          </div>



<!--           <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" id="btnMenu" href="#" role="button">
              <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg">
            </a>
          </div> -->
          
<!--           <img
            class="align-justify-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"
          /> -->


<!--           <img
            class="group"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/group@2x.svg"
          />
          <div class="overlap-group3">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">12</div></div>
          </div> -->







        </div>

          <div class="frame_principal">
            <div class="frame-3543">
              <div class="texto">
                <h1 class="aviso-2 poppins-semi-bold-storm-dust-24px">Hola <?php echo $reg->name; ?></h1>
                <div class="aviso-3 poppins-light-storm-dust-12px">¡Te damos la bienvenida!</div>
              </div>
              <div class="frame-3515">
                <div class="banner">
                  <div class="ttulo poppins-semi-bold-malachite-18px">¡Te damos la bienvenida a Wortika!</div>
                  <p class="descripcin poppins-medium-malachite-12px">
                    Tu próximo empleo lo encontrarás aquí. ¿Empezamos?
                  </p>
                  <div class="frame-3353">
                    <a href="javascript:;" onclick="irEmpleos()">
                      <div class="descripcin-1 poppins-semi-bold-white-12px">Encontrar empleo</div>
                    </a>
                  </div>
                </div>
                <div class="frame-3359">
                  <div class="overlap-group-1">
                    <img
                      class="fondo"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/fondo@2x.svg"
                    />
                    <div class="info">
                      <div class="aviso-4 poppins-medium-malachite-16px">Tu CV Wortika</div>
                      <p class="aviso-5 poppins-light-storm-dust-12px">
                        Por completar tu perfil. Ahora puedes descargar tu CV gratis.
                      </p>
                      <div class="frame-3353-1">
                        <a href="assets/docs/cv.pdf">
                          <img
                            class="icon-download_arrow"
                            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/download-3-2@2x.svg"
                          />
                          <div class="descripcin-2 poppins-medium-storm-dust-12px">Descargar CV</div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-3067">
                <div class="ellipse-49"></div>
                <div class="ellipse-48"></div>
              </div>
              <div class="overlap-group1-1">
                <div class="frame-3331">
                  <img
                    class="undraw_spreadsheets_re_alt0-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-spreadsheets-re-alt0-1@2x.svg"
                  />
                </div>
                <div class="info-1">
                  <div class="aviso poppins-medium-malachite-16px">Postulaciones</div>
                  <p class="aviso-1 poppins-light-storm-dust-12px">Avanza en los procesos de tu empleo deseado.</p>
                <a href="./postulaciones.php">
                <div class="ver-mas">
                    <div class="ver poppins-semi-bold-malachite-12px">Ver</div>
                    <img
                      class="add-stroke-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/add-stroke-1@2x.svg"
                    />
                  </div>
                </a>
                </div>
              </div>
              <div class="overlap-group2-1">
                <div class="frame-3331-1">
                  <div class="overlap-group-2">
                    <img
                      class="undraw_online_banking_re_kwqh-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                  </div>
                </div>
                <div class="info-2">
                  <div class="aviso poppins-medium-malachite-16px">
                    Salarios
                  </div>
                  <p class="aviso-1 poppins-light-storm-dust-12px">
                    ¡Conoce la remuneración de tu puesto, en el mercado actual!
                  </p>
                  <div class="ver-mas-1">
                    <div class="conocer poppins-semi-bold-malachite-12px">
                      <a href="./404.php" style="color: ;">Conocer</a>
                    </div>
                    <img
                      class="add-stroke-1-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                  </div>
                </div>
              </div>
              <div class="overlap-group3-1">
                <div class="frame-3331-2">
                  <img
                    class="fondo-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                  />
                </div>
                <div class="info-3">
                  <div class="aviso poppins-medium-malachite-16px">Mis empleos (guardados)</div>
                  <div class="frame-3330 poppins-light-storm-dust-12px">
                    <div class="programador-fullstack">Programador Fullstack</div>
                    <img
                      class="vector-23"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                    <div class="analista-programador-java">Analista programador Java</div>
                    <img
                      class="vector-24"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                    <div class="analista-programador-backend-java">Analista programador backend java</div>
                  </div>
                  <div class="ver-mas-2">
                    <div class="ver-1 poppins-semi-bold-malachite-12px">
                    <a href="404.php">Ver</a></div>
                    <img
                      class="add-stroke-1-2"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!--  <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        
        $("#btnClose").click(function () {    
            $("#btnMenu").click();
        });
        
      });      
    </script>
  </body>
</html>
