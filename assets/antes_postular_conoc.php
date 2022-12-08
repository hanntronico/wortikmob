<?php  
  session_start();
  include_once "../conf/conf.php";

  $sql_job = "SELECT J.name as trabajo FROM JOBS J WHERE ID=".$_GET["idemp"];
  $db_job = $dbh->prepare($sql_job);
  $db_job->execute();
  $regTrabajo = $db_job->fetch(PDO::FETCH_OBJ);

  $sql2 = "SELECT J.ID as job, J.*, C.* 
           FROM JOBS J 
           INNER JOIN JOBS_PROFILES JP 
           ON J.id = JP.id_job 
           INNER JOIN PROFILES P 
           ON jp.id_profile = P.id 
           INNER JOIN COMPANIES C 
           ON J.company_id = C.id
           WHERE P.id = " . $_SESSION["idPosutlante"] . " AND J.ID=".$_GET["idemp"];
  $db = $dbh->prepare($sql2);
  $db->execute();
  $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

// echo "<pre>";
// print_r($reg);
// echo "</pre>";
// exit();


  $sql3 = "SELECT * FROM detalle_job_knowledges DJK left join knowledge K ON DJK.idKnowledge = k.id WHERE DJK.idJob = ".$_GET["idemp"];
  $db = $dbh->prepare($sql3);
  $db->execute();
  // $reg3 = $db->fetch(PDO::FETCH_OBJ);

  // echo "<pre>";
  // print_r($reg3);
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
    <link rel="stylesheet" type="text/css" href="postulaciones.css" />
    <link rel="stylesheet" type="text/css" href="empleo-individual.css" />
    <link rel="stylesheet" type="text/css" href="antes_postular.css" />
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
      <div class="empleo-individual screen">
        <h1 class="antes-de-postular poppins-semi-bold-malachite-24px">¡Antes de postular!</h1>
        <p class="selecciona-y-respond poppins-normal-storm-dust-14px">
          Responda las siguientes preguntas para postular a este aviso.
        </p>
        <p class="selecciona-y-respond poppins-normal-storm-dust-14px" style="position: relative; top:190px;">
          <a href="antes_postular.php?idemp=<?php echo $_GET["idemp"];?>" style="text-decoration: none;" class="poppins-normal-storm-dust-14px">
          <img
            class="arrow"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/arrow-right-1@2x.svg"
            alt="Arrow-right 1"
          /> 
            <?php echo $regTrabajo->trabajo; ?>            
          </a>
        </p>
        <div class="habilidad-tecnica2 poppins-medium-malachite-16px">Conocimientos</div>
        <!-- <div class="conocimiento poppins-medium-malachite-16px">Conocimiento</div> -->
        <!-- <div class="preguntas-adicionales poppins-medium-malachite-16px">Preguntas adicionales</div> -->

        <!-- <div class="frame-3697"> -->

          <input type="hidden" name="codJob" id="codJob" value="<?php echo $_GET['idemp'];?>">

<?php 

      while ( $regJobsSkills = $db->fetch(PDO::FETCH_OBJ) ) {

 ?>

        <div class="habilidad">
          <div class="nombres">
<!--             <img
              class="vector-9"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            /> -->
            <div class="javasript poppins-normal-storm-dust-16px">
              <?php  echo $regJobsSkills->title; ?>
            </div>

         <!--    <div class="javasript poppins-normal-storm-dust-16px" style="margin-left: 175px; border-radius: 50%; background-color: #339698; color: white; width: 20px; height: 20px; text-align: center; font-size: 12px;">N</div> -->

            <div class="javasript poppins-normal-storm-dust-16px" style="margin-left: 203px; border-radius: 50%; background-color: #339698; color: white; width: 20px; height: 20px; text-align: center; font-size: 12px;">N</div>

            <img id="img_<?php echo $regJobsSkills->idKnowledge;?>"
              class="chevron-down-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/63455b1dd965df662bdd3e2d/img/chevron-down-1@2x.svg"
              alt="Chevron-down 1" onclick="verDetalle(<?php echo $regJobsSkills->idKnowledge;?>)"
            />

          </div>


         <div id="detalle_<?php echo $regJobsSkills->idKnowledge;?>" style="display: none;">
            
            <div class="nombres-1">
              <select style="width: 95%; border: none;" name="nivel_<?php echo $regJobsSkills->idKnowledge;?>" id="nivel_<?php echo $regJobsSkills->idKnowledge;?>" class="seleccionar-nivel poppins-normal-star-dust-16px">
                <option value="0">Seleccionar nivel</option>
                <option value="1">Ninguno</option>
                <option value="2">Básico</option>
                <option value="3">Intermedio</option>
                <option value="4">Avanzado</option>
                <option value="5">Experto</option>
              </select>
            </div>

<!--             <div class="nombres-1">
              <select style="width: 95%; border: none;" name="experiencia_<?php echo $regJobsSkills->idSkill;?>" id="experiencia_<?php echo $regJobsSkills->idSkill;?>" class="experiencia poppins-normal-star-dust-16px">
                <option value="0">Seleccionar experiencia</option>
                <option value="1">Ninguna</option>
                <option value="2">Junior</option>
                <option value="3">Semi-senior</option>
                <option value="4">Senior</option>
                <option value="5">Master</option>
              </select>
            </div> -->

<!-- Habilidad tecnica obligatorio todas los skills -->

<!-- en conocimiento  solo nivel    --->


          </div>



        </div>


<?php } ?>



