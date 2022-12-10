<?php 
  session_start();
  include_once "conf/conf.php";

$_SESSION["idPosutlante"] = 1;

  $sql = "SELECT P.id,
                 P.name,
                 P.surnames,
                 P.birthdate,
                 P.ubication,
                 P.sexo,
                 P.phone,
                 P.email,
                 P.doc_id,
                 P.localidad,
                 P.cv,
                 P.position,
                 P.image,
                 JS.id as idjobsummary, 
                 JS.job_summary as summary
                FROM profiles P INNER JOIN job_summary JS
                ON P.id_job_summary = JS.id
          WHERE P.id = " . $_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $reg = $db->fetch(PDO::FETCH_OBJ);

  $sql_lan = "SELECT DL.id_language as idLanguaje, 
                     L.language, 
                     DL.nivel_language as nivelLanguaje
          FROM detalle_languages DL 
          INNER JOIN languages L ON DL.id_language = L.id
          WHERE DL.id_profile = " . $_SESSION["idPosutlante"];
  $dbLan = $dbh->prepare( $sql_lan );
  $dbLan->execute();

  $idiomas = $db->rowCount();


  $date1 = new DateTime($reg->birthdate);
  $date2 = new DateTime("now");
  $diff = $date1->diff($date2);
  $anios = ($diff->y > 1) ? $diff->y : $diff->y;


    $sql_work_exp = "SELECT * FROM detalle_work_experience DWE 
                     LEFT JOIN work_experience WE ON DWE.id_work_experience = WE.id 
                     WHERE DWE.id_profile = " . $_SESSION["idPosutlante"] . " ORDER BY WE.id DESC";

    $db = $dbh->prepare($sql_work_exp);
    $db->execute();
    // $data= Array();
    // $reg_work_exp = $db->fetch(PDO::FETCH_OBJ);


    $sql_job_spec = "SELECT * 
                     FROM detalle_job_specializations DJS 
                     LEFT JOIN profiles P 
                     ON DJS.id_profile = P.id
                     LEFT JOIN specializations S
                     ON DJS.id_specialization = S.id
                     WHERE id_profile = " . $_SESSION["idPosutlante"];
    $dbJobSpec = $dbh->prepare($sql_job_spec);
    $dbJobSpec->execute();


    $sql_job_pref = "SELECT * FROM `job_preferences` WHERE idProfile = " . $_SESSION["idPosutlante"];
    $dbJobPref = $dbh->prepare($sql_job_pref);
    $dbJobPref->execute();
    $regJobPref = $dbJobPref->fetch(PDO::FETCH_OBJ);
  
  // echo "<pre>";
  // print_r($regJobPref);
  // echo "</pre>";
  // exit();
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/miPerfil.css" />
  <link rel="stylesheet" href="./assets/dashboard.css" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

  <link rel="stylesheet" type="text/css" href="assets/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="assets/globals.css" />
  <link rel="stylesheet" type="text/css" href="assets/dashboard.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  <title>Document</title>
</head>

