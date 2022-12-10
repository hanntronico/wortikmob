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
  //         WHERE id = " . $_SESSION["idPosutlante"];

  // $db = $dbh->prepare($sql);
  // $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

  $sqlJobPref = "SELECT idJobPref, situation, desired_job, area, seniority, idProfile, min_salary, currency 
                 FROM job_preferences WHERE idProfile = " . $_SESSION["idPosutlante"];

  $db = $dbh->prepare($sqlJobPref);
  $db->execute();
  $data= Array();
  $regJobPref = $db->fetch(PDO::FETCH_OBJ);

  // echo "<pre>";
  // print_r($regJobPref);
  // echo "</pre>";
  // exit();
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <!-- <link rel="stylesheet" type="text/css" href="miperfil.css" /> -->
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <style type="text/css">
      .span-green {
          color: #339698;
      }
      
      .lista-aptitudes {
        font-size: 14px;
        width: 120%;
      }      
    </style>


  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu.php' ?>

    </div>
  </aside>




    <input type="hidden" id="anPageName" name="page" value="dashboard" />


     <div class="container-center-horizontal">
      <div class="dashboard screen">
        <div class="overlap-group4"> 



          <div class="align-justify-2">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
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
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">20</div></div>
          </div>


          <div class="frame-3553">

              <div class="main-frame">

                <div class="row" style="border: none; margin: 0px auto; padding: 0px; width: 100%; ">
                  <div class="col-md-12">
                    <h1 class="titulo">Preferencias laborales</h1>
                    <p class="poppins-light-storm-dust-12px" style="text-align: center;"><a href="../miperfil.php" style="text-decoration: none; color:#616161">
                      Mi perfil
                      </a> / 
                      <span style="color: #339698; font-weight: 400; line-height: 130%;">Edición</span></p>
                  </div>
                </div>

                <form style="border: none;" id="frmPreferencia" action="editarPerfil.php" method="POST">
                  <div class="form-row mt-3">

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="situacion" id="situacion">
                          <option value="0">Seleccionar situacion actual</option>
                          <?php $situacion = $regJobPref->situation; ?>
