<?php  
  session_start();
  $_SESSION["idPosutlante"] = 1; 
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
    <link rel="stylesheet" type="text/css" href="mensajes-5.css" />
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

      <div class="mensajes-5 screen" style="border: 1px solid blue; height: 1500px;">




        <div class="overlap-group3">
         
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
          <div class="overlap-group-1">
            <img
              class="bell"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
            />
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">12</div></div>
          </div>

          <div class="maintitle">
            <div class="mensajes poppins-normal-storm-dust-12px">Mensajes /</div>
            <div class="mensaje-patricia-castaeda poppins-normal-malachite-12px">Mensaje: Patricia Castañeda...</div>
          </div>



        <div class="newmessege">
          <div class="ttulo-5 poppins-medium-storm-dust-16px">Nuevo mensaje</div>
          <div class="frame-3275">
            <a href="crear_mensaje.php">
              <div class="crear poppins-medium-malachite-12px">Crear</div>
              <img
                class="add-stroke-3"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/add-stroke-1@2x.svg"
              />
              
            </a>
          </div>
        </div>


          <div class="frame-3575" style="height: 1500px;">

            <div class="mensaje-4">
              <div class="ttulo-1">
                <p class="ttulo poppins-medium-storm-dust-16px">Sobre el reenvio de CV</p>
                <div class="usuario">
                  <img
                    class="foto"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/foto-2@2x.svg"
                  />
                  <div class="texto">
                    <div class="de poppins-normal-star-dust-12px">De:</div>
                    <div class="nombre poppins-normal-white-12px">
                      <span class="poppins-normal-storm-dust-12px">Patricia Castañeda Ramirez<br /></span
                      ><span class="poppins-normal-star-dust-12px">(para mi)</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contenido-1 poppins-light-storm-dust-12px">
                <p class="contenido">
                  Que tal Christian, respecto a lo conversado el día de ayer. Te hago entrega de mi CV cambiado y
                  actualizado.<br /><br />Saludos.<br />Patricia Castañeda.
                </p>
                <div class="fecha-1">
                  <span class="poppins-light-storm-dust-12px">Recibido: </span
                  ><span class="poppins-normal-storm-dust-12px">04/05/22</span>
                </div>
              </div>
            </div>

            <img
              class="separador"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/separador@2x.png"
            />            

<!--             <img
              class="separador"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/separador@2x.svg"
            /> -->

            <div class="mensaje-6">
              <div class="ttulo-2">
                <div class="ttulo-3 poppins-medium-storm-dust-16px">Petición de CV</div>
                <div class="usuario">
                  <div class="foto">
                    <div class="overlap-group">
                      <div class="ellipse-225 border-0-7px-verde"></div>
                      <div class="c poppins-semi-bold-malachite-16px">C</div>
                    </div>
                  </div>
                  <div class="texto">
                    <div class="de-1 poppins-normal-star-dust-12px">De:</div>
                    <div class="nombre poppins-normal-white-12px">
                      <span class="poppins-normal-storm-dust-12px">Christian Vera Paucará<br /></span
                      ><span class="poppins-normal-star-dust-12px">(Tú)</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contenido-2 poppins-light-storm-dust-12px">
                <p class="contenido">
                  Hola Patricia, esta por terminar el tiempo de ingreso. En cuanto tengas tu CV actualizado compartemelo
                  porfavor.<br /><br />Saludos.<br />Christian Vera Paucará
                </p>
                <div class="fecha">
                  <span class="poppins-light-storm-dust-12px">Recibido: </span
                  ><span class="poppins-normal-storm-dust-12px">03/05/22</span>
                </div>
              </div>
            </div>

            <img
              class="separador-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/separador@2x.png"
            />

            <div class="mensaje-7">
              <div class="ttulo-4">
                <p class="ttulo poppins-medium-storm-dust-16px">Sobre el reenvio de CV</p>
                <div class="usuario">
                  <div class="foto">
                    <div class="overlap-group">
                      <div class="ellipse-225 border-0-7px-verde"></div>
                      <div class="c poppins-semi-bold-malachite-16px">A</div>

                    </div>
                  </div>
                  <div class="texto">
                    <div class="de-2 poppins-normal-star-dust-12px">De:</div>
                    <div class="nombre poppins-normal-white-12px">
                      <span class="poppins-normal-storm-dust-12px">Patricia Castañeda Ramirez<br /></span
                      ><span class="poppins-normal-star-dust-12px">(para mi)</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contenido-3 poppins-light-storm-dust-12px">
                <p class="contenido">
                  Que tal Christian, respecto a lo conversado el día de ayer. Te hago entrega de mi CV cambiado y
                  actualizado.<br /><br />Saludos.<br />Patricia Castañeda.
                </p>
                <div class="fecha">
                  <span class="poppins-light-storm-dust-12px">Recibido: </span
                  ><span class="poppins-normal-storm-dust-12px">02/05/22</span>
                </div>
              </div>
            </div>
            <img
              class="separador-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/separador@2x.png"
            />

            <div class="no-hay-ms-mensajes">No hay más mensajes.</div>
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
