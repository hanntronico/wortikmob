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
    <link rel="stylesheet" type="text/css" href="dashboard-empresa.css" />
    <link rel="stylesheet" type="text/css" href="estilos_empre/styleguide2.css" />
    <link rel="stylesheet" type="text/css" href="estilos_empre/globals2.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  </head>

  <body class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu_empre.php' ?>

    </div>
  </aside>


    <input type="hidden" id="anPageName" name="page" value="dashboard" />


    <div class="container-center-horizontal">
      <div class="dashboard-empresa screen" style="border: none; width: 100%; display: flex; align-content: center; justify-content: center;">
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

<!--            <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg"> -->

          <!-- <img class="logo" src="assets/logo-1@2x.svg" alt="Logo" /> -->

          <img
            class="logo"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/group@2x.svg"
            alt="Logo"
          />          

          <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" id="btnMenu" href="#" role="button">
              <img src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a34a12a875e505096fc10c/img/align-justify-2@2x.svg">
            </a>
          </div>  

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

<!--           <div class="frame-2963">
            <div class="overlap-group3">
              <img class="bell" src="assets/bell-1@2x.svg" alt="Bell" />
              <div class="nuevo-1"><div class="number-1 poppins-semi-bold-white-12px">01</div></div>
            </div>
          </div> -->

          <div class="frame-3384">
            <a href="javascript:;" onclick="verPublicados(<?php echo $_SESSION["idEmpresa"]; ?> )"><div class="frame-163"><div class="ados poppins-medium-malachite-14px">Publicados</div></div></a>
            <a href="javascript:;" onclick="verCerrados(<?php echo $_SESSION["idEmpresa"]; ?> )"><div class="frame-165"><div class="ados poppins-normal-storm-dust-14px">Cerrados</div></div></a>
          </div>
          <div class="frame-3701">
            <div class="frame-3426" id="tab_Publicados">
              
<?php 
    while ( $regJobsCompanies = $db->fetch(PDO::FETCH_OBJ) ) {
    $createDate = ( !is_null($regJobsCompanies->fec_job) ) ? date("d/m/Y", strtotime( $regJobsCompanies->fec_job )) : '';
 ?>              

              <div class="frame-3427">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">12</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso-1 poppins-medium-malachite-14px"><?php echo $regJobsCompanies->puesto; ?></div>
                      <div class="lugar poppins-medium-storm-dust-12px"><?php echo $regJobsCompanies->empresa; ?></div>
                      <div class="lugar-1 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin poppins-normal-storm-dust-12px">Creado: <?php echo $createDate; ?></div>
                      <div class="creacin-1 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>

                  <img class="chevron-down-12" id="chevron_arriba" src="assets/chevron-down-12-5@2x.svg" alt="Chevron-down 12" onclick="ocultarDetalle(<?php echo $regJobsCompanies->job; ?>)" style="display: none;" />

                  <img class="chevron-down-12" id="chevron_abajo" src="assets/chevron-down-12@2x.svg" alt="Chevron-down 12" onclick="verDetalle(<?php echo $regJobsCompanies->job; ?>)" />

                </div>

                
                <div id="<?php echo 'detalleResponsable'.$regJobsCompanies->job; ?>" style="display: none;">
                  <div class="responsable">
                    <img class="foto" src="assets/foto@2x.svg" alt="Foto" />
                    <div class="normeo-raimondi poppins-medium-storm-dust-16px">Normeño Raimondi</div>
                    <div class="especialista-de-seleccin poppins-normal-storm-dust-12px">Especialista de Selección</div>
                    <div class="responsables poppins-normal-storm-dust-12px">Responsable(s)</div>
                  </div>
                </div>
                  
                <div id="<?php echo 'detalleDatos'.$regJobsCompanies->job; ?>" style="display: none;">  
                  <div class="estadstica">
                    <div class="frame-184 poppins-normal-storm-dust-12px">
                      <div class="visualizacines-958">Visualizaciónes:&nbsp;&nbsp;958</div>
                      <div class="total-candidatos-900">Total candidatos:&nbsp;&nbsp;900</div>
                      <div class="frame-184-item">Activos:&nbsp;&nbsp;30</div>
                      <div class="frame-184-item">Descartados:&nbsp;&nbsp;47</div>
                    </div>
                  </div>
                </div>

              </div>

<?php  
  }
?>              

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
                  <img class="chevron-down-12" src="assets/chevron-down-12-6@2x.svg" alt="Chevron-down 12" />
                </div>
              </div> -->

<!--               <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Analist@ de operacione...</div>
                      <div class="lugar-4 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-5 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-4 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-5 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img class="chevron-down-12" src="assets/chevron-down-12-6@2x.svg" alt="Chevron-down 12" />
                </div>
              </div> -->

<!--               <div class="frame-34">
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
                  <img class="chevron-down-12" src="assets/chevron-down-12-6@2x.svg" alt="Chevron-down 12" />
                </div>
              </div> -->

