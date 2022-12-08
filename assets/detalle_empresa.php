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
    <!-- <link rel="stylesheet" type="text/css" href="postulaciones.css" /> -->
    <link rel="stylesheet" type="text/css" href="detalles-de-la-emrpesa.css" />
    <!-- <link rel="stylesheet" type="text/css" href="miperfil.css" /> -->


    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu.php' ?>

    </div>
  </aside>

    <input type="hidden" id="anPageName" name="page" value="postulaciones" />

    <div class="container-center-horizontal">
      <div class="detalles-de-la-emrpesa screen">
        <div class="frame-3693">

          <div class="frame-3694">
            <div class="overlap-group">
              <img
                class="rectangle-222"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/rectangle-222@2x.png"
                alt="Rectangle 222"
              />
              <img
                class="ellipse-9"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/ellipse-9-1@2x.png"
                alt="Ellipse 9"
              />
            </div>
          </div>

          <div class="detalles" style="border: none;">
            <div class="frame-3695 poppins-light-storm-dust-12px">
              <p class="de-20-a-500-colaboradores">De 20 a 500 colaboradores.</p>
              <div class="frame-3695-item">Perú - Lima/San Borja</div>
              <div class="frame-3695-item">Area: Banca</div>
            </div>
            <div class="ver-mas">
              <div class="ver-ms poppins-medium-malachite-16px">Ver más</div>
              <img
                class="add-stroke-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/add-stroke-1-2@2x.svg"
                alt="Add-Stroke 1"
              />
            </div>

            <p class="en-bbva-estamos-lide poppins-light-storm-dust-16px" >
              En BBVA estamos liderando la transformación de la banca a nivel mundial, persiguiendo juntos nuestro
              propósito de poner al alcance de todos las oportunidades de esta nueva era. Enfocados firmemente al
              futuro, nuestra transformación digital ya está resultando en innovaciones disruptivas que potencian la
              visión que tenemos...
            </p>

            <div class="cta" onclick="proximamente()" style="margin-top: 12px;">
              <div class="botn-p">
                <div class="botn-primario poppins-medium-white-16px">Seguir</div>
              </div>
            </div>
 
            <div class="creando-oportunidades">Creando Oportunidades</div>
            <h1 class="title poppins-semi-bold-storm-dust-24px">BBVA</h1>
          </div>

          <div class="frame-154" style="border: none;">
            <div class="video-corporativo poppins-semi-bold-storm-dust-16px">Video Corporativo</div>
            <div class="group-184">
              <div class="overlap-group-1">
                <img
                  class="polygon-4"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/polygon-4@2x.svg"
                  alt="Polygon 4"
                />
              </div>
            </div>
          </div>

          <div class="ubicacin" style="border: none;">
            <div class="redes-sociales">
              <div class="fb">
                <img
                  class="brandicofacebook"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/brandico-facebook-14@2x.svg"
                  alt="brandico:facebook"
                />
              </div>
              <div class="ins">
                <img
                  class="akar-iconsinstagram-fill"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/akar-icons-instagram-fill-14@2x.svg"
                  alt="akar-icons:instagram-fill"
                />
              </div>
              <div class="tw">
                <img
                  class="akar-iconstwitter-fill"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-twitter-fill-1@2x.svg"
                  alt="akar-icons:twitter-fill"
                />
              </div>
              <div class="in">
                <img
                  class="vector"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector@2x.svg"
                  alt="Vector"
                />
              </div>
            </div>
            <div class="redes-sociales-1 poppins-semi-bold-storm-dust-16px">Redes Sociales</div>
            <div class="ubicacin-1 poppins-normal-storm-dust-16px">Ubicación</div>
            <p class="repblica-de-panam poppins-light-storm-dust-12px">
              República de Panamá 3055, San Isidro, Lima 27, PE
            </p>
            <div class="ver-en-google-maps poppins-light-malachite-12px">Ver en Google Maps</div>
            <div class="detalles-1 poppins-semi-bold-storm-dust-16px">Detalles</div>
          </div>

          <div class="frame-3692">

            <div class="ubicacin-2" style="border: none;" onclick="proximamente()">
              <div class="valaciones poppins-semi-bold-storm-dust-16px">Valoraciones</div>
              <div class="group-2887">
                <div class="frame-138"><div class="text-1 poppins-medium-midnight-blue-16px">5.00</div></div>
                <div class="place poppins-normal-storm-dust-16px">General</div>
                <div class="group-2886-1">
                  <img
                    class="star-6"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-6@2x.svg"
                    alt="Star 6"
                  />
                  <img
                    class="star-7"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-7@2x.svg"
                    alt="Star 7"
                  />
                  <img
                    class="star-8"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-8@2x.svg"
                    alt="Star 8"
                  />
                  <img
                    class="star-9"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-9@2x.svg"
                    alt="Star 9"
                  />
                  <img
                    class="star-20"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-20@2x.svg"
                    alt="Star 20"
                  />
                </div>
              </div>

              <div class="frame-155">
                <div class="group-28">
                  <div class="frame-139"><div class="text-2 poppins-medium-de-york-16px">4.20</div></div>
                  <div class="ambiente-laboral poppins-normal-storm-dust-12px">Ambiente Laboral</div>
                  <div class="group-2886">
                    <img
                      class="star-6"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-6-1@2x.svg"
                      alt="Star 6"
                    />
                    <img
                      class="star-7"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-7-1@2x.svg"
                      alt="Star 7"
                    />
                    <img
                      class="star-8"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-8-1@2x.svg"
                      alt="Star 8"
                    />
                    <img
                      class="star-9"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-9-1@2x.svg"
                      alt="Star 9"
                    />
                    <img
                      class="star-20"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-20-1@2x.svg"
                      alt="Star 20"
                    />
                  </div>
                </div>
                <div class="group-28">
                  <div class="frame-14"><div class="text-3 poppins-medium-de-york-16px">4.60</div></div>
                  <div class="salarios-y-beneficios poppins-normal-storm-dust-12px">Salarios y Beneficios</div>
                  <div class="group-2886">
                    <img
                      class="star-6"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-6-1@2x.svg"
                      alt="Star 6"
                    />
                    <img
                      class="star-7"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-7-1@2x.svg"
                      alt="Star 7"
                    />
                    <img
                      class="star-8"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-8-1@2x.svg"
                      alt="Star 8"
                    />
                    <img
                      class="star-9"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-9-1@2x.svg"
                      alt="Star 9"
                    />
                    <img
                      class="star-20"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-20-1@2x.svg"
                      alt="Star 20"
                    />
                  </div>
                </div>
                <div class="group-28">
                  <div class="frame-14"><div class="text-4 poppins-medium-de-york-16px">5.00</div></div>
                  <div class="desarrollo-profesional poppins-normal-storm-dust-12px">Desarrollo Profesional</div>
                  <div class="group-2886">
                    <img
                      class="star-6"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-6-1@2x.svg"
                      alt="Star 6"
                    />
                    <img
                      class="star-7"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-7-1@2x.svg"
                      alt="Star 7"
                    />
                    <img
                      class="star-8"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-8-1@2x.svg"
                      alt="Star 8"
                    />
                    <img
                      class="star-9"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-9-1@2x.svg"
                      alt="Star 9"
                    />
                    <img
                      class="star-20"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-20-3@2x.svg"
                      alt="Star 20"
                    />
                  </div>
                </div>
                <div class="group-2891">
                  <div class="frame-14"><div class="text-5 poppins-medium-de-york-16px">5.00</div></div>
                  <div class="desarrollo-profesional-1 poppins-normal-storm-dust-12px">Desarrollo Profesional</div>
                  <div class="group-2886-2">
                    <img
                      class="star-6"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-6-1@2x.svg"
                      alt="Star 6"
                    />
                    <img
                      class="star-7"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-7-1@2x.svg"
                      alt="Star 7"
                    />
                    <img
                      class="star-8"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-8-1@2x.svg"
                      alt="Star 8"
                    />
                    <img
                      class="star-9"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-9-1@2x.svg"
                      alt="Star 9"
                    />
                    <img
                      class="star-20"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/star-20-3@2x.svg"
                      alt="Star 20"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-3691">
              <div class="deseas-dejar-tu-valoracin poppins-normal-storm-dust-12px">¿Deseas dejar tu valoración?</div>
              <div class="valorar-a-esta-empresa poppins-normal-malachite-12px">Valorar a esta empresa.</div>
            </div>
          </div>
          <div class="footer">
            <p class="x2022-wortika-todos lato-normal-boulder-12px">
              © 2022 Wortika&nbsp;&nbsp;Todos los derechos reservados.
            </p>
            <img
              class="logo-versin-positiva-2"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/logo---versi-n-positiva-2-13@2x.svg"
              alt="Logo - Versin Positiva 2"
            />
            <div class="redes-sociales-2">
              <div class="fb-1">
                <img
                  class="brandicofacebook"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/brandico-facebook-15@2x.svg"
                  alt="brandico:facebook"
                />
              </div>
              <div class="ins-1">
                <img
                  class="akar-iconsinstagram-fill"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/akar-icons-instagram-fill-15@2x.svg"
                  alt="akar-icons:instagram-fill"
                />
              </div>
              <div class="tw-1">
                <img
                  class="akar-iconstwitter-fill"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/akar-icons-twitter-fill-1@2x.svg"
                  alt="akar-icons:twitter-fill"
                />
              </div>
              <div class="in-1">
                <img
                  class="vector"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector@2x.svg"
                  alt="Vector"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="frame-136">
          <img
            class="frame-129"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/frame-129-3@2x.svg"
            alt="Frame 129"
          />
          <div class="bbva-per-1000-seguidores poppins-normal-storm-dust-12px">BBVA-Perú-1000 seguidores</div>
          <div class="frame-105">
            <div class="detalles-de-empresa poppins-normal-malachite-14px">Detalles de empresa</div>
          </div>
          <div class="frame-106"><div class="empleos poppins-normal-storm-dust-14px">Empleos</div></div>
          <div class="rectangle-234"></div>
        </div>
        <div class="header">
          <img
            class="vector-24"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/vector-24@2x.svg"
            alt="Vector 24"
          />
          <img
            class="logo-versin-positiva-2-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/logo---versi-n-positiva-2-14@2x.svg"
            alt="Logo - Versin Positiva 2"
          />
          <img
            class="men-hamburguesa"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/633782c24759eab7e408d57e/img/men--hamburguesa-11@2x.svg"
            alt="Men Hamburguesa"
          />
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

        function proximamente() {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: false,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'info',
            title: 'Proximamente'
          })
        }





    </script>



  </body>
</html>