<!--     [idJobPref] => 1
    [situation] => 1
    [desired_job] => {'desarrollador backend', 'desarrollador fullstack'}
    [area] => 2
    [seniority] => 2
    [idProfile] => 1
    [min_salary] => 5000.00
    [currency] => 0 -->

                          
                          <?php //if($sexo=='m'){echo 'selected';}?>
                          <option value="1" <?php echo ($situacion == 1) ? 'selected' : '';?>>Busco empleo activamente</option>
                          <option value="2" <?php echo ($situacion == 2) ? 'selected' : '';?>>Estoy escuchando ofertas</option>
                          <option value="3" <?php echo ($situacion == 3) ? 'selected' : '';?>>No busco empleo</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>


                    <div class="col-12 col-md-12 mb-4">
                      <input type="text" class="form-control input_text" name="puesto_deseado" id="puesto_deseado" placeholder="Puesto deseado">
                    </div>
                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <button type="button" class="btn btn-primary btn-lg|btn-sm" onclick="agregarPuesto()" style="border: none; border-radius: 16px;  background: #E6E6E6; color: #339698; font-size: 16px; padding: 8px 24px;">Agregar</button>
                    </div>

                    <div class="col-12 col-md-12 mb-2">
                      <ul id="lista_puestos_deseados" class="lista-tab p-0"></ul>
                    </div>

                    <div class="col-12 col-md-12 mb-2">
                      <div class="select_frame">
                        <select class="form-control select_input" name="seniority" id="seniority">
                          <option value="0">Seleccionar seniority</option>
                          <?php 
                            $seniority = $regJobPref->seniority; 
                          ?>
                          
                          <?php //if($sexo=='m'){echo 'selected';}?>

                          <option value="1" <?php echo ($seniority == 1) ? 'selected' : '';?>>Junior</option>
                          <option value="2" <?php echo ($seniority == 2) ? 'selected' : '';?>>Semi-senior</option>
                          <option value="3" <?php echo ($seniority == 3) ? 'selected' : '';?>>Senior</option>
                          <option value="4" <?php echo ($seniority == 4) ? 'selected' : '';?>>Master</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mb-2">
                      <div class="select_frame">
                        <select class="form-control select_input" name="area" id="area">
                          <option value="0">Seleccionar área</option>
                          <?php 
                            $area = $regJobPref->area; 
                          ?>
                          
                          <?php //if($sexo=='m'){echo 'selected';}?>

                          <option value="1" <?php echo ($seniority == 1) ? 'selected' : '';?>>Programming</option>
                          <option value="2" <?php echo ($seniority == 2) ? 'selected' : '';?>>Design</option>
                          <option value="3" <?php echo ($seniority == 3) ? 'selected' : '';?>>Human Resources</option>
                          <option value="4" <?php echo ($seniority == 4) ? 'selected' : '';?>>Sales & business</option>
                          <option value="5" <?php echo ($seniority == 5) ? 'selected' : '';?>>Quality Assurance</option>
                          <option value="6" <?php echo ($seniority == 6) ? 'selected' : '';?>>Marketing</option>
                          <option value="7" <?php echo ($seniority == 7) ? 'selected' : '';?>>Data</option>
                          <option value="8" <?php echo ($seniority == 8) ? 'selected' : '';?>>Project & Product Management</option>
                          <option value="9" <?php echo ($seniority == 9) ? 'selected' : '';?>>Informatic security</option>
                          <option value="10" <?php echo ($seniority == 10) ? 'selected' : '';?>>IT Infraestructure</option>
                          <option value="11" <?php echo ($seniority == 11) ? 'selected' : '';?>>Customer service / IT support</option>
                          <option value="12" <?php echo ($seniority == 12) ? 'selected' : '';?>>Business Solutions</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mb-5">
                      <div class="select_frame">
                        <select class="form-control select_input" name="area" id="area">
                          <option value="0">Seleccionar área</option>
                          <?php 
                            $area = $regJobPref->area; 
                          ?>
                          
                          <?php //if($sexo=='m'){echo 'selected';}?>

                          <option value="1" <?php echo ($seniority == 1) ? 'selected' : '';?>>Desarrollo Web</option>
                          <option value="2" <?php echo ($seniority == 2) ? 'selected' : '';?>>Desarrollo Movil</option>
                          <option value="3" <?php echo ($seniority == 3) ? 'selected' : '';?>>Videojuegos</option>
                          <option value="4" <?php echo ($seniority == 4) ? 'selected' : '';?>>Realidad Virtual y aumentada</option>
                          <option value="5" <?php echo ($seniority == 5) ? 'selected' : '';?>>Aplicaciones de escritorio</option>
                          <option value="6" <?php echo ($seniority == 6) ? 'selected' : '';?>>Sistemas operativos y sistemas embebidos</option>
                          <option value="7" <?php echo ($seniority == 7) ? 'selected' : '';?>>Seguridad Informática</option>
                          <option value="8" <?php echo ($seniority == 8) ? 'selected' : '';?>>Maching Learning</option>
                          <option value="9" <?php echo ($seniority == 9) ? 'selected' : '';?>>Cloud Computing</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-12 col-md-12 mb-4">
                        <div>
                          <select class="form-control select_input" name="moneda" id="moneda">
                            <option value="0">Seleccionar moneda</option>
                            <?php 
                              $currency = $regJobPref->currency; 
                            ?>
                            
                            <?php //if($sexo=='m'){echo 'selected';}?>

                            <option value="1" <?php echo ($currency == 1) ? 'selected' : '';?>>Sol peruano (PEN)</option>
                            <option value="2" <?php echo ($currency == 2) ? 'selected' : '';?>>Dolar estadounidense (USD)</option>
                            <option value="3" <?php echo ($currency == 3) ? 'selected' : '';?>>Peso Colombiano (COP)</option>
                            <option value="4" <?php echo ($currency == 4) ? 'selected' : '';?>>Peso Mexicano (MXN)</option>
                            <option value="5" <?php echo ($currency == 5) ? 'selected' : '';?>>Peso Chileno (CLP)</option>
                            <option value="6" <?php echo ($currency == 6) ? 'selected' : '';?>>Euro (EUR)</option>
                            <option value="7" <?php echo ($currency == 7) ? 'selected' : '';?>>Peso Argentino (ARS)</option>
                          </select>
                          <img
                          class="chevron-down-1"
                          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                        />
                        </div>
                      </div>

                      <div class="col-12 col-md-12 mb-3">
                        <input type="text" class="form-control input_text" id="salario" name="salario" placeholder="Salario" value="<?php echo $regJobPref->min_salary;?>" required>
                      </div>                      

                    </div>




                  </div>

                  <div class="form-row mt-2">
                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <button type="submit" class="btn btn-primary btn-lg|btn-sm" style="border: none; border-radius: 16px; background: linear-gradient(270deg, #339698 0%, #83C389 100%); font-size: 12px; padding: 8px 24px;">Guardar</button>
                    </div>
                  </div>

                </form>

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
    <!-- <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {
        
          

      });


      var ddDataPuestosDeseados = [];

      function agregarPuesto() {

        if($("#puesto_deseado").val() != ""){
          $("#puesto_deseado").attr("style", "background: none !important;");
          ddDataPuestosDeseados.push( $("#puesto_deseado").val() );
          // console.log(ddDataPuestosDeseados);
          $("#puesto_deseado").val('');
          mostrarListaPuestos();
        }else{
          // alert("Por favor agregar puesto deseado");
          $("#puesto_deseado").attr("style", "background: #FCDCDC !important;");
        
        }

      }

      function mostrarListaPuestos() {
        var item = "";
        ddDataPuestosDeseados.forEach(function(varItem) {
          item = item + "<li class='lista-aptitudes mt-2 d-flex'><div class='bg-white border-0  p-2 mx-1 rounded-3 '><span class='span-oscuro'> "+varItem+"</span><a href='javascript:;' onclick='quitarPuesto(\""+varItem+"\")'><img src='assets/close--2--1@2x.svg' /></a></div></li>";
            $("#lista_puestos_deseados").html(item);
        });
      }


      function quitarPuesto(puesto) {
          var item = "";
          // console.log(puesto);
          ddDataPuestosDeseados = ddDataPuestosDeseados.filter((item) => item !== puesto)
          // console.log(ddDataPuestosDeseados);

          ddDataPuestosDeseados.forEach(function(varItem) {
          item = item + "<li class='lista-aptitudes mt-2 d-flex'><div class='bg-white border-0  p-2 mx-1 rounded-3 '><span class='span-oscuro'> "+varItem+"</span><a href='javascript:;' onclick='quitarPuesto(\""+varItem+"\")'><img src='assets/close--2--1@2x.svg' /></a></div></li>";
            $("#lista_puestos_deseados").html(item);
        });
      }




      $( "#frmPreferencia" ).submit(function( event ) {
        event.preventDefault();

        // console.log(ddDataPuestosDeseados);  

        $.ajax({
          url: 'upd_preferencias_labor.php',
          type: 'POST',
          data: {codEmp: $("#codJob").val(), 
                 situation: $("#situacion").val(),
                 desired_job: ddDataPuestosDeseados,
                 area: $("#area").val(),
                 seniority: $("#seniority").val(),
                 minSalary: $("#salario").val(),
                 moneda: $("#moneda").val()
               },
        })
        .done(function(data) {
          // console.log(data);
          location.href="../miperfil.php";
          // location.href="antes_postular_conoc.php?idemp="+$("#codJob").val();
        })
        .fail(function() {
          console.log("error");
        })


      });      

    </script>

  </body>
</html>