<body>


  <aside class="main-sidebar sidebar-light-primary">
    <div class="sidebar">

    <?php include 'menu.php' ?>

    </div>
  </aside>


  <div class="container container-principal">


      <div class="dashboard screen bg-transparent" style=" height: 70px; margin-left: -10px;">
        <div class="overlap-group4"> 
          
          <div class="align-justify-2">
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
            <div class="nuevo" style="border: 1px solid red;">
              <div class="number poppins-semi-bold-white-12px">0</div>
            </div>
          </div>
        
        </div>
      </div>


    <!-- <header>
      <div class="menu_bar mt-3">
        <a href="" class="btn-menu">
          <div class="row">
            <div class="col-2">
              <span class="icono-notificacion fs-2 "><i class="bi bi-bell "></i>
                <img class="imagen12" src="img/Nuevo.png" alt="">
            </div>
            <div class="col-8 text-center fs-2">
              <span class="textoLogo">WORKITA</span>
            </div>
            <div class="col-2">
              <span class="icono-menu fs-2"><i class="bi bi-list"></i></span>
            </div>
          </div>
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="">Seccion Menu 1</a></li>
          <li><a href="">Seccion Menu 2</a></li>
          <li><a href="">Seccion Menu 3</a></li>
          <li><a href="">Seccion Menu 4</a></li>
          <li><a href="">Seccion Menu 5</a></li>
        </ul>
      </nav>
    </header> -->



  



    <div class="container text-center  mb-5 text-black-50">
      <h1 class="fs-3 fw-bold ">Mi perfil</h1>
      <p class="fw-light fs-6">
        ¡Un perfil completo, es un perfil más empleable!
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="scrollcards js-flickity" data-flickity-options='{ "wrapAround": false }'>
          <div class="col-6 card-custom border border-1 border-white rounded-4 w-75">
            <div class="container text-center">
              <h5 class="tituloMedidor">Medidor Workita</h5>
              <p class="text-black-50">
                ¡Un perfil completo, es <br />
                más empleable!
              </p>
            </div>
            <div class="container">
              <div class="ui-widgets">
                <div class="ui-values">98%</div>
              </div>
            </div>
          </div>

          <div class="col-6 card-custom caja-2 w-75">
            <div class="container text-center">
              <h5 class="text-white ">Medidor Workita</h5>
              <p class="text-white fw-light">
                ¡Te regalamos diferentes <br />
                plantillas para usar en tu CV <br />
                gratis!
              </p>
            </div>
            <a href="assets/assets/docs/cv.pdf" target="_blank">
              
              <div class="btn-descarga text-center mb-3">
                <button class="btn rounded-4 bg-white ">
                  <img src="img/Download-3 2.png" alt="">
                  Descarga CV
                </button>
              </div>

            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <h5 class="text-center mt-3">Tu CV</h5>
        <a href="javascript: alert('subir archivo');" style="text-decoration: none;">
          <div class="subirCV rounded-4 mb-4 w-75">
            <input type="file" name="subirCV" id="subirCV" value="" style="display: none;">
            <ul class="listaCv text-center p-0 mt-3 text-black-50">
              <li>Subir CV <i class="bi bi-file-earmark"></i>
              <li>Archivos permitidos: <br>
                Doc, Pdf.
              </li>
            </ul>
          </div>
        </a>
        <a href="assets/assets/docs/cv.pdf" target="_blank">
          <div class="btn-descarga text-center p-3">
            <button class="btn rounded-4 bg-white w-50">
              <img src="img/Download-3 2.png" alt="">
              Descarga CV
            </button>
          </div>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row" style="border: 0px solid red;">
            <div class="col-9" style="border: 0px solid green;">
              <h5 class=" mt-3">Datos Personales
              </h5>
            </div>
            <div class="col-3">
              <div class="bg-white rounded-3 icono-edit1 mt-3 ms-2" style="border: 0px solid green; margin-right: 80px;">
                <a href="assets/datos_personales.php">
                  <img src="img/Edit 1.png" alt="">  
                </a>
              </div>
            </div>
          </div>
          <div class="fotoPerfil mb-1">
            <div class="imagenPerfil">
              <!-- <img class="text-center" src="img/Foto.png" alt=""> -->
              <img class="text-center" src="img/Foto.png" alt="">
              <img src="img/Editar.png" class="mx-5 w-50 editar-perfil" alt="">
            </div>
          </div>
          <div class="container name-perfil text-black-50 ">
            <p class="fs-5 text-center" style="line-height : 25px;">
              <?php echo $reg->name . " " . $reg->surnames; ?>
            </p>
            <p class="text-center">
              <?php echo $reg->position; ?>
            </p>
            <!-- <p class="text-center">Proyectos digitales</p> -->
          </div>
          <div class="container name-perfil text-black-50 mt-2">
            <p class=" text-center ">
              <?php echo $anios;?> años
            </p>
            <p class="text-center fw-bold text-decoration-underline ">
              <?php echo $reg->phone; ?>
              <img class="ms-3" src="img/whatsapp-symbol 1.png" alt="">
            </p>
            <p class="text-center">
              <?php echo $reg->email; ?>
            </p>
            <p class="text-center">
             <?php 
             
             echo (isset($reg->localidad)) ? $reg->localidad : ''; ?>
            </p>
          </div>
        </div>


      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row">
            <div class="col-9">
              <h5 class=" mt-3">Redes sociales
              </h5>
            </div>
            <div class="col-3">
              <div class="bg-white rounded-3 icono-edit1 mt-3 ms-2" style="border: 0px solid green; margin-right: 80px;">
               <a href="./assets/redes_proyectos.php">
               <img src="img/Edit 1.png" alt="">
               </a>
              </div>
            </div>
            <div class="container iconos-redes">
              <img src="img/Group 12822.png" alt="">
              <img src="img/Group 12823.png" alt="">
              <img class="imagen-237" src="img/Ellipse 237.png" alt="">
              <!-- <img src="img/Ellipse 237.png" alt=""> -->
              <img class="" src="img/Ellipse 237 (1).png" alt="">
              <img src="img/Frame 3493.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row">
            <div class="col-9">
              <h5 class=" mt-3">Resumen laboral
              </h5>
            </div>
            <div class="col-3">
              <div class="bg-white rounded-3 icono-edit1 mt-2 ms-2" style="border: 0px solid green; margin-right: 80px;">
                <a href="./assets/editar_resumen_laboral.php">
                  <img src="img/Edit 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container resumen mt-2">
              <p class="texto-resumen" align="center">
