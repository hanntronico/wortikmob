<?php  
  session_start();
  include_once "../conf/conf.php";

  // $sql = "SELECT id,
  //                name,
  //                surnames,
  //                birthdate,
  //                ubication,
  //                sexo,
  //                phone,
  //                email,
  //                doc_id,
  //                localidad,
  //                cv,
  //                position,
  //                image
  //         FROM profiles
  //         WHERE id = 1";

  // $db = $dbh->prepare($sql);
  // $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);


  $sql2 = "SELECT J.ID as job, J.*, C.* 
           FROM JOBS J 
           INNER JOIN JOBS_PROFILES JP 
           ON J.id = JP.id_job 
           INNER JOIN PROFILES P 
           ON jp.id_profile = P.id 
           INNER JOIN COMPANIES C 
           ON J.company_id = C.id
           WHERE P.id = " . $_SESSION["idPosutlante"];
  $db = $dbh->prepare($sql2);
  $db->execute();
  $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="crea_mensaje.css" />
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

      <div class="datos-personales-1 screen">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <img
            class="align-justify-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"
          />
        </a> 

        <img
          class="group"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/group@2x.svg"
        />
        <div class="frame-2963">
          <div class="overlap-group">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">12</div></div>
          </div>
        </div>

        <div class="frame-3591">
          <div class="frame-3592">
            <div class="nombre poppins-medium-malachite-16px">Mensajes</div>
            <div class="frame-3552">
              <div class="mensajes poppins-normal-storm-dust-12px">Mensajes /</div>
              <div class="mensaje-patricia-castaeda poppins-normal-malachite-12px">Mensaje: Patricia Castañeda...</div>
            </div>
          </div>
          <div class="usuario">
            <img
              class="foto"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/foto@2x.svg"
            />
            <div class="texto">
              <p class="nombre-1 poppins-normal-white-12px">
                <span class="poppins-normal-star-dust-12px">Para:</span
                ><span class="poppins-normal-storm-dust-12px"> Patricia Castañeda Ramirez<br /></span
                ><span class="poppins-normal-star-dust-12px"
                  >Recruiter&nbsp;&nbsp;I&nbsp;&nbsp;Analista digital&nbsp;&nbsp;I&nbsp;&nbsp;Proyectos</span
                >
              </p>
            </div>
          </div>
          <div class="frame-3479">
            <div class="frame-3451">

            <form id="frmEnviarMensaje" method="POST" action="enviar_mensaje.php">
              
                <input type="text" class="poppins-normal-star-dust-16px asunto_text form-control" name="txtAsunto" id="txtAsunto" value="" placeholder="Asunto">

<!--               <div class="frame-3069"><div class="asunto poppins-normal-star-dust-16px">Asunto</div></div> -->
<!--               <img
                class="vector-9"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9@2x.svg"
              /> -->

            </div>
            <div class="campo-escribir border-1px-pink-swan">
              <div class="escribir poppins-normal-star-dust-16px" style="width: 90%; height: 60%;">
                
                <textarea class="form-control" cols="12" name="txtMensaje" id="txtMensaje" style="width: 100%; height: 100%; background-color: transparent; border: none;" placeholder="Escribir..."></textarea>


              </div>
              <div class="edicin">
                <div class="edicin-item border-1px-pink-swan"><div class="b poppins-bold-storm-dust-16px">B</div></div>
                <div class="edicin-item border-1px-pink-swan">
                  <img
                    class="tag-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/tag-1@2x.svg"
                  />
                </div>
                <div class="edicin-item border-1px-pink-swan">
                  <img
                    class="icon-file"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/file-generic-2@2x.svg"
                  />
                </div>
                <div class="edicin-item border-1px-pink-swan">
                  <img
                    class="bullet-list-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/bullet-list-1@2x.svg"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="nuevo-mensaje">
<!--           <div class="frame-3353"><div class="descripcin poppins-semi-bold-white-12px">Enviar mensaje</div></div> -->
          <button type="submit" class="frame-3353 descripcin poppins-semi-bold-white-12px" style="border: none;">Enviar mensaje</button>
        </div>

       
       </form> 

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
