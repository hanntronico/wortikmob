<?php  
  session_start();
  include_once "../conf/conf.php";

  // $sql = "SELECT * FROM jcompanies WHERE id = ".$_SESSION["idEmpresa"];

  // $sql_conteo = "SELECT J.ID as job, J.*, C.*, 
  //                       J.created_at as fec_job
  //                FROM JOBS J 
  //                INNER JOIN JOBS_PROFILES JP 
  //                ON J.id = JP.id_job 
  //                INNER JOIN PROFILES P 
  //                ON jp.id_profile = P.id 
  //                INNER JOIN COMPANIES C 
  //                ON J.company_id = C.id
  //                WHERE C.id = " . $_SESSION["idEmpresa"];

  $sql_conteo = "SELECT J.ID as job, J.*, C.*, 
                      J.created_at as fec_job, J.name as puesto,  C.business_name as empresa 
                      from jobs J INNER JOIN COMPANIES C 
               ON J.company_id = C.id
              WHERE J.status = 'PUBLISHED' AND C.id = " . $_SESSION["idEmpresa"];
  $db = $dbh->prepare($sql_conteo);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="dashboard.css" />

    <link rel="stylesheet" type="text/css" href="dashboard-empresa-1.css" />

    <link rel="stylesheet" type="text/css" href="estilos_empre/styleguide2.css" />
    <link rel="stylesheet" type="text/css" href="estilos_empre/globals2.css" />

<!--     <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" /> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  </head>
  <body style="margin: 0; background: #f9f9f9" class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu_empre.php' ?>

    </div>
  </aside>


    <input type="hidden" id="anPageName" name="page" value="dashboard" />






    <div class="container-center-horizontal">
      <div class="dashboard-empresa-1 screen">
        <div class="overlap-group4">
          <div class="frame-3536">
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
          </div>
<!--           <img
            class="align-justify-2"
            onclick=""
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"
            alt="Align-Justify 2"
          /> -->

          <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" id="btnMenu" href="#" role="button">
              <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg">
            </a>
          </div>          

          <img
            class="logo"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/group@2x.svg"
            alt="Logo"
          />
          <div class="frame-2963">
            <div class="overlap-group3">
              <img
                class="bell"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/bell@2x.svg"
                alt="Bell"
              />
              <div class="nuevo-1"><div class="number-1 poppins-semi-bold-white-12px">01</div></div>
            </div>
          </div>
          <div class="frame-3384">
            <div class="frame-163"><div class="ados poppins-medium-malachite-14px">Publicados</div></div>
            <div class="frame-165"><div class="ados poppins-normal-storm-dust-14px">Cerrados</div></div>
          </div>

          <div class="frame-3701">
            <div class="frame-3426">


<?php 

    while ( $regJobsCompanies = $db->fetch(PDO::FETCH_OBJ) ) {

    // $createDate = ( !is_null($regJobs->created_at) ) ? date("d/m/Y", strtotime( $regJobs->created_at )) : '';
    
 ?>

              <div class="frame-34" id="<?php echo 'div'.$regJobsCompanies->job;?>" onclick="" style="border: 1px solid red; margin-left: -1px;">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">12</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso-1 poppins-medium-malachite-14px"><?php echo $regJobsCompanies->puesto; ?></div>
                      <div class="lugar poppins-medium-storm-dust-12px"><?php echo $regJobsCompanies->empresa; ?></div>
                      <div class="lugar-1 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-1 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>

                    <img
                    class="chevron-down-12"
                    src="assets/chevron-down-12@2x.svg"
                    alt="Chevron-down 12" onclick="verDetalle(<?php echo $regJobsCompanies->job; ?>)"
                    />                    

                </div>

                <div id="<?php echo 'divDetalle'.$regJobsCompanies->job;?>" style="display: none;">
                    
                </div>

                
              </div>

<!--               <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Analista de operacione...</div>
                      <div class="lugar-2 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-3 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-2 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-3 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img
                    class="chevron-down-12"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/635067883f27792e46568de9/img/chevron-down-12-1@2x.svg"
                    alt="Chevron-down 12"
                  />
                </div>
              </div>
              <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Analista de operacione...</div>
                      <div class="lugar-4 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-5 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-4 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-5 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img
                    class="chevron-down-12"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/635067883f27792e46568de9/img/chevron-down-12-2@2x.svg"
                    alt="Chevron-down 12"
                  />
                </div>
              </div>
              <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Analista de operacione...</div>
                      <div class="lugar-6 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-7 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-6 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-7 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img
                    class="chevron-down-12"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/chevron-down-1@2x.png"
                    alt="Chevron-down 12"
                  />
                </div>
              </div>
              <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Analista de operacione...</div>
                      <div class="lugar-8 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-9 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-8 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-9 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img
                    class="chevron-down-12"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/chevron-down-1@2x.png"
                    alt="Chevron-down 12"
                  />
                </div>
              </div> -->

<?php 
      }
?>              

            </div>
          </div>
        </div>
      </div>
    </div>





<!--     <div class="container-center-horizontal">
      <div class="dashboard screen">
        <div class="overlap-group4"> -->

<!--           <div class="overlap-group2">
            <div class="overlap-group1">
              <div class="azul"></div>
              <div class="overlap-group">
                <div class="verde"></div>
                <div class="azul-1"></div>
              </div>
            </div>
            <div class="azul-2"></div>
          </div> -->

<!--           <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" id="btnMenu" href="#" role="button">
              <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg">
            </a>
          </div>

          <img
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











<!--           <div class="frame-3553">
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
                    <div class="descripcin-1 poppins-semi-bold-white-12px">Encontrar empleo</div>
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
                  <div class="aviso poppins-medium-malachite-16px">Salarios</div>
                  <p class="aviso-1 poppins-light-storm-dust-12px">
                    ¡Conoce la remuneración de tu puesto, en el mercado actual!
                  </p>
                  <div class="ver-mas-1">
                    <div class="conocer poppins-semi-bold-malachite-12px">Conocer</div>
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
                    <div class="ver-1 poppins-semi-bold-malachite-12px">Ver</div>
                    <img
                      class="add-stroke-1-2"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/undraw-online-banking-re-kwqh-1@2x.png"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div> -->
<!--         </div>
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

    <script type="text/javascript">

      function verDetalle(idJob) {
        console.log(idJob);
        // $("#div"+idJob).attr("style", "height: 200px; border: 1px solid blue;");
        $("#div"+idJob).attr("style", "border: 1px solid blue;");
        $("#divDetalle"+idJob).attr("style", "display: block; border: 1px solid green;");
      }

    </script>

  </body>
</html>