<!--                 Bachiller en Psicología Organizacional con experiencia en procesos de selección, análisis de clima
                organizacional, elaboración de bandas salariales y generación de contenido estructurado para soluciones
                tecnológicas en reclutamiento digital. Amante del mundo digital. -->

        <?php 
          if ($reg->summary == '') {
            echo "Sin resultados";
          }else{
            echo (isset($reg->idjobsummary) || $reg->idjobsummary != 0 ) ? $reg->summary : 'Sin resultados'; 
          }
        ?>
              </p>
            </div>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row">
            <div class="col-9">
              <h5 class=" mt-3">Experiencia Laboral
              </h5>
            </div>
            <div class="col-3  icono-edit1 mt-2 ps-3 ">
              <a href="assets/experiencia_laboral.php?sw=1">
                <img src="img/Editar (1).png" alt="">                
              </a>

            </div>
          </div>
        </div>


<?php while ($reg_work_exp = $db->fetch(PDO::FETCH_OBJ)) { ?>

<!--     echo $reg_work_exp->id_profile."<br>";
    echo $reg_work_exp->id_work_experience."<br>";
    echo $reg_work_exp->id."<br>";
    echo $reg_work_exp->title_work_experience."<br>";
    echo $reg_work_exp->companies."<br>";
    echo $reg_work_exp->lugar."<br>";
    echo $reg_work_exp->descrip_work_experience."<br>";
    echo $reg_work_exp->fec_inicio."<br>";
    echo $reg_work_exp->fec_fin."<br>";
    echo $reg_work_exp->status_work_experience."<br>"; -->


        <div class="container">
          <div class="row">
            <div class="col-10 detalles-perfil">
              <h5 class=" mt-3 ">
                <?php echo $reg_work_exp->title_work_experience;?>
              </h5>
              <p class="direcion-perfil fw-light">
                <?php echo $reg_work_exp->companies; ?> - <?php echo $reg_work_exp->lugar; ?>
              </p>
              <ul class="lista-perfil fw-light">
                <li>
                  <?php echo $reg_work_exp->descrip_work_experience; ?>
                </li>
<!--                 <li>
                  Implementación y soporte del proyecto.
                </li>
                <li>
                  Elaboración de la estructura y elementos necesarios para la base de datos.
                </li>
                <li>Elaboración de reportes.</li> -->
              </ul>
              <p class="fw-normal">Tecnologías usadas:</p>

              <ul class="lista-tab p-0">
                <?php  

                  $sql_work_exp_skill = "SELECT S.descrip_skiill
                                         FROM skills S LEFT JOIN detalle_work_exp_skill DWES
                                         ON S.idSkill = DWES.id_skill 
                                         LEFT JOIN work_experience WE 
                                         ON DWES.id_work_experience = WE.id
                                         WHERE DWES.id_work_experience = " . $reg_work_exp->id_work_experience;
                  $db_skill = $dbh->prepare($sql_work_exp_skill);
                  $db_skill->execute();

                  while ($reg_skill_work_exp = $db_skill->fetch(PDO::FETCH_OBJ)) {

                ?>
                <li style="list-style-type: none; display: inline; padding-right: 5px;">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50 mb-2">
                    <?php echo $reg_skill_work_exp->descrip_skiill; ?>
                  </button>
                </li>
                <?php } ?>


              </ul>



<?php 

$date1 = new DateTime($reg_work_exp->fec_inicio);
$date2 = new DateTime($reg_work_exp->fec_fin);
$diff = $date1->diff($date2);
$meses = ($diff->m > 1) ? $diff->m : $diff->m;

$date_ini = date_create($reg_work_exp->fec_inicio);
$date_fin = date_create($reg_work_exp->fec_fin);


?>

              <p class="fw-normal"><?php echo date_format($date_ini,"m-Y");?> - <?php echo date_format($date_fin,"m-Y");?> (<?php echo $meses+1;?> meses)</p>
            </div>
            <div class="col-2">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left: -15px;">
                <a href="assets/experiencia_laboral.php?sw=2&id=<?php echo $reg_work_exp->id_work_experience;?>">
                  <img src="img/Edit 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>


<?php }  ?>



      </div>
    </div>

    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row">
            <div class="col-9">
              <h5 class=" mt-3">Form. académica
              </h5>
            </div>
            <div class="col-3 ps-3 icono-edit1 mt-2 ">
              <a href="assets/formacion_academica.php">
                <img src="img/Editar (1).png" alt="">  
              </a>
            </div>

            <?php while ( $reg_job_spec = $dbJobSpec->fetch(PDO::FETCH_OBJ) ) { ?>

<?php 

$start_date = ( is_null($reg_job_spec->start_date) || $reg_job_spec->start_date == "") ? "--" : date_format(date_create($reg_job_spec->start_date),"m-Y");
$end_date = ( is_null($reg_job_spec->end_date) || $reg_job_spec->end_date == "") ? "--" : date_format(date_create($reg_job_spec->end_date),"m-Y");
?>

                <div class="row mt-2 m-0">
                  <div class="col-10 info-formacion">
                    <p class="fw-semibold m-0"><?php echo $reg_job_spec->name; ?></p>
                    <!-- <p class="fw-light">Pontifica Universidad Nacional Mayor de San Marcos</p> -->
                    <p class="fw-light"><?php echo $reg_job_spec->place; ?></p>
                    <p class="fw-semibold"><?php echo $start_date;?> / <?php echo $end_date; ?></p>
                  </div>
                  <div class="col-2">
                    <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left: -8px;">
                      <a href="assets/formacion_academica.php?sw=2">
                      <img src="img/Edit 1.png" alt="">
                        
                      </a>
                    </div>
                  </div>
                </div>

            <?php } ?>

            
