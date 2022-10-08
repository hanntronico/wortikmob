<?php  
  session_start();
  include_once "../conf/conf.php";

  $sql2 = "SELECT count(M.id_recruter) as total, R.nombres, R.apellidos, R.id as idrecruiter
           FROM mensajes M INNER JOIN recruiters R
           ON M.id_recruter = R.id
           WHERE M.id_profile = ".$_SESSION["idPosutlante"]." 
           GROUP BY id_recruter, R.nombres, R.apellidos, R.id";


  $db = $dbh->prepare($sql2);
  $db->execute();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="mensajes.css" />
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

        <div class="overlap-group4">

<!--           <div class="overlap-group2">
            <div class="overlap-group1-1">
              <div class="azul"></div>
              <div class="overlap-group-2">
                <div class="verde"></div>
                <div class="azul-1"></div>
              </div>
            </div>
            <div class="azul-2"></div>
          </div> -->


          <div class="frame-3550">
            <div class="frame-3426">

<?php while ( $regMensajes = $db->fetch(PDO::FETCH_OBJ) ) {

    // $createDate = ( !is_null($regJobs->created_at) ) ? date("d/m/Y", strtotime( $regJobs->created_at )) : '';
  $i++;
 ?>
              <div class="frame-3427">

                <a href="mensajes_detalle.php?id_recruiter=<?php echo $regMensajes->idrecruiter ?>">
                  <div class="col_nombre">
                    <div class="overlap-group1">
                      <img
                        class="foto"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/foto@2x.svg"
                      />
                      <div class="overlap-group">
                        <img
                          class="icon-star"
                          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/star-21@2x.svg"
                        />
                      </div>
                    </div>
                    <div class="aviso poppins-medium-malachite-16px">
                      <span class="poppins-medium-storm-dust-16px">
                        <?php echo $regMensajes->nombres . " " . $regMensajes->apellidos; ?>                      
                      </span><br>
                        <span class="span1 poppins-light-storm-dust-12px">IT Recruiter</span>
                    </div>
                  </div>
                </a>



                <div class="frame-3425">
                  <div class="x1020-pm poppins-light-storm-dust-12px">10:20 pm</div>
                  <div class="nuevo">
                    <div class="number poppins-bold-white-12px">
                      0<?php echo $regMensajes->total;?> 
                    </div>
                  </div>
                </div>

              </div>

<?php } ?>

            </div>

            <div class="texto">
              <h1 class="aviso-1">Mensajes</h1>
              <p class="aviso-2 poppins-light-storm-dust-12px">Conversa con tu reclutador</p>
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
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/group@2x.svg"
          />
          <div class="overlap-group3">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo-2"><div class="number-1 poppins-semi-bold-white-12px">12</div></div>
          </div>



        </div>
      </div>
    </div>



<!--     <div class="container-center-horizontal">
      <div class="tus-postulaciones mensajes screen">
        <div class="overlap-group4">
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
    </div> -->


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
