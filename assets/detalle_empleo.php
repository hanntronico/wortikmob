<?php  
  session_start();
  include_once "../conf/conf.php";

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
        <div class="overlap-group1">
          <img
            class="vector-17"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-17@2x.svg"
            alt="Vector 17"
          />
          <div class="redes-sociales">
            <div class="fb">
              <img
                class="brandicofacebook"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631bb2dca6fbd0d14fab6ac0/img/brandico-facebook-1@2x.svg"
                alt="brandico:facebook"
              />
            </div>
            <div class="ins">
              <img
                class="icon-instagram"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631bb2dca6fbd0d14fab6ac0/img/akar-icons-instagram-fill-1@2x.svg"
                alt="icon-instagram"
              />
            </div>
            <div class="tw">
              <img
                class="icon-twitter"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631bb2dca6fbd0d14fab6ac0/img/akar-icons-twitter-fill-1@2x.svg"
                alt="icon-twitter"
              />
            </div>

            <div class="in">
              <a href="https://www.linkedin.com/company/wortika/" target="_blank">
                <img
                  class="icon-linkedin"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector@2x.svg"
                  alt="icon-linkedin"
                />
              </a>
            </div>

          </div>
          <div class="group-108">
            <div class="es">Es</div>
            <img
              class="chevron-down-5-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/chevron-down--5--2@2x.svg"
              alt="Chevron-down (5) 2"
            />
            <div class="overlap-group">
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
        <div class="frame-124">
          <img
            class="arrow"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/arrow-right-1@2x.svg"
            alt="Arrow-right 1"
          />

            <div class="regresar poppins-normal-storm-dust-14px">
              <a href="empleos.php" style="color: #616161; text-decoration: none;">
                Regresar
              </a>
            </div>
        
        </div>
        <a href="empleo-individual.html">
          <div class="empleo-1">
            <div class="developer-font-back-end poppins-semi-bold-malachite-18px">Developer Font/Back end</div>
            <div class="frame-156">
              <div class="group-139">
                <div class="hoy poppins-medium-silver-chalice-12px">Hoy</div>
                <img
                  class="calendar-3"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/calendar-3@2x.svg"
                  alt="Calendar 3"
                />
              </div>
              <a onclick="window.event.stopPropagation()"
                ><div class="place poppins-normal-storm-dust-12px">SAMSUNG</div>
              </a>
              <div class="frame-156-item poppins-normal-storm-dust-12px">San Isidro, Lima</div>
              <div class="frame-156-item poppins-normal-storm-dust-12px">Part time</div>
            </div>
            <img
              class="ellipse-18"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/ellipse-18@2x.png"
              alt="Ellipse 18"
            /></div
        ></a>
        <div class="botn-p-1">
          <div class="recomendar poppins-medium-storm-dust-16px">Recomendar</div>
          <img
            class="arrow"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/arrow-left--2--1@2x.svg"
            alt="Arrow-left (2) 1"
          />
        </div>
        <p class="recomienda-a-alguien-para-este-puesto poppins-light-storm-dust-12px">
          Recomienda a alguien para este puesto.
        </p>
        <div class="cta">
          <div class="botn-p"><div class="botn-primario poppins-medium-white-16px">Postular</div></div>
        </div>
        <img
          class="vector-21"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-17@2x.svg"
          alt="Vector 21"
        />
        <img
          class="vector-22"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-17@2x.svg"
          alt="Vector 22"
        />
        <div class="frame-74"><div class="diseo-ui poppins-normal-storm-dust-14px">Diseño UI</div></div>
        <div class="frame-75"><div class="name poppins-normal-storm-dust-14px">Junior</div></div>
        <div class="frame-76"><div class="universitario poppins-normal-storm-dust-14px">Universitario</div></div>
        <div class="frame-77"><div class="egresado poppins-normal-storm-dust-14px">Egresado</div></div>
        <div class="frame-71"><div class="presencial poppins-normal-storm-dust-14px">Presencial</div></div>
        <div class="frame-72"><div class="planilla poppins-normal-storm-dust-14px">Planilla</div></div>
        <div class="frame-73"><div class="diseo poppins-normal-storm-dust-14px">Diseño</div></div>
        <div class="sobre-el-puesto poppins-medium-malachite-16px">Sobre el Puesto</div>
        <div class="sobre-nosotros-1 poppins-medium-malachite-16px">Sobre nosotros</div>
        <div class="te-encargars-de poppins-medium-malachite-16px">Te encargarás de:</div>
        <p class="si-eres-desarrollado poppins-light-storm-dust-16px">
          Si eres desarrollador Full Stack y estás en búsqueda de un rol desafiante en el que puedas aprender mucho más
          y mejorar tus habilidades. Entonces eres del tipo de persona que estamos buscando!.
        </p>
        <p class="atender-en-forma-opo poppins-light-storm-dust-16px">
          Atender en forma oportuna la necesidad de nuevas soluciones informáticas que requiera el cliente interno.
          <br />Brindar soporte al Help Desk.<br />Gestionar, dar soporte y administrar los servidores. <br />Crear y
          asignar usuarios y permisos para los diferentes usuarios. <br />Diseña, elabora y mantiene los sistemas
          informáticos que le sean solicitados por los usuarios.
        </p>
        
        <p class="remuneracin-en-plan-1 poppins-light-storm-dust-16px">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur mollitia sequi tempore unde optio. 
        <p class="remuneracin-en-plan-2 poppins-light-storm-dust-16px">
          <!-- Remuneración en planilla, con todas las condiciones de ley. <br />Línea de carrera, descuentos corporativos. -->
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur mollitia sequi tempore unde optio.
        </p>
        <div class="cta-1">
          <div class="botn-p"><div class="botn-primario poppins-medium-white-16px">Postular al empleo</div></div>
        </div>
        <div class="group-177">
          <div class="te-amaremos-si poppins-medium-malachite-16px">Te amaremos si...</div>
          <img
            class="heart-1-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/heart--1--1@2x.svg"
            alt="Heart (1) 1"
          />
        </div>
        <div class="group-176">
          <p class="eres-la-persona-que-bscamos-si poppins-medium-malachite-16px">Eres la persona que búscamos si...</p>
          <img
            class="icon-user"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/user-1@2x.svg"
            alt="icon-user"
          />
        </div>

        <!-- van abajo de todo -->
        
        <div class="beneficios poppins-medium-malachite-16px" style="margin-top: 420px;">Beneficios</div>

        <p class="remuneracin-en-plan poppins-light-storm-dust-16px">
          Remuneración en planilla, con todas las condiciones de ley. <br />Línea de carrera, descuentos corporativos.
        </p>

        <div class="header">
          <img
            class="search-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/search-2@2x.svg"
            alt="Search 2"
          />
          <img
            class="logo-versin-positiva-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631bb2dca6fbd0d14fab6ac0/img/logo---versi-n-positiva-2@2x.svg"
            alt="Logo - Versin Positiva 2"
          />
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <img
            class="men-hamburguesa"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/men--hamburguesa@2x.svg"
            alt="Men Hamburguesa"
          />
          </a>
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