<!--             <div class="row mt-2 m-0">
              <div class="col-10 info-formacion">
                <p class="fw-semibold m-0">Ingeniería de Sistemas –Culminado –Décimo superior</p>
                <p class="fw-light">Pontifica Universidad Nacional Mayor de San Marcos</p>
                <p class="fw-semibold">Marz 2014 - Ago 2019</p>

              </div>
              <div class="col-2">
                <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left: -8px;">
                  <img src="img/Edit 1.png" alt="">
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-4 fondo_transparente">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class=" mt-3">Idiomas</h5>

          <?php 
          if ( $idiomas > 0 ) {
            while (  $regLan = $dbLan->fetch(PDO::FETCH_OBJ) ) { 
          ?>
              <div class="idiomas d-flex fw-light">
                <p class="idioma-1"><?php echo $regLan->language; ?></p>
                <p class="mx-1 nivel-idioma">- <?php echo $regLan->nivelLanguaje; ?></p>
              </div>

          <?php } 
            }else{
          ?>
              <div class="idiomas d-flex fw-light">
                Sin idiomas  
                <br><br>
              </div>
          <?php  }  ?>


            </div>
            <div class="col-2">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-11px;">
                <a href="./assets/idiomas.php">
                <img src="img/Edit 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class=" mt-3">Aptitudes
              </h5>
              <p class="fw-normal titulo-aptitudes">Lenguajes de programación</p>
              <ul class="lista-tab p-0">
                <li class="lista-aptitudes d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">Phyton</span> <span class="span-green">/ Básico</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1 ">
                    <span class="span-oscuro">PHP</span> <span class="span-green">/ Básico</span>
                  </button>
                </li>
                <li class="lista-aptitudes mt-2 d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">Java</span> <span class="span-green">/ Intermedio</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1">
                    <span class="span-oscuro">Java</span> <span class="span-green">/ Avanzado</span>
                  </button>
                </li>
                <li class="lista-aptitudes mt-2 d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">Java</span> <span class="span-green">/ Experto</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes">Frameworks</p>
              <ul class="lista-tab p-0">
                <li class="lista-aptitudes  d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">Laravel</span> <span class="span-green">/ Intermedio</span>
                  </button>
                </li>
                <li class="lista-aptitudes  d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">Angular</span> <span class="span-green">/ Intermedio</span>
                  </button>
                </li>
                <li class="lista-aptitudes  d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">Magento</span> <span class="span-green">/ Avanzado</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes">Base de datos</p>
              <ul class="lista-tab p-0">
                <li class="lista-aptitudes d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">SQL</span> <span class="span-green">/ Intermedio</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1 ">
                    <span class="span-oscuro">MySQL</span> <span class="span-green">/ Experto</span>
                  </button>
                </li>
                <li class="lista-aptitudes mt-2 d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">PostgreSQL</span> <span class="span-green">/ Intermedio</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes">Desarrollo móvil</p>
              <ul class="lista-tab p-0 ">
                <li class="lista-aptitudes d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">Ionic</span> <span class="span-green">/ Experto</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1 ">
                    <span class="span-oscuro">Flutter</span> <span class="span-green">/ Intermedio</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes">Bibliotecas o librerías</p>
              <ul class="lista-tab p-0 ">
                <li class="lista-aptitudes d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">Pandas</span> <span class="span-green">/ Experto</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1 ">
                    <span class="span-oscuro">Shap</span> <span class="span-green">/ Intermedio</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes">Herramientas de diseño</p>
              <ul class="lista-tab p-0 ">
                <li class="lista-aptitudes d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 ">
                    <span class="span-oscuro">Figma</span> <span class="span-green">/ Básico</span>
                  </button>
                  <button class="bg-white border-0 p-2  rounded-3 mx-1 ">
                    <span class="span-oscuro">Sketch</span> <span class="span-green">/ Básico</span>
                  </button>
                </li>
                <li class="lista-aptitudes mt-2 d-flex">
                  <button class="bg-white border-0 p-2  rounded-3 m-1 ">
                    <span class="span-oscuro">Invisión</span> <span class="span-green">/ Experto</span>
                  </button>
                </li>
              </ul>
              <p class="fw-normal titulo-aptitudes m-0">Sistemas operativos:</p>
              <p class="aptitudes-respuesta">Linux, Ubuntu, MacOS, Windows</p>
              <p class="fw-normal titulo-aptitudes m-0">Metodologías de trabajo:</p>
              <p class="aptitudes-respuesta">Scrum, Kanban</p>
              <p class="fw-normal titulo-aptitudes m-0">
                Herramientas de comunicación y organización de tareas:
              </p>
              <p class="aptitudes-respuesta">Scrum, Kanban</p>
              <p class="fw-normal titulo-aptitudes m-0">Metodologías de trabajo:</p>
              <p class="aptitudes-respuesta">Scrum, Kanban</p>
              <p class="fw-normal titulo-aptitudes m-0">Metodologías de trabajo:</p>
              <p class="aptitudes-respuesta">Scrum, Kanban</p>
              <p class="fw-normal titulo-aptitudes m-0">Metodologías de trabajo:</p>
              <p class="aptitudes-respuesta">Scrum, Kanban</p>
            </div>
            <div class="col-2">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-11px;">
              <a href="assets/aptitudes.php">
                <img src="img/Edit 1.png" alt="">
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class=" mt-3">Cursos y certifica.
              </h5>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Fundamentos de Design <br> Thinking</p>
                  <p class="fw-light">Platzi</p>
                  <p class="fw-semibold">Ago 2014 - Dic 2019</p>

                </div>
                <div class="col-4">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-29px;">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
              </div>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Fundamentos de Design <br> Thinking</p>
                  <p class="fw-light">Platzi</p>
                  <p class="fw-semibold">Ago 2014 - Dic 2019</p>
                </div>
            <div class="col-4">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-29px;">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
              </div>
            </div>
            <div class="col-2">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-11px;">
                <a href="assets/editar_preferencias_laborales.php">
                <img src="img/Edit 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class="mt-3" style="font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 130%;">Tu preferencia de empleo</h5>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-light m-0">Sitaución actual:</p>
                  <p class="fw-semibold">

                    <?php 
                        if($regJobPref->situation==1){
                          echo $situa = 'Busco empleo activamente';
                        }else if($regJobPref->situation==2){
                          echo $situa = 'Estoy escuchando ofertas';
                        }else if($regJobPref->situation==3){
                          echo $situa = 'No busco empleo';
                        }
                    ?>

                  </p>
                </div>
                <div class="col-8 info-formacion">
                  <p class="fw-light m-0">Puesto de trabajo deseado:</p>

                  <ul>

                      <?php 
                      foreach (json_decode($regJobPref->desired_job) as $key => $value) { ?>
                          <li class="fw-semibold" style="font-family: Poppins;
                          font-size: 12px;
                          font-weight: 500;
                          line-height: 20px;
                          letter-spacing: 0em;
                          text-align: left; color:#616161;"><?php echo $value; ?></li>
                      <?php } ?>