<div class="fra_btn_siguiente">
  <div class="btn_siguiente" style="background-color: #339698;">
    <div class="descripcin poppins-semi-bold-white-12px" onclick="procesar_Conocimiento()">Siguiente</div>
  </div>
</div>


<!--         <div class="frame-3698">
          <div class="nombres">
            <img
              class="vector-9"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            />
            <div class="javasript-1 poppins-normal-storm-dust-16px">Javasript</div>
          </div>
          <div class="nombres-1">
            <img
              class="vector-9-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            />
            <div class="seleccionar-nivel poppins-normal-star-dust-16px">Seleccionar nivel</div>
            <img
              class="chevron-down-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/63455b1dd965df662bdd3e2d/img/chevron-down-1-2@2x.svg"
              alt="Chevron-down 1"
            />
          </div>
          <div class="nombres-1">
            <img
              class="vector-9-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            />
            <div class="experiencia poppins-normal-star-dust-16px">Experiencia</div>
            <img
              class="chevron-down-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/63455b1dd965df662bdd3e2d/img/chevron-down-1-3@2x.svg"
              alt="Chevron-down 1"
            />
          </div>
        </div> -->


<!--         <div class="frame-3699">
          <p class="trabajas-o-trajaste-en-esta-empresa poppins-normal-storm-dust-16px">
            ¿Trabajas o trajaste en esta empresa?
          </p>
          <div class="nombres">
            <img
              class="vector-9"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            />
            <div class="escribir poppins-normal-star-dust-16px">Escribir</div>
          </div>
        </div> -->
<!--         <div class="frame-3700">
          <p class="cul-es-tu-pretensi poppins-normal-storm-dust-16px">
            ¿Cuál es tu pretensión salarial para este puesto?
          </p>
          <div class="nombres">
            <img
              class="vector-9"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/6300db60b99a625a2af31671/img/vector-9-7@2x.svg"
              alt="Vector 9"
            />
            <div class="escribir-1 poppins-normal-star-dust-16px">Escribir</div>
          </div>
        </div> -->

        <!-- <div class="nuevo-mensaje"> -->
          <!-- <div class="frame-3353"><div class="descripcin poppins-semi-bold-white-12px">Enviar y postular</div></div> -->
          <!-- <div class="frame-3353" style="background-color: #339698;"><div class="descripcin poppins-semi-bold-white-12px">Siguiente</div></div> -->
        <!-- </div> -->
        <a href="detalle_empleo.php?idemp=<?php echo $_GET["idemp"];?>">
          <img
            class="close-1-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/63455b1dd965df662bdd3e2d/img/close--1--1-2@2x.svg"
            alt="Close (1) 1"
          />
        </a>
        <img
          class="logo-versin-positiva-2"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/63455cbc1bdcdba851c4269b/img/logo---versi-n-positiva-2-2@2x.svg"
          alt="Logo - Versin Positiva 2"
        />
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
      
      function verDetalle(idJob) {
        $("#detalle_"+idJob).attr("style", "display: block;");
        $("#img_"+idJob).attr("class", "chevron-up-1");
        $("#img_"+idJob).attr("onclick", "ocultarDetalle("+idJob+")");
      }

      function ocultarDetalle(idJob) {
        $("#detalle_"+idJob).attr("style", "display: none;");
        $("#img_"+idJob).attr("class", "chevron-down-1");
        $("#img_"+idJob).attr("onclick", "verDetalle("+idJob+")");
        
      }

      function procesar_Conocimiento() {

        var ddDataNiveles = [];
        var ddDataExperiencia = [];

        var niveles = document.querySelectorAll('.seleccionar-nivel');
        var experiencias = document.querySelectorAll('.experiencia');

        niveles.forEach(function(userItem) {
          const myArray = userItem.id.split("nivel_");
          let habilidad = myArray[1];
          ddDataNiveles.push( habilidad +"__"+ $("#"+userItem.id).val() );
        });

        // experiencias.forEach(function(userItem) {
        //   const myArray2 = userItem.id.split("experiencia_");
        //   let habilidad2 = myArray2[1];
        //   ddDataExperiencia.push( habilidad2 +"__"+ $("#"+userItem.id).val() );
        // });

        // console.log(ddDataNiveles);
        // console.log(ddDataExperiencia);

        $.ajax({
          url: 'ins_conocimiento.php',
          type: 'POST',
          data: {codEmp: $("#codJob").val(), niveles: ddDataNiveles},
        })
        .done(function(data) {
          location.href="antes_postular_2.php?idemp="+$("#codJob").val();
        })
        .fail(function() {
          console.log("error");
        })

        // .always(function() {
        //   console.log("complete");
        // });
        


      }


    </script>

  </body>
</html>
