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
                    <h1 class="titulo">Datos personales</h1>
                    <p class="poppins-light-storm-dust-12px" style="text-align: center;">Mi perfil / 
                      <span style="color: #339698; font-weight: 400; line-height: 130%;">Edición</span></p>
                  </div>
                </div>

                <form style="border: none;">
                  <div class="form-row mt-3">
                    <div class="col-12 col-md-12 mb-4">
                      <input type="text" class="form-control input_text" id="validationServer01" placeholder="Nombre" value="" required>
                    </div>

                    <div class="col-12 col-md-12 mb-3">
                      <input type="text" class="form-control input_text" id="validationServer01" placeholder="Apellidos" value="" required>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="">
                          <option value="masculino">Masculino</option>
                          <option value="femenino">Femenino</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="date" class="form-control input_text" name="fec_nac" id="fec_nac">
                      </div>
                    </div>

                  </div>

                  <div class="form-row mt-2">
                    
                    <div class="col-4 col-md-4 mb-4">
                      <div class="select_frame_pais">
                        <select class="form-control select_input" name="">
                          <option value="51">+51</option>
                          <option value="57">+57</option>
                        </select>
                        <img
                        class="chevron-down-2"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="col-8 col-md-8 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="text" class="form-control input_text" name="fec_nac" id="fec_nac">
                      </div>
                      <img
                          class="icon_info"
                          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/info-4@2x.svg"
                      />
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="">
                          <option value="masculino">Tipo documento</option>
                          <option value="dni">DNI</option>
                          <option value="pasaporte">Pasaporte</option>
                          <option value="carne_extran">Carne de extranjería</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>           

                    <div class="col-12 col-md-12 mt-2 mb-3">
                      <input type="text" class="form-control input_text" id="validationServer01" placeholder="Nº de Documento" value="" required>
                    </div>
                    
                    <div class="col-12 col-md-12 mt-3 mb-3">
                      <input type="email" class="form-control input_text" id="validationServer01" placeholder="email" value="" required>
                    </div>    

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="">
                          <option value="lima">Lima, Perú</option>
                          <option value="bogota">Bogotá, Colombia</option>
                          <option value="quito">Quito, Ecuador</option>
                          <option value="bs_as">Buenos Aires, Argentina</option>
                          <option value="la_paz">La Paz, Bolivia</option>

                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>  

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <input type="text" class="form-control input_text" id="validationServer01" placeholder="Región o cuidad" value="" required>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="text" class="form-control input_text" name="titular" id="titular" placeholder="Titular">
                      </div>
                      <img
                          class="icon_info_2"
                          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/info-4@2x.svg"
                      />
                    </div>

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
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  </body>
</html>
