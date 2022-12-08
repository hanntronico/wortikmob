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


  $sql3 = "SELECT * FROM detalle_job_skills DJS left join skills S ON DJS.idSkill = S.idSkill  WHERE idJob = 1";
  $db = $dbh->prepare($sql3);
  $db->execute();
  // $reg3 = $db->fetch(PDO::FETCH_OBJ);

  $sqlQuest = "SELECT * FROM questions WHERE job_id = " . $_GET["idemp"];
  $db2 = $dbh->prepare($sqlQuest);
  $db2->execute();


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
          <a href="antes_postular_conoc.php?idemp=<?php echo $_GET["idemp"];?>" style="text-decoration: none;" class="poppins-normal-storm-dust-14px">
          <img
            class="arrow"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/arrow-right-1@2x.svg"
            alt="Arrow-right 1"
          /> 
            <?php echo $regTrabajo->trabajo; ?>            
          </a>
        </p>
        <div class="habilidad-tecnica2 poppins-medium-malachite-16px" style="left: 0px; width: 100%; text-align: center;">Preguntas adicionales</div>
        <!-- <div class="conocimiento poppins-medium-malachite-16px">Conocimiento</div> -->
        <!-- <div class="preguntas-adicionales poppins-medium-malachite-16px">Preguntas adicionales</div> -->

        <!-- <div class="frame-3697"> -->

        <input type="hidden" name="codJob" id="codJob" value="<?php echo $_GET['idemp'];?>">
        <input type="hidden" name="codProfile" id="codProfile" value="<?php echo $_SESSION["idPosutlante"];?>">


<?php 

      while ( $regQuestions = $db2->fetch(PDO::FETCH_OBJ) ) {

 ?>

 <div class="habilidad">
   
        <div class="pregunta">
          <p class="cul-es-tu-pretensi poppins-normal-storm-dust-16px">
            <?php echo $regQuestions->title; ?>
          </p>
          <div class="nombres">

            <?php //echo $regQuestions->question_type != '' ?>
            <?php if ($regQuestions->question_type != '' ) { ?>

              <div style="width: 100%; text-align: center;">
                <input type="radio" id="tipo_preg" name="tipo_preg" value="SI">SI
                <input type="radio" id="tipo_preg" name="tipo_preg" value="NO" class="ml-4">NO
              </div>


              
            <?php }else { ?>



              <?php 
                if (!is_null($regQuestions->currency)) {
              ?>

                <div class="row" style="width: 95%; text-align:center;">
                  <div class="col-xs-4">
                    <input class="escribir-1 poppins-normal-star-dust-16px" type="number" name="txtPregunta_<?php echo $regQuestions->id;?>" id="txtPregunta_<?php echo $regQuestions->id;?>" placeholder="Escribir" style="left: 0px; width: 90%; border: none; outline: none; border-bottom: 1px solid #C0C0C0; position: relative;">
                  </div>
                  <div class="col-xs-6 ml-2 poppins-normal-star-dust-16px">
                      <?php echo "* " . obtenerMoneda($regQuestions->currency); ?>

                  </div>
                </div>

              <?php
                }else{
              ?>

                <input class="escribir-1 poppins-normal-star-dust-16px" type="text" name="txtPregunta_<?php echo $regQuestions->id;?>" id="txtPregunta_<?php echo $regQuestions->id;?>" placeholder="Escribir" style="left: 0px; width: 95%; border: none; outline: none; border-bottom: 1px solid #C0C0C0;">

              <?php
                }
              ?>


            <?php } ?>

          </div>
        </div>

 </div> 


<?php } ?>



<div class="fra_btn_siguiente">
  <div class="btn_siguiente" style="background-color: #339698;" id="btnPostular">
    <!-- <div class="descripcin poppins-semi-bold-white-12px" onclick="postular()"> -->
    <div class="descripcin poppins-semi-bold-white-12px" id="btnPostular2">
      Enviar y postular
    </div>
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
      
    $(document).ready(function() {
      // console.log('abrio primer');
      $("#btnPostular").attr("style", "background-color: #C0C0C0;");



      var respuestas = document.querySelectorAll('.escribir-1');
        respuestas.forEach(function(userItem) {

          $("#"+userItem.id).change(function(){
            // alert( $("#"+userItem.id).val() );
            if ($("#"+userItem.id).val() != '') {
              $("#btnPostular2").attr("onclick", "postular()");
              $("#btnPostular").attr("style", "background-color: #339698;");
            }
            
          });

      }); 



    });




  function postular() {

    var ddDataPreguntas = [];

    var respuestas = document.querySelectorAll('.escribir-1');
      respuestas.forEach(function(userItem) {
        const myArray = userItem.id.split("txtPregunta_");
        let pregunta = myArray[1];
        console.log(pregunta);
        // ddDataPreguntas.push( pregunta + "__" + $("#"+userItem.id).val() )
        ddDataPreguntas.push( pregunta + "__" + userItem.value )
    });    

    console.log(ddDataPreguntas);

    $.ajax({
      url: 'postular.php',
      type: 'POST',
      data: {codProfile: $("#codProfile").val(), codEmp: $("#codJob").val(), preguntas: ddDataPreguntas},
    })
    .done(function(data) {
      // console.log(data);
      location.href="detalle_empleo.php?sw=1&idemp="+$("#codJob").val();
    })
    .fail(function() {
      console.log("error");
    })

  }


      // function verDetalle(idJob) {
      //   // console.log(idJob);
      //   $("#detalle_"+idJob).attr("style", "display: block;");
      //   $("#img_"+idJob).attr("class", "chevron-up-1");
      //   $("#img_"+idJob).attr("onclick", "ocultarDetalle("+idJob+")");
      // }

      // function ocultarDetalle(idJob) {
      //   $("#detalle_"+idJob).attr("style", "display: none;");
      //   $("#img_"+idJob).attr("class", "chevron-down-1");
      //   $("#img_"+idJob).attr("onclick", "verDetalle("+idJob+")");
      // }


    </script>

  </body>
</html>
