<?php  
  session_start();
  include_once "../conf/conf.php";

  $sql = "SELECT id,
                 name,
                 surnames,
                 birthdate,
                 ubication,
                 sexo,
                 phone,
                 email,
                 doc_id,
                 localidad,
                 cv,
                 position,
                 image
          FROM profiles
          WHERE id = " . $_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <link rel="stylesheet" type="text/css" href="registro_candidato.css" />
    <!-- <link rel="stylesheet" type="text/css" href="miperfil.css" /> -->
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

<!--   <aside class="main-sidebar sidebar-light-primary elevation-4" >
    <div class="sidebar">
      <?php //include 'menu.php' ?>
    </div>
  </aside> -->




    <input type="hidden" id="anPageName" name="page" value="dashboard" />


<!--           <div style="display: flex; justify-content: center; align-content: center; border: 1px solid green; padding: 18px 0px;">

              <img src="img/logo_wortika_verde_titulo@2x.svg" style="height: 24px; width: 118px;">

          </div> -->




     <div class="container-center-horizontal">
      <div class="dashboard screen">
        <div class="overlap-group4"> 



          <div class="barra_superior">
              <img src="img/logo_wortika_verde_titulo@2x.svg" style="height: 24px; width: 118px;">
          </div>

          
          <div class="frame-3553">
              <div class="main-frame">
                <div class="row" style="border: none; margin: 0px auto; padding: 0px; width: 100%; ">
                  <div class="col-md-12">
                    <h1 class="titulo">Registro de candidato</h1>

                    <p class="poppins-light-storm-dust-12px" style="text-align: center;">Crea una cuenta en Wortika en segundos 
                    </p>
                  </div>
                </div>

                <form style="border: none;" id="frmRegistroCandidato" method="POST" autocomplete="off">
                  <div class="form-row mt-3">
                    <div class="col-12 col-md-12 mb-4">
                      <input type="text" class="form-control input_text" name="txtNombre" id="txtNombre" placeholder="Nombre" value="" required>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                      <input type="text" class="form-control input_text" name="txtApellidos" id="txtApellidos" placeholder="Apellidos" value="" required>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <input type="text" class="form-control input_text" name="txtCorreo" id="txtCorreo" autocomplete="off" placeholder="Email" required>
                      </div>
                    </div>

                    <div class="row ml-1 mr-2 mb-4" style="width: 100% !important; border-bottom: 1px solid #b8b8b8 !important; padding-bottom: 10px !important;">
     

                      <div class="col-10 col-md-10 pl-0">
                        <div class="select_frame">
                          <input type="password" class="form-control input_text2" name="txtContrasena" id="txtContrasena" autocomplete="off" placeholder="Contraseña" required>
                        </div>
                      </div>

                      <div class="col-1 col-md-1 pt-2 ml-3">
                          <a href="javascript:;" onclick="togglePasswordInput(1)">
                            <img src="img/eye.svg" />
                          </a>
                      </div>
                    </div>


                  <div class="row ml-1 mr-2 mb-4" style="width: 100% !important; border-bottom: 1px solid #b8b8b8 !important; padding-bottom: 10px !important;">
  

                    <div class="col-10 col-md-10 pl-0">
                      <div class="select_frame">
                        <input type="password" class="form-control input_text2" name="txtContrasena2" id="txtContrasena2" autocomplete="off" placeholder="Confirmar contraseña" required>
                      </div>
                    </div>  

                    <div class="col-1 col-md-1 pt-2 ml-3">
                      <a href="javascript:;" onclick="togglePasswordInput(2)">
                            <img src="img/eye.svg" />
                      </a>
                    </div>

                  </div>


                    

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">

                        <div class="row">
                          <div class="col-2" style="text-align: center;">
                              <input type="radio" id="terminosycond" name="terminosycond" value="1" style="border: 1px solid #339698 !important; color: #339698 !important;">
                          </div>
                          <div class="col-10" style="text-align: left;">
                              <label for="terminosycond" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 130%;">Acepto los <a href="javascript: alert('terminos');"  style="color: #339698;">términos y condiciones</a> del uso del sistema y la <span style="color: #339698;">política de privacidad.</span></label>
                          </div>
                        </div>

                      </div>
                    </div>


                  </div>

                  <div class="form-row mt-2">
                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <button type="submit" class="btn btn-primary btn-lg|btn-sm" style="border: none; border-radius: 16px; background: linear-gradient(270deg, #339698 0%, #83C389 100%); font-size: 12px; padding: 8px 24px;">¡Crear Cuenta!</button>
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

    <script type="text/javascript">
      function togglePasswordInput(valPass) {

        if(valPass==1){
          var input = document.getElementById('txtContrasena');
        }else if (valPass==2) {
          var input = document.getElementById('txtContrasena2');
        }
        

        if (input.type === 'text') {
          input.type = 'password';
        } else {
          input.type = 'text';
        }
      }

      function accionaMenu() {
        var menu = document.getElementById('menu-container');
        if (menu.style.display === 'block') {
          menu.style.display = 'none';
        } else {
          menu.style.display = 'block';
        }      
      }

      $( "#frmRegistroCandidato" ).submit(function( event ) {
        event.preventDefault();

        if ( $("#txtContrasena").val() == $("#txtContrasena2").val() ) {

          const terminosycond = document.getElementById('terminosycond');

          if (terminosycond.checked) {
            console.log('terminosycond 1 seleccionada');

            $.ajax({
              url: 'guardarCandidato.php',
              type: 'POST',
              data: {
                txtNombre: $("#txtNombre").val(),
                txtApellidos: $("#txtApellidos").val(),
                txtCorreo: $("#txtCorreo").val(),
                txtContrasena: $("#txtContrasena").val()
              },
            })
            .done(function(data) {
              console.log(data);
    
              // Swal.fire({
              //   position: 'top',
              //   icon: 'success',
              //   title: 'Your work has been saved',
              //   showConfirmButton: true,
              //   timer: 1800
              // })

              Swal.fire({
                title: 'Usuario candidato creado con éxito!',
                position: 'top',
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#339698',
              }).then((result) => {
                if (result.isConfirmed) {
                  location.href = "inicio_sesion.php";
                } else if (result.isDenied) {
                  Swal.fire('Changes are not saved', '', 'info')
                }
              })



              // location.href = "inicio_sesion.php";
            
            })
            .fail(function() {
              console.log("error");
            })
            // .always(function() {
            //   console.log("complete");
            // });
            


          }else{

            const Toast = Swal.mixin({
              toast: true,
              position: 'top',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: false,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'error',
              title: 'Debe aceptar terminos y condiciones.'
            })

          }


        }else{

          // Swal.fire({
          //   position: 'top',
          //   icon: 'success',
          //   title: 'Your work has been saved',
          //   showConfirmButton: false,
          //   timer: 1800
          // })

// Swal.fire({
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   icon: 'warning',
//   position: 'top',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
// }).then((result) => {
//   if (result.isConfirmed) {
//     Swal.fire(
//       'Deleted!',
//       'Your file has been deleted.',
//       'success'
//     )
//   }
// })


          const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: false,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'error',
            title: 'La contraseña de verificación no coincide.'
          })

        }
        // alert( "Handler for .submit() called." );
      });

    </script>

  </body>
</html>
