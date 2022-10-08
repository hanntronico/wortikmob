<?php  
  session_start();
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
          WHERE id = ".$_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);


    $sql2 = "SELECT J.*, C.* 
           FROM JOBS J 
           INNER JOIN JOBS_PROFILES JP 
           ON J.id = JP.id_job 
           INNER JOIN PROFILES P 
           ON jp.id_profile = P.id 
           INNER JOIN COMPANIES C 
           ON J.company_id = C.id
           WHERE P.id = " . $_SESSION["idPosutlante"] . " AND J.ID = " . $_GET["id"];
  $db = $dbh->prepare($sql2);
  $db->execute();
  $data= Array();
  $regDatos = $db->fetch(PDO::FETCH_OBJ);

  $createDate = ( !is_null($regDatos->created_at) ) ? date("d/m/Y", strtotime( $regDatos->created_at )) : '';


  $sql3 = "select count(*) as total from jobs_profiles where id_job = " . $_GET["id"];
  $db3 = $dbh->prepare($sql3);
  $db3->execute();
  $totalCandidatos = $db3->fetch(PDO::FETCH_OBJ);

 

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="postulaciones_detalle.css" />
    <!-- <link rel="stylesheet" type="text/css" href="postulaciones.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="miperfil.css" /> -->


    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu.php' ?>

    </div>
  </aside>

    <input type="hidden" id="anPageName" name="page" value="postulaciones" />

    <div class="container-center-horizontal">
      <div class="mensajes screen">
        <div class="overlap-group5">
          <div class="overlap-group2">
            <div class="overlap-group1">
              <div class="azul"></div>
              <div class="overlap-group">
                <div class="verde"></div>
                <div class="azul-1"></div>
              </div>
            </div>
            <div class="azul-2"></div>
          </div>

          <div class="frame-3551">
            <div class="postulaciones poppins-normal-storm-dust-12px">Postulaciones /</div>
            <div class="programador-fullstack poppins-normal-malachite-12px">
              <?php echo substr($regDatos->name, 0, 21)." ..."; ?>
            </div>
          </div>

          <div class="frame-3550 frame-3571">
            <h1 class="aviso poppins-semi-bold-storm-dust-24px">Tus postulaciones</h1>
            <div class="frame-3319 poppins-normal-storm-dust-12px">
              <div class="frame-355">
                <div class="aviso-1">Aviso</div>
                <p class="programador-fullstac">
                  <span class="poppins-normal-storm-dust-12px"> <?php echo $regDatos->name; ?> <br /></span>
                  <span class="poppins-semi-bold-storm-dust-12px"><?php echo $regDatos->business_name; ?><br /></span>
                  <span class="poppins-normal-storm-dust-12px">
                    Lima, San Isidro<br />Creado: <?php echo $createDate; ?><br />Oferta confidencial
                  </span>
                </p>
              </div>
              <div class="frame-355">
                <div class="estadsticas">Estadísticas</div>
                <p class="visualizacines-958">
                  Visualizaciónes: 958<br />
                  Total candidatos: <?php echo $totalCandidatos->total; ?> <br />
                  Activos: 30
                  <br />Descartados: 47
                </p>
              </div>
              <div class="frame-3555">
                <div class="tareas poppins-normal-storm-dust-12px">Tareas</div>
                <div class="tipo"><div class="completar poppins-medium-storm-dust-12px">Completar</div></div>
              </div>
              <div class="frame-355-1">
                <div class="estados poppins-normal-storm-dust-12px">Estados</div>
                <div class="frame-3339">
                  <div class="solicitud-enviada poppins-medium-storm-dust-12px">Solicitud enviada</div>
                  <div class="frame-3340">
                    <div class="frame-3341"></div>
                    <div class="frame-334"></div>
                    <div class="frame-334"></div>
                    <div class="frame-334"></div>
                  </div>
                </div>
              </div>
              <div class="frame-355-1">
                <div class="mensajes-1 poppins-normal-storm-dust-12px">Mensajes</div>
                <div class="notificaciones">
                  <div class="frame-2963">
                    <div class="nuevo-1"><div class="number-1 poppins-semi-bold-white-12px">01</div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <img
            class="align-justify-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"
          />
          </a>

          <img
            class="group"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62daa4495150f1813bf77495/img/group-1@2x.svg"
          />
          <div class="overlap-group3">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">20</div></div>
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
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  </body>
</html>
