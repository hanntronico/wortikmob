<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/miPerfil.css" />
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




  <div class="container container-principal" style="border: 1px solid red;">


      <div class="dashboard screen" style="border: 1px solid green; height: 70px; margin-left: -10px;">
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
            <div class="btn-descarga text-center mb-3">
              <button class="btn rounded-4 bg-white ">
                <img src="img/Download-3 2.png" alt="">
                Descarga CV
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="tuCV border border-1 border-white rounded-4 mb-3">
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
        <div class="btn-descarga text-center p-3">
          <button class="btn rounded-4 bg-white w-50">
            <img src="img/Download-3 2.png" alt="">
            Descarga CV
          </button>
        </div>
      </div>
    </div>
    <div class="container  mb-5">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row" style="border: 0px solid red;">
            <div class="col-9" style="border: 0px solid green;">
              <h5 class=" mt-3">Datos Persoles
              </h5>
            </div>
            <!-- <div class="col-md-2 bg-white rounded-3 icono-edit1 mt-2 ms-2"> -->
            <div class="col-3">
              <div class="bg-white rounded-3 icono-edit1 mt-3 ms-2" style="border: 0px solid green; margin-right: 80px;">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
          </div>
          <div class="fotoPerfil mb-5">
            <div class="imagenPerfil">
              <img class="text-center" src="img/Foto.png" alt="">
              <img src="img/Editar.png" class="mx-5 w-50 editar-perfil" alt="">
            </div>
          </div>
          <div class="container name-perfil text-black-50 ">
            <p class="fs-5 text-center ">
              Patricia Castañeda Ramirez
            </p>
            <p class="text-center">
              IT Recruiter I Analista digital I
            </p>
            <p class="text-center">Proyectos digitales</p>
          </div>
          <div class="container name-perfil text-black-50 mt-5 ">
            <p class=" text-center ">
              24 años
            </p>
            <p class="text-center fw-bold text-decoration-underline ">
              956 585 632 <img class="ms-3" src="img/whatsapp-symbol 1.png" alt="">
            </p>
            <p class="text-center">
              Usuario45@gmail.com
            </p>
            <p class="text-center">
              Lima, Lima, Perú
            </p>
          </div>
        </div>


      </div>
    </div>
    <div class="container">
      <div class="tuCV border border-1 border-white rounded-4 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h5 class=" mt-3">Redes sociales
              </h5>
            </div>
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-2 ms-2">
              <img src="img/Edit 1.png" alt="">
            </div>
            <div class="container iconos-redes">
              <img src="img/Group 12822.png" alt="">
              <img src="img/Group 12823.png" alt="">
              <img src="img/Ellipse 237.png" alt="">
              <img class="ms-3" src="img/Ellipse 237 (1).png" alt="">
              <img src="img/Frame 3493.png" alt="">
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
              <h5 class=" mt-3">Resúmen laboral
              </h5>
            </div>
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-2 ms-2">
              <img src="img/Edit 1.png" alt="">
            </div>
            <div class="container resumen">
              <p class="texto-resumen">
                Bachiller en Psicología Organizacional con experiencia en procesos de selección, análisis de clima
                organizacional, elaboración de bandas salariales y generación de contenido estructurado para soluciones
                tecnológicas en reclutamiento digital. Amante del mundo digital.

              </p>
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
              <h5 class=" mt-3">Experiencia Laboral
              </h5>
            </div>
            <div class="col-2  icono-edit1 mt-2 ms-2">
              <img src="img/Editar (1).png" alt="">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-10 detalles-perfil">
              <h5 class=" mt-3 ">
                Reclutador TI - Junior - Full time
              </h5>
              <p class="direcion-perfil fw-light">
                BBVA (Banca) - San Isidro, Lima Perú
              </p>
              <ul class="lista-perfil fw-light">
                <li>
                  Análisis de los equerimientos y funcionalidades del proyecto.
                </li>
                <li>
                  Implementación y soporte del proyecto.
                </li>
                <li>
                  Elaboración de la estructura y elementos necesarios para la base de datos.
                </li>
                <li>Elaboración de reportes.</li>
              </ul>
              <p class="fw-normal">Tecnologías usadas:</p>
              <ul class="lista-tab p-0">
                <li>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">React</button>
                  <button class="bg-white border-0 p-2  rounded-3 text-black-50">MogoDB</button>
                </li>
                <li class="mt-3 d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">MogoDB</button>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">Javascript</button>
                  <button class="bg-white border-0 p-2 mx-1 rounded-3 text-black-50">CSS</button>
                </li>
                <li class="mt-3 d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">GitLab</button>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">AQL</button>
                  <button class="bg-white border-0 p-2 mx-1 rounded-3 text-black-50">Angular</button>
                </li>
              </ul>
              <p class="fw-normal">Ene 2019 - Ago 2019 (7 meses)</p>
            </div>
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-3 ms-2">
              <img src="img/Edit 1.png" alt="">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-10 detalles-perfil">
              <h5 class=" mt-3 ">
                Reclutador TI - Junior - Full time
              </h5>
              <p class="direcion-perfil fw-light">
                BBVA (Banca) - San Isidro, Lima Perú
              </p>
              <ul class="lista-perfil fw-light">
                <li>
                  Análisis de los equerimientos y funcionalidades del proyecto.
                </li>
                <li>
                  Implementación y soporte del proyecto.
                </li>
                <li>
                  Elaboración de la estructura y elementos necesarios para la base de datos.
                </li>
                <li>Elaboración de reportes.</li>
              </ul>
              <p class="fw-normal">Tecnologías usadas:</p>
              <ul class="lista-tab p-0">
                <li>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">React</button>
                  <button class="bg-white border-0 p-2  rounded-3 text-black-50">MogoDB</button>
                </li>
                <li class="mt-3 d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">MogoDB</button>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">Javascript</button>
                  <button class="bg-white border-0 p-2 mx-1 rounded-3 text-black-50">CSS</button>
                </li>
                <li class="mt-3 d-flex">
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">GitLab</button>
                  <button class="bg-white border-0  p-2 mx-1 rounded-3 text-black-50">AQL</button>
                  <button class="bg-white border-0 p-2 mx-1 rounded-3 text-black-50">Angular</button>
                </li>
              </ul>
              <p class="fw-normal">Ene 2019 - Ago 2019 (7 meses)</p>
            </div>
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-3 ms-2">
              <img src="img/Edit 1.png" alt="">
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
              <h5 class=" mt-3">Form. académica
              </h5>
            </div>
            <div class="col-2  icono-edit1 mt-2 ms-2">
              <img src="img/Editar (1).png" alt="">
            </div>
            <div class="row mt-2 m-0">
              <div class="col-10 info-formacion">
                <p class="fw-semibold m-0">Ingeniería de Sistemas –Culminado –Décimo superior</p>
                <p class="fw-light">Pontifica Universidad Nacional Mayor de San Marcos</p>
                <p class="fw-semibold">Marz 2014 - Ago 2019</p>

              </div>
              <div class="col-2  bg-white  rounded-3 icono-edit1  ms-3">
                <img src="img/Edit 1.png" alt="">
              </div>
            </div>
            <div class="row mt-2 m-0">
              <div class="col-10 info-formacion">
                <p class="fw-semibold m-0">Ingeniería de Sistemas –Culminado –Décimo superior</p>
                <p class="fw-light">Pontifica Universidad Nacional Mayor de San Marcos</p>
                <p class="fw-semibold">Marz 2014 - Ago 2019</p>

              </div>
              <div class="col-2  bg-white  rounded-3 icono-edit1  ms-3">
                <img src="img/Edit 1.png" alt="">
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
              <h5 class=" mt-3">Idiomas
              </h5>
              <div class="idiomas d-flex fw-light">
                <p class="idioma-1">Inglés</p>
                <p class="mx-1 nivel-idioma">- Avanzado</p>
              </div>
              <div class="idiomas d-flex fw-light">
                <p class="idioma-1">Portugues</p>
                <p class="mx-1 nivel-idioma">- Nativo</p>
              </div>
            </div>
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-2 ms-2">
              <img src="img/Edit 1.png" alt="">
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
            <div class="col-2  bg-white  rounded-3 icono-edit1 mt-2 ms-2">
              <img src="img/Edit 1.png" alt="">
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
                <div class="col-4  bg-white  rounded-3 icono-edit1 ">
                  <img src="img/Edit 1.png" alt="">
                </div>
              </div>
              <div class="cursos-certifica row mt-3 ">
                <div class="col-8 info-formacion">
                  <p class="fw-semibold m-0">Fundamentos de Design <br> Thinking</p>
                  <p class="fw-light">Platzi</p>
                  <p class="fw-semibold">Ago 2014 - Dic 2019</p>

                </div>
                <div class="col-4  bg-white  rounded-3 icono-edit1 ">
                  <img src="img/Edit 1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-2  icono-edit1 mt-2 ms-2">
              <img src="img/Editar (1).png" alt="">
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
                <div class="col-4  bg-white  rounded-3 icono-edit1 ">
                  <img src="img/Edit 1.png" alt="">
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
                <div class="col-4  bg-white  rounded-3 icono-edit1 ">
                  <img src="img/Edit 1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-2  icono-edit1 mt-2 ms-2">
              <img src="img/Editar (1).png" alt="">
            </div>


          </div>
        </div>
      </div>
    </div>

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





</body>

</html>