<!--                       <li class="fw-semibold" style="font-family: Poppins;
font-size: 12px;
font-weight: 500;
line-height: 16px;
letter-spacing: 0em;
text-align: left; color:#616161;">Desarrollador Back End</li> -->
<!--                       <li class="fw-semibold" style="font-family: Poppins;
font-size: 12px;
font-weight: 500;
line-height: 16px;
letter-spacing: 0em;
text-align: left; color:#616161;">Desarrollador Front End</li>
                      <li class="fw-semibold" style="font-family: Poppins;
font-size: 12px;
font-weight: 500;
line-height: 16px;
letter-spacing: 0em;
text-align: left; color:#616161;">Diseño e implementación de BD</li> -->
                  </ul>
                </div>

                <div class="col-8 info-formacion">
                  <p class="fw-light m-0">Área de interés:</p>
                  <p class="fw-semibold"> <?php echo $regJobPref->area; ?></p>
                </div>

                <div class="col-8 info-formacion">
                  <p class="fw-light m-0">Seniority:</p>
                  <p class="fw-semibold">
                    <?php 
                        switch ($regJobPref->seniority) {
                          case 1:
                            echo "Junior";
                            break;
                          case 2:
                            echo "Semi-senior";
                            break;                          
                          case 3:
                            echo "Senior";
                            break;
                          case 4:
                            echo "Master";
                            break;
                          default:
                            # code...
                            break;
                        }
                    ?>
                      
                    </p>
                </div>

                <div class="col-8 info-formacion">
                  <p class="fw-light m-0">Salario mínimo aceptado:</p>
                  <p class="fw-semibold"><?php echo obtenerMoneda($regJobPref->currency) ?> <?php echo $regJobPref->min_salary; ?> / mes</p>
                </div>