<!--               <div class="frame-34">
                <div class="frame-3424">
                  <div class="indicador">
                    <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">02</div></div>
                  </div>
                  <div class="nombre">
                    <div class="datos">
                      <div class="aviso poppins-medium-malachite-14px">Ana-lista de operacione...</div>
                      <div class="lugar-8 poppins-medium-storm-dust-12px">Samsung</div>
                      <div class="lugar-9 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                      <div class="creacin-8 poppins-normal-storm-dust-12px">Creado: 22/Ene/2021</div>
                      <div class="creacin-9 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                    </div>
                    <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Publicado</div></div>
                  </div>
                  <img class="chevron-down-12" src="assets/chevron-down-12-6@2x.svg" alt="Chevron-down 12" />
                </div>
              </div> -->

            </div>


          <div class="frame-3426" id="tab_Cerrados" style="display: none;">

              <?php 

                $sql_cerrados = "SELECT J.ID as job, J.*, C.*, 
                                    J.created_at as fec_job, J.name as puesto,  C.business_name as empresa 
                                    from jobs J INNER JOIN COMPANIES C 
                             ON J.company_id = C.id
                            WHERE J.status = 'SUCCESSFUL_CLOSING' AND C.id = " . $_SESSION["idEmpresa"];
                $db2 = $dbh->prepare($sql_cerrados);
                $db2->execute();

                  while ( $regJobsCompanieClose = $db2->fetch(PDO::FETCH_OBJ) ) {
                  $createDate = ( !is_null($regJobsCompanieClose->fec_job) ) ? date("d/m/Y", strtotime( $regJobsCompanieClose->fec_job )) : '';
               ?> 



                            <div class="frame-3427" id="tab_Publicados">
                              <div class="frame-3424">
                                <div class="indicador">
                                  <div class="nuevo"><div class="number poppins-semi-bold-white-14-4px">66</div></div>
                                </div>
                                <div class="nombre">
                                  <div class="datos">
                                    <div class="aviso-1 poppins-medium-malachite-14px"><?php echo $regJobsCompanieClose->puesto; ?></div>
                                    <div class="lugar poppins-medium-storm-dust-12px"><?php echo $regJobsCompanieClose->empresa; ?></div>
                                    <div class="lugar-1 poppins-normal-storm-dust-12px">Lima, San Isidro</div>
                                    <div class="creacin poppins-normal-storm-dust-12px">Creado: <?php echo $createDate; ?></div>
                                    <div class="creacin-1 poppins-normal-storm-dust-12px">Oferta confidencial</div>
                                  </div>
                                  <div class="estado"><div class="publicado poppins-semi-bold-white-12px">Exitoso</div></div>
                                </div>

                                <img class="chevron-down-12" id="chevron_arriba" src="assets/chevron-down-12-5@2x.svg" alt="Chevron-down 12" onclick="ocultarDetalle(<?php echo $regJobsCompanieClose->job; ?>)" style="display: none;" />

                                <img class="chevron-down-12" id="chevron_abajo" src="assets/chevron-down-12@2x.svg" alt="Chevron-down 12" onclick="verDetalle(<?php echo $regJobsCompanieClose->job; ?>)" />

                              </div>

                              
                              <div id="<?php echo 'detalleResponsable'.$regJobsCompanies->job; ?>" style="display: none;">
                                <div class="responsable">
                                  <img class="foto" src="assets/foto@2x.svg" alt="Foto" />
                                  <div class="normeo-raimondi poppins-medium-storm-dust-16px">Normeño Raimondi</div>
                                  <div class="especialista-de-seleccin poppins-normal-storm-dust-12px">Especialista de Selección</div>
                                  <div class="responsables poppins-normal-storm-dust-12px">Responsable(s)</div>
                                </div>
                              </div>
                                
                              <div id="<?php echo 'detalleDatos'.$regJobsCompanies->job; ?>" style="display: none;">  
                                <div class="estadstica">
                                  <div class="frame-184 poppins-normal-storm-dust-12px">
                                    <div class="visualizacines-958">Visualizaciónes:&nbsp;&nbsp;958</div>
                                    <div class="total-candidatos-900">Total candidatos:&nbsp;&nbsp;900</div>
                                    <div class="frame-184-item">Activos:&nbsp;&nbsp;30</div>
                                    <div class="frame-184-item">Descartados:&nbsp;&nbsp;47</div>
                                  </div>
                                </div>
                              </div>

                            </div>



              <?php  
                }
              ?>  
                        
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
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script> -->

    <script type="text/javascript">


      function verDetalle(idJob) {
        console.log(idJob);

        $("#detalleResponsable"+idJob).attr("style", "display: block;");
        $("#detalleDatos"+idJob).attr("style", "display: block;");
        
        $("#chevron_abajo").attr("style", "display: none");
        $("#chevron_arriba").attr("style", "display: block;");

      }

      function ocultarDetalle(idJob) {
        $("#detalleResponsable"+idJob).attr("style", "display: none;");
        $("#detalleDatos"+idJob).attr("style", "display: none;");
        $("#chevron_abajo").attr("style", "display: block");
        $("#chevron_arriba").attr("style", "display: none;");
      }

      function verCerrados(idEmpresa) {
        console.log('codigo de empresa: ' + idEmpresa);
        $("#tab_Publicados").attr("style", "display: none;");
        $("#tab_Cerrados").attr("style", "display: block;");
      }

      function verPublicados(idEmpresa) {
        console.log('codigo de empresa:' + idEmpresa);
        $("#tab_Publicados").attr("style", "display: block;");
        $("#tab_Cerrados").attr("style", "display: none;");
      }

    </script>

  </body>
</html>
