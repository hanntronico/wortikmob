<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link rel="stylesheet" type="text/css" href="dashboard.css" />
    <link rel="stylesheet" type="text/css" href="miperfil.css" />
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  </head>
  <body style="margin: 0; background: #f9f9f9" class="hold-transition sidebar-mini layout-fixed">

  <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">

    <?php include 'menu.php' ?>

    <!-- <div class="container-center-horizontal">
      <div class="menu-dashboard screen">
          <img
              class="group"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/group@2x.svg"
            />
            <img
              class="close-2-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/close--2--1@2x.svg"
            />
            <img
              class="rectangle-263"
              src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/rectangle-263@2x.svg"
            />
            <div class="frame-3541">
              <div class="frame-3540">
                <div class="frame-3545">
                  <div class="seccin">
                    <img
                      class="dashboard-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/dashboard-1@2x.svg"
                    />
                    <div class="dashboard poppins-medium-malachite-16px">Dashboard</div>
                  </div>
                  <div class="seccin-1">
                    <img
                      class="icon-user"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                    />
                    <div class="mi-perfil poppins-normal-storm-dust-16px">Mi perfil</div>
                  </div>
                  <div class="seccin-2">
                    <img
                      class="icon-user-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                    />
                    <div class="postulaciones poppins-normal-storm-dust-16px">Postulaciones</div>
                  </div>
                  <div class="seccin-3">
                    <img
                      class="icon-mail"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/mail-1@2x.svg"
                    />
                    <div class="mensajes poppins-normal-storm-dust-16px">Mensajes</div>
                  </div>
                  <div class="seccin-4">
                    <img
                      class="icon-bookmark"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/bookmark-2@2x.svg"
                    />
                    <div class="guardados poppins-normal-storm-dust-16px">Guardados</div>
                  </div>
                  <div class="seccin-5">
                    <img
                      class="money-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/money-1@2x.svg"
                    />
                    <div class="salarios poppins-normal-storm-dust-16px">Salarios</div>
                  </div>
                </div>

              <button type="button" class="botn-p" onclick="javascript:alert('buscar');">
                <img
                    class="icon-search"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/search-3@2x.svg"
                  />
                <div class="buscar-empleo poppins-medium-white-16px">Buscar empleo</div>
              </button>


              <div class="frame-3539">
                <div class="correo">
                  <div class="name poppins-medium-storm-dust-16px">Rodrigo Ceballos</div>
                  <div class="rodrigo44gmailcom poppins-normal-storm-dust-12px">rodrigo44@gmail.com</div>
                </div>
                <div class="frame-3542 poppins-normal-storm-dust-16px">
                  <div class="mi-cuenta">Mi cuenta</div>
                  <div class="cerrar-sesin">Cerrar sesión</div>
                </div>
              </div>
            </div>

      </div>
    </div> -->

    </div>
  </aside>




    <input type="hidden" id="anPageName" name="page" value="dashboard" />
    <div class="container-center-horizontal">
      <div class="dashboard screen">
        <div class="overlap-group4">
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
            <div class="nuevo"><div class="number poppins-semi-bold-white-12px">12</div></div>
          </div>

          <div class="frame-3553" style="margin-top: -30px;">
            <!-- <div class="frame-3543"> -->

              


    <div class="container-center-horizontal">

      <div class="mi-perfil screen">
        <div class="overlap-group4">
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



          <div class="frame-3553">
            <div class="texto">
              <h1 class="aviso poppins-semi-bold-storm-dust-24px">Mi perfil</h1>


              <p class="aviso-1 poppins-light-storm-dust-12px">¡Un perfil completo, es un perfil más empleable!</p>
            </div>
            <div class="frame-3523">
              <div class="frame-3359">
                <div class="info">
                  <div class="aviso-2 poppins-medium-malachite-16px">Medidor Wortika</div>
                  <p class="aviso-3 poppins-light-storm-dust-12px">¡Un perfil completo, es más empleable!</p>
                </div>
                <div class="overlap-group-1">
                  <img
                    class="ellipse-232"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7d8d5d5550dee679302c/img/ellipse-232@2x.svg"
                  />
                  <div class="percent">98%</div>
                </div>
              </div>

              <div class="frame-3520" style="width: 600px;">
                <div class="overlap-group1-1">
                  <img
                    class="fondo"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7d8d5d5550dee679302c/img/fondo-1@2x.svg"
                  />
                  <div class="info-1">
                    <div class="aviso-4 poppins-medium-white-16px">Medidor Wortika</div>
                    <p class="aviso-5">¡Te regalamos diferentes plantillas para usar en tu CV gratis!</p>
                    <div class="frame-3353">
                      <img
                        class="icon-download_arrow"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62a738c3c50d8e0f8758cea4/img/download-3-2@2x.svg"
                      />
                      <div class="descripcin poppins-medium-storm-dust-12px">Descargar CV</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-3067">
              <div class="ellipse-49"></div>
              <div class="ellipse-48"></div>
            </div>
            <div class="frame-3530">
              <div class="datos-personales">
                <div class="nombre poppins-medium-malachite-16px">Datos personales</div>
                <div class="frame-3546">
                  <img
                    class="foto"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7d8d5d5550dee679302c/img/foto@2x.svg"
                  />
                  <img
                    class="editar-2"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                </div>
                <div class="frame-3529">
                  <p class="nombre-2 poppins-medium-storm-dust-16px">
                    <span class="poppins-medium-storm-dust-16px">Patricia Castañeda Ramirez<br /></span
                    ><span class="span1 poppins-light-storm-dust-12px"
                      >IT Recruiter&nbsp;&nbsp;I&nbsp;&nbsp;Analista digital&nbsp;&nbsp;I&nbsp;&nbsp;Proyectos
                      digitales</span
                    >
                  </p>
                  <div class="overlap-group-2">
                    <p class="profesion-8 poppins-light-storm-dust-12px">
                      <span class="poppins-light-storm-dust-12px">24Años<br /></span
                      ><span class="span1-1 poppins-medium-storm-dust-12px">956 585 632<br /></span
                      ><span class="poppins-light-storm-dust-12px">Usuario45@gmail.com<br />Lima, Lima, Perú</span>
                    </p>
                    <img
                      class="whatsapp-symbol-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                </div>
                <img
                  class="editar-3"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7d8d5d5550dee679302c/img/editar@2x.svg"
                />
              </div>
              <div class="datos-personales-1">
                <div class="nombre poppins-medium-malachite-16px">Redes o proyectos</div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
                <div class="frame-3488">
                  <div class="frame-3486">
                    <img
                      class="ellipse-23"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                  <div class="frame-3487">
                    <img
                      class="ellipse-23"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                  <div class="frame-3488-1">
                    <img
                      class="ellipse-23"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                  <div class="frame-3489">
                    <img
                      class="ellipse-23"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                  <div class="frame-3493">
                    <img
                      class="layer1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                </div>
              </div>
              <div class="datos-personales-2">
                <div class="nombre poppins-medium-malachite-16px">Resúmen laboral</div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
                <p class="profesion-9 poppins-light-storm-dust-12px">
                  Bachiller en Psicología Organizacional con experiencia en procesos de selección, análisis de clima
                  organizacional, elaboración de bandas salariales y generación de contenido estructurado para
                  soluciones tecnológicas en reclutamiento digital. Amante del mundo digital.
                </p>
              </div>
              <div class="datos-personales-3">
                <div class="nombre-1 poppins-medium-malachite-16px">Experiencia laboral</div>
                <div class="frame-container">
                  <div class="frame-354">
                    <div class="frame-3531">
                      <p class="profesion poppins-medium-storm-dust-16px">
                        <span class="poppins-medium-storm-dust-16px">Reclutador TI - Junior - Full time<br /></span
                        ><span class="span1 poppins-light-storm-dust-12px"
                          >BBVA (Banca) - San Isidro, Lima Perú<br />Análisis de los equerimientos y funcionalidades del
                          proyecto.<br />Implementación y soporte del proyecto.<br />Elaboración de la estructura y
                          elementos necesarios para la base de datos.<br />Elaboración de reportes.</span
                        >
                      </p>
                      <div class="frame-3228">
                        <div class="profesion-1 poppins-medium-storm-dust-12px">Tecnologías usadas:</div>
                        <div class="frame-3047">
                          <div class="frame-3537">
                            <div class="frame-3022">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">React</div>
                            </div>
                            <div class="frame-3026">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                            </div>
                          </div>
                          <div class="frame-3539">
                            <div class="frame-3026-1">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                            </div>
                            <div class="frame-3027">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">Java Script</div>
                            </div>
                            <div class="frame-3028">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">CSS</div>
                            </div>
                          </div>
                          <div class="frame-3538">
                            <div class="frame-3028-1">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">GitLab</div>
                            </div>
                            <div class="frame-3029">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">AQL</div>
                            </div>
                            <div class="frame-3030">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">Angular</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="profesion-3 poppins-medium-storm-dust-12px">
                        <span class="poppins-medium-storm-dust-12px">Ene 2019 - Ago 2019 </span
                        ><span class="poppins-normal-storm-dust-12px">(7 meses)</span>
                      </p>
                    </div>
                    <img
                      class="editar-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                  <div class="frame-354">
                    <div class="frame-3531">
                      <p class="profesion poppins-medium-storm-dust-16px">
                        <span class="poppins-medium-storm-dust-16px">Reclutador TI - Junior - Full time<br /></span
                        ><span class="span1 poppins-light-storm-dust-12px"
                          >BBVA (Banca) - San Isidro, Lima Perú<br />Análisis de los equerimientos y funcionalidades del
                          proyecto.<br />Implementación y soporte del proyecto.<br />Elaboración de la estructura y
                          elementos necesarios para la base de datos.<br />Elaboración de reportes.</span
                        >
                      </p>
                      <div class="frame-3228">
                        <div class="profesion-1 poppins-medium-storm-dust-12px">Tecnologías usadas:</div>
                        <div class="frame-3047">
                          <div class="frame-3537">
                            <div class="frame-3022">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">React</div>
                            </div>
                            <div class="frame-3026">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                            </div>
                          </div>
                          <div class="frame-3539">
                            <div class="frame-3026-1">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                            </div>
                            <div class="frame-3027">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">Java Script</div>
                            </div>
                            <div class="frame-3028">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">CSS</div>
                            </div>
                          </div>
                          <div class="frame-3538">
                            <div class="frame-3028-1">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">GitLab</div>
                            </div>
                            <div class="frame-3029">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">AQL</div>
                            </div>
                            <div class="frame-3030">
                              <div class="profesion-2 poppins-normal-storm-dust-12px">Angular</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="profesion-3 poppins-medium-storm-dust-12px">
                        <span class="poppins-medium-storm-dust-12px">Ene 2019 - Ago 2019 </span
                        ><span class="poppins-normal-storm-dust-12px">(7 meses)</span>
                      </p>
                    </div>
                    <img
                      class="editar-1"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                    />
                  </div>
                </div>
                <div class="frame-3550">
                  <div class="frame-3531">
                    <p class="profesion poppins-medium-storm-dust-16px">
                      <span class="poppins-medium-storm-dust-16px">Reclutador TI - Junior - Full time<br /></span
                      ><span class="span1 poppins-light-storm-dust-12px"
                        >BBVA (Banca) - San Isidro, Lima Perú<br />Análisis de los equerimientos y funcionalidades del
                        proyecto.<br />Implementación y soporte del proyecto.<br />Elaboración de la estructura y
                        elementos necesarios para la base de datos.<br />Elaboración de reportes.</span
                      >
                    </p>
                    <div class="frame-3228">
                      <div class="profesion-1 poppins-medium-storm-dust-12px">Tecnologías usadas:</div>
                      <div class="frame-3047">
                        <div class="frame-3537">
                          <div class="frame-3022">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">React</div>
                          </div>
                          <div class="frame-3026">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                          </div>
                        </div>
                        <div class="frame-3539">
                          <div class="frame-3026-1">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">MogoDB</div>
                          </div>
                          <div class="frame-3027">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">Java Script</div>
                          </div>
                          <div class="frame-3028">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">CSS</div>
                          </div>
                        </div>
                        <div class="frame-3538">
                          <div class="frame-3028-1">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">GitLab</div>
                          </div>
                          <div class="frame-3029">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">AQL</div>
                          </div>
                          <div class="frame-3030">
                            <div class="profesion-2 poppins-normal-storm-dust-12px">Angular</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="profesion-3 poppins-medium-storm-dust-12px">
                      <span class="poppins-medium-storm-dust-12px">Ene 2019 - Ago 2019 </span
                      ><span class="poppins-normal-storm-dust-12px">(7 meses)</span>
                    </p>
                  </div>
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                </div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
              </div>
              <div class="datos-personales-4">
                <div class="nombre-1 poppins-medium-malachite-16px">Form. académica</div>
                <div class="frame-3533">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-1 poppins-medium-storm-dust-12px">
                    <p class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px"
                        >Ingeniería de Sistemas –Culminado –Décimo superior<br /></span
                      ><span class="poppins-light-storm-dust-12px"
                        >Pontifica Universidad Nacional Mayor de San Marcos</span
                      >
                    </p>
                    <p class="profesion-5">Marz 2014&nbsp;&nbsp;-&nbsp;&nbsp;Ago 2019</p>
                  </div>
                </div>
                <div class="frame-3534">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-1 poppins-medium-storm-dust-12px">
                    <p class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px"
                        >Ingeniería de Sistemas –Culminado –Décimo superior<br /></span
                      ><span class="poppins-light-storm-dust-12px"
                        >Pontifica Universidad Nacional Mayor de San Marcos</span
                      >
                    </p>
                    <p class="profesion-5">Marz 2014&nbsp;&nbsp;-&nbsp;&nbsp;Ago 2019</p>
                  </div>
                </div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
              </div>
              <div class="datos-personales-5">
                <div class="nombre-1 poppins-medium-malachite-16px">Idiomas</div>
                <div class="profesion-10 poppins-normal-white-12px">
                  <span class="poppins-normal-storm-dust-12px">Inglés</span
                  ><span class="poppins-normal-malachite-12px"> - Avanzado</span>
                </div>
                <div class="profesion-11 poppins-normal-white-12px">
                  <span class="poppins-normal-storm-dust-12px">Portugues</span
                  ><span class="poppins-normal-malachite-12px"> - Nativo</span>
                </div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
              </div>
              <div class="datos-personales-6">
                <div class="nombre-1 poppins-medium-malachite-16px">Aptitudes</div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
                <div class="frame-3228-1">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Lenguajes de programación</div>
                  <div class="frame-3047-1">
                    <div class="frame-3537-1">
                      <div class="frame-3022-1">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">Phyton</span
                          ><span class="poppins-normal-malachite-12px">/Básico</span>
                        </div>
                      </div>
                      <div class="frame-3026-2">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">PHP</span
                          ><span class="poppins-normal-malachite-12px">/Básico</span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-3538-1">
                      <div class="frame-3027-1">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">Java</span
                          ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                        </div>
                      </div>
                      <div class="frame-3028-2">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">Java</span
                          ><span class="poppins-normal-malachite-12px">/Avanzado</span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-3029-1">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Java</span
                        ><span class="poppins-normal-malachite-12px">/Experto</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-3261">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Frameworks</div>
                  <div class="frame-3047-2">
                    <div class="frame-3022-2">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Laravel</span
                        ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                      </div>
                    </div>
                    <div class="frame-3027-2">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Angular</span
                        ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                      </div>
                    </div>
                    <div class="frame-3029-2">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Magento</span
                        ><span class="poppins-normal-malachite-12px">/Avanzado</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-3262">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Base de datos</div>
                  <div class="frame-3047-3">
                    <div class="frame-3537-2">
                      <div class="frame-3022-3">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">SQL</span
                          ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                        </div>
                      </div>
                      <div class="frame-3027-3">
                        <div class="profesion-2 poppins-normal-white-12px">
                          <span class="poppins-normal-storm-dust-12px">MySQL</span
                          ><span class="poppins-normal-malachite-12px">/Experto</span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-3029-3">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">PostgreSQL</span
                        ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-3263">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Desarrollo móvil</div>
                  <div class="frame-3047-4">
                    <div class="frame-3022-4">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">ionic</span
                        ><span class="poppins-normal-malachite-12px">/Experto</span>
                      </div>
                    </div>
                    <div class="frame-3027-4">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Flutter</span
                        ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-3264">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Bibliotecas o librerías</div>
                  <div class="frame-3047-5">
                    <div class="frame-3022-5">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Pandas</span
                        ><span class="poppins-normal-malachite-12px">/Experto</span>
                      </div>
                    </div>
                    <div class="frame-3027-5">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Shap</span
                        ><span class="poppins-normal-malachite-12px">/Intermedio</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-3265">
                  <div class="profesion-1 poppins-medium-storm-dust-12px">Herramientas de diseño</div>
                  <div class="frame-3047-6">
                    <div class="frame-3022-6">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Figma</span
                        ><span class="poppins-normal-malachite-12px">/Básico</span>
                      </div>
                    </div>
                    <div class="frame-3027-6">
                      <div class="profesion-2 poppins-normal-white-12px">
                        <span class="poppins-normal-storm-dust-12px">Sketch</span
                        ><span class="poppins-normal-malachite-12px">/Básico</span>
                      </div>
                    </div>
                  </div>
                  <div class="frame-3022-7">
                    <div class="profesion-2 poppins-normal-white-12px">
                      <span class="poppins-normal-storm-dust-12px">Invision</span
                      ><span class="poppins-normal-malachite-12px">/Experto</span>
                    </div>
                  </div>
                </div>
                <p class="profesion-12 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px">Sistemas operativos:<br /></span
                  ><span class="poppins-light-storm-dust-12px">Linux, Ubuntu, MacOS, Windows</span>
                </p>
                <div class="profesion-13 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px">Metodologías de trabajo:<br /></span
                  ><span class="poppins-light-storm-dust-12px">Scrum, Kanban</span>
                </div>
                <p class="profesion-14 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px"
                    >Herramientas de comunicación y organización de tareas:<br /></span
                  ><span class="poppins-light-storm-dust-12px">Slack, Trello, Asana, AzureDevopes, Whatsapp, Git</span>
                </p>
                <p class="profesion-15 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px">Competencias personales:<br /></span
                  ><span class="poppins-light-storm-dust-12px"
                    >Capacidad de aprendizaje, pensamiento anaítico, creatividad</span
                  >
                </p>
                <p class="profesion-16 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px">Conocimientos del sector:<br /></span
                  ><span class="poppins-light-storm-dust-12px"
                    >Capacidad de aprendizaje, pensamiento anaítico, creatividad</span
                  >
                </p>
                <div class="profesion-17 poppins-medium-storm-dust-12px">
                  <span class="poppins-medium-storm-dust-12px">Otras aptitudes:<br /></span
                  ><span class="poppins-light-storm-dust-12px">VisualStudioCodex</span>
                </div>
              </div>
              <div class="datos-personales-7">
                <div class="nombre-1 poppins-medium-malachite-16px">Cursos y certifica.</div>
                <div class="frame-3533-1">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-2 poppins-medium-storm-dust-12px">
                    <div class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px">Fundamentos de Design Thinking<br /></span
                      ><span class="poppins-light-storm-dust-12px">Platzi</span>
                    </div>
                    <p class="profesion-6">Ago 2014&nbsp;&nbsp;-&nbsp;&nbsp;Dic 2019</p>
                  </div>
                </div>
                <div class="frame-3534-1">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-2 poppins-medium-storm-dust-12px">
                    <div class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px">Fundamentos de Design Thinking<br /></span
                      ><span class="poppins-light-storm-dust-12px">Platzi</span>
                    </div>
                    <p class="profesion-6">Ago 2014&nbsp;&nbsp;-&nbsp;&nbsp;Dic 2019</p>
                  </div>
                </div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
              </div>
              <div class="datos-personales-8">
                <div class="nombre-1 poppins-medium-malachite-16px">Referencias laboral.</div>
                <div class="frame-3533-2">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-3 poppins-medium-storm-dust-12px">
                    <p class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px">Mateo Porras Delgado<br /></span
                      ><span class="poppins-light-storm-dust-12px"
                        >Gerente de Sistemas en TALENT QR SAC<br />Mateogonzales@talent.pe<br />985656521</span
                      >
                    </p>
                    <div class="profesion-7">985656521</div>
                  </div>
                </div>
                <div class="frame-3534-2">
                  <img
                    class="editar-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                  />
                  <div class="frame-3531-3 poppins-medium-storm-dust-12px">
                    <p class="profesion-4">
                      <span class="poppins-medium-storm-dust-12px">Mateo Porras Delgado<br /></span
                      ><span class="poppins-light-storm-dust-12px"
                        >Gerente de Sistemas en TALENT QR SAC<br />Mateogonzales@talent.pe<br />985656521</span
                      >
                    </p>
                    <div class="profesion-7">985656521</div>
                  </div>
                </div>
                <img
                  class="editar"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7ff35d5550dee6793039/img/editar@2x.png"
                />
              </div>
            </div>
            <div class="frame-3524">
              <div class="profesion-18 poppins-medium-malachite-16px">Tu CV</div>
              <div class="frame-3493-1">
                <div class="frame-3373 border-1px-pink-swan">
                  <div class="frame-3374">
                    <div class="subir-cv poppins-medium-storm-dust-12px">Subir CV</div>
                    <img
                      class="file-generic-3"
                      src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629551a6f96e48014e3bc4b8/img/file-generic-3@2x.svg"
                    />
                  </div>
                  <div class="archivos-permitidos-doc-pdf poppins-light-storm-dust-12px">
                    Archivos permitidos:<br />Doc, Pdf.
                  </div>
                </div>
                <div class="frame-3353-1">
                  <img
                    class="icon-download_arrow"
                    src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62ac7d8d5d5550dee679302c/img/download-3-2-1@2x.svg"
                  />
                  <div class="descripcin poppins-medium-storm-dust-12px">Descargar CV</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







            <!-- </div> -->
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
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  </body>
</html>