<!--                 <div class="col-4">
                  <div class="bg-white rounded-3 icono-edit1 mt-2 " style="margin-left:-29px;">
                    <img src="img/Edit 1.png" alt="">
                  </div>
                </div> -->
              </div>
<!--               <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Fundamentos de Design <br> Thinking</p>
                  <p class="fw-light">Platzi</p>
                  <p class="fw-semibold">Ago 2014 - Dic 2019</p>
                </div>
              </div> -->
            </div>
            <div class="col-2">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-11px;">
                <a href="assets/editar_preferencias_laborales.php">
                  <img src="img/Edit 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    
<!--     <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class=" mt-3">Referencia laboral
              </h5>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Mateo Porras Delgado</p>
                  <p class="fw-light m-0">Gerente de Sistemas en TALENT </p>
                  <p class="fw-light m-0">QR SAC </p>
                  <p class="fw-light m-0">Mateogonzales@talent.pe</p>
                  <p class="fw-light">985656521</p>
                  <p class="fw-semibold text-decoration-underline">985656521</p>
                </div>
            <div class="col-4">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-29px;">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
              </div>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Mateo Porras Delgado</p>
                  <p class="fw-light m-0">Gerente de Sistemas en TALENT </p>
                  <p class="fw-light m-0">QR SAC </p>
                  <p class="fw-light m-0">Mateogonzales@talent.pe</p>
                  <p class="fw-light">985656521</p>
                  <p class="fw-semibold text-decoration-underline">985656521</p>
                </div>
              <div class="col-4">
              <div class="bg-white rounded-3 icono-edit1 mt-2 " style="border: 0px solid green; margin-left:-29px;">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
              </div>
            </div>
            <div class="col-2  icono-edit1 mt-2 ps-0">
              <img src="img/Editar (1).png" alt="">
            </div>


          </div>
        </div>
      </div>
    </div> -->

  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
  </script>
  <script src="js/miPerfil.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <script src="assets/menu/plugins/jquery/jquery.min.js"></script>
    <script src="assets/menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $("#btnClose").click(function () {    
            $("#btnMenu").click();
        }); 

      });




    </script>





</body>

</html>