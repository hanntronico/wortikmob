<?php  
  session_start();
  include_once "../conf/conf.php";

  $sql_conteo = "SELECT count(*) as total
                 FROM JOBS J 
                 INNER JOIN JOBS_PROFILES JP 
                 ON J.id = JP.id_job 
                 INNER JOIN PROFILES P 
                 ON jp.id_profile = P.id 
                 INNER JOIN COMPANIES C 
                 ON J.company_id = C.id
                 WHERE JP.job_profile_status = 0 AND P.id = " . $_SESSION["idPosutlante"];
  $db = $dbh->prepare($sql_conteo);
  $db->execute();
  $reg_conteo = $db->fetch(PDO::FETCH_OBJ);


  $sql2 = "SELECT J.ID as job, J.*, C.*, J.created_at as fec_job
           FROM JOBS J 
           INNER JOIN JOBS_PROFILES JP 
           ON J.id = JP.id_job 
           INNER JOIN PROFILES P 
           ON jp.id_profile = P.id 
           INNER JOIN COMPANIES C 
           ON J.company_id = C.id
           WHERE JP.job_profile_status = 0 AND P.id = " . $_SESSION["idPosutlante"];
  
  
  $db = $dbh->prepare($sql2);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

  if (isset($_POST["param1"])) {
    echo $_POST["param1"];
    exit();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="postulaciones.css" />
    <link rel="stylesheet" type="text/css" href="vista-de-empleos.css" />

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

      <div class="vista-de-empleos screen">

          <div class="header">
<!--             <img
              class="search-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/search-2-1@2x.svg"
              alt="Search 2"
            /> -->

            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <img
                class="men-hamburguesa"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/men--hamburguesa-3@2x.svg"
                alt="Men Hamburguesa"
              />
            </a>

            <img
              class="logo-versin-positiva-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/logo---versi-n-positiva-2-3@2x.svg"
              alt="Logo - Versin Positiva 2"
            />


          </div>




          <div class="filtros-1" style="border: none; height: 100px; width: 90%;">

            <div class="frame-109" style="margin-left: 25px; width: 90%;">
             
              <input type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar empleo" style="border: none; background-color: transparent; width: 98%; outline: none; font-size: 14px;">

              <a href="#" onclick="buscar()" style="position: fixed; z-index: 500px;">
                <img
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/search-2-1@2x.svg"
                  alt="Search 2"
                />                
              </a>

            </div>
          </div>



        <div class="filtros-1" style="border: none; height: 100px; width: 98%;">

          <!-- <div> -->

          <!-- </div> -->

          <div class="filtros-2" style="border: none; margin-top: 55px;">

            <div class="frame-109">
              <select name="fecha_publicacion" class="fecha-de-publicacin poppins-normal-star-dust-14px" style="border: none; background-color: transparent; outline: none;">
                <option value="0">Ubicación</option>
                <option value="1">Argentina</option>
                <option value="2">Bolivia</option>
                <option value="3">Chile</option>
                <option value="4">Colombia</option>
                <option value="5">Ecuador</option>
                <option value="6">México</option>
                <option value="7">Perú</option>
                <option value="8">Venezuela</option>
              </select>
            </div>

            <div class="frame-109">
              <select name="fecha_publicacion" class="fecha-de-publicacin poppins-normal-star-dust-14px" style="border: none; background-color: transparent; outline: none;">
                <option value="0">Fecha de publicación</option>
                <option value="1">Hoy</option>
                <option value="2">Desde ayer</option>
                <option value="3">Desde hace 3 días</option>
                <option value="4">Desde hace 4 días</option>
                <option value="5">Desde hace 5 días</option>
                <option value="6">Desde hace 6 días</option>
                <option value="7">Desde hace 1 semana</option>
                <option value="8">Desde hace 2 semana</option>
                <option value="9">Desde hace 1 mes</option>
              </select>
            </div>

            <div class="frame-113">
              <select name="modalidad_trabajo" class="modalidad-de-trabajo poppins-normal-star-dust-14px" style="border: none; background-color: transparent; outline: none;">
                <option value="0">Modalidad de trabajo</option>
                <option value="1">Presencial</option>
                <option value="2">Remoto localmente</option>
                <option value="3">Totalmente remoto</option>
                <option value="4">Híbrido</option>
              </select>
            </div>

            <div class="frame-114">
              <select name="tipo_contrato" class="tipo-de-contrato poppins-normal-star-dust-14px" style="border: none; background-color: transparent; outline: none;">
                <option value="0">Tipo de contrato</option>
                <option value="1">Nómina / Planilla</option>
                <option value="2">Contractor</option>
                <option value="3">Freelancer</option>
                <option value="4">Convenio de prácticas</option>
              </select>              
            </div>
          </div>

        </div>


        <div class="group-140 poppins-normal-storm-dust-12px" style="border: none; margin-top: 60px;">
          <div class="overlap-group">
            <div class="rectangle-214"></div>
            <div class="ellipse-195"></div>
          </div>
          <div class="address"><?php echo $reg_conteo->total; ?> resultados</div>
          <div class="alerta-de-empleos-desactivada">Alerta de Empleos Desactivada</div>
        </div>





<div id="listado_empleos" style="border: none; margin-top: 250px; width: 275px; margin-left: 26px;">


<?php 

    while ( $regJobs = $db->fetch(PDO::FETCH_OBJ) ) {

    $createDate = ( !is_null($regJobs->created_at) ) ? date("d/m/Y", strtotime( $regJobs->created_at )) : '';
    
 ?>


    <div class="row" style="border-bottom: 1px solid #D8D8D8; padding: 10px 0px 20px; margin-bottom: 10px;">
      <div class="col-12">

          <div class="nombre_job poppins-medium-storm-dust-16px" style="border: none;">
            <a class="nombre_job poppins-medium-storm-dust-16px" onclick="irDetalleEmpleo(<?php echo $regJobs->job?>)">  
              <?php echo $regJobs->name; ?> 
            </a>
          </div>

          <div class="row" style="border: none; margin-top: -15px; margin-left: -20px;">
            <div class="col-3"></div>
            <div class="col-9" style="padding-left: 0px;">
              <a onclick="alert('dsds')" class="link_nombre_job">
                <?php echo $regJobs->business_name; ?>
              </a>
            </div>
          </div>

          <div class="row" style="border: none; margin-left: -20px;">
            <div class="col-3"></div>
            <div class="col-9 poppins-normal-storm-dust-12px" style="padding-left: 0px; padding-top: 8px;">
                San Isidro, Lima
            </div>
          </div>


          <div class="row" style="border: none; text-align: left; margin-left: -20px;">
            <div class="col-3"></div>

            <div class="col-5 poppins-normal-storm-dust-16px" style="border: none; padding-left: 0px; margin-top: 8px; padding-top: 2px;">
              <?php echo $regJobs->type_of_contract; ?>
            </div>

            <div class="col-1" style="margin-top: 8px; border: none; padding-top: 0px;">
              <img
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/calendar-1@2x.svg"
            alt="Calendar 1"
              />
            </div>

            <div class="col-3 poppins-medium-silver-chalice-12px" style="border: none; font-size: 10px; text-align: left; margin-top: 8px; padding-top: 7px; padding-left: 7px;">
              <?php echo date('d/m/Y', strtotime($regJobs->fec_job));?>
            </div>
          </div>   

          <img
            class="ellipse-18"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/ellipse-18@2x.png"
            alt="Ellipse 18"
          />       
        
          
      </div>
    </div>



<?php  } ?>
      
</div>


        <div class="filtros">
          <div class="empleo-4-1">
            <div class="overlap-group-1"><div class="number-1 poppins-bold-white-16px">1</div></div>
            <div class="overlap-group1"><div class="number poppins-normal-storm-dust-16px">2</div></div>
            <div class="overlap-group2"><div class="number poppins-normal-storm-dust-16px">3</div></div>
          </div>
          <div class="group-149">
            <img
              class="chevron-left-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/chevron-left-1@2x.svg"
              alt="Chevron-left 1"
            />
          </div>
          <div class="group-154">
            <img
              class="chevron-left-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/chevron-left-1-1@2x.svg"
              alt="Chevron-left 1"
            />
          </div>
        </div>

        <div class="overlap-group4">
          <img
            class="vector-17"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-17@2x.svg"
            alt="Vector 17"
          />
          <div class="redes-sociales">
            <div class="fb">
              <img
                class="brandicofacebook"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/brandico-facebook-5@2x.svg"
                alt="brandico:facebook"
              />
            </div>
            <div class="ins">
              <img
                class="icon-instagram"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-instagram-fill-5@2x.svg"
                alt="icon-instagram"
              />
            </div>
            <div class="tw">
              <img
                class="icon-twitter"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-twitter-fill-1@2x.svg"
                alt="icon-twitter"
              />
            </div>
            <div class="in">
              <img
                class="icon-linkedin"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector@2x.svg"
                alt="icon-linkedin"
              />
            </div>
          </div>
          <div class="group-108">
            <div class="es">Es</div>
            <img
              class="chevron-down-5-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/chevron-down--5--2@2x.svg"
              alt="Chevron-down (5) 2"
            />
            <div class="overlap-group3">
              <div class="rectangle-62"></div>
              <div class="rectangle-63"></div>
            </div>
          </div>
          <div class="contcto">
            <div class="telfono poppins-normal-malachite-12px">Teléfono</div>
            <div class="plataforma poppins-semi-bold-malachite-12px">Plataforma</div>
            <div class="correo poppins-normal-malachite-12px">Correo</div>
          </div>
          <div class="plataforma-1">
            <div class="precios poppins-normal-malachite-12px">Precios</div>
            <div class="plataforma-2 poppins-semi-bold-malachite-12px">Plataforma</div>
            <div class="ayuda poppins-normal-malachite-12px">Ayuda</div>
            <div class="soporte poppins-normal-malachite-12px">Soporte</div>
            <div class="contrata-publicidad poppins-normal-malachite-12px">Contrata Publicidad</div>
            <div class="trminos-y-condiciones poppins-normal-malachite-12px">Términos y Condiciones</div>
            <div class="poltica-y-privacidad poppins-normal-malachite-12px">Política y Privacidad</div>
          </div>
          <div class="nosotros">
            <div class="sobre-nosotros poppins-normal-malachite-14px">Sobre nosotros</div>
            <div class="nosotros-1 poppins-semi-bold-malachite-14px">Nosotros</div>
            <div class="nete-a-nosotros poppins-normal-malachite-14px">¡Únete a nosotros!</div>
            <div class="programa-de-referidos poppins-normal-malachite-14px">Programa de Referidos</div>
            <div class="preguntas-frecuentes poppins-normal-malachite-14px">Preguntas Frecuentes</div>
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

    <script type="text/javascript">

      $("#busqueda").focus();
      
      function irDetalleEmpleo(idempleo) {
        location.href = 'detalle_empleo.php?idemp='+idempleo;
      }

      $(document).on('keypress',function(e) {
        if(e.which == 13) {
            
          $.ajax({
            url: 'busca_empleo.php',
            type: 'POST',
            data: {param1: $("#busqueda").val() },
          })
          .done(function(data) {
            // console.log("success - "+ data );
          if(data != ''){
            $('#listado_empleos').empty().html(data);  
          }else{
            $('#listado_empleos').empty().html('Sin resultados');
          }

          })
          .fail(function() {
            console.log("error");
          });


        }
      });




    </script>


  </body>
</html>
