<?php  
  session_start();
  include_once "../conf/conf.php";

  $sqlJobPref = "SELECT idTraining, 
                        training_name, 
                        training_institution, 
                        training_start_date, 
                        training_end_date, 
                        training_status 
                 FROM trainings 
                 WHERE idTraining = " . $_GET["idTrai"];

  $db = $dbh->prepare($sqlJobPref);
  $db->execute();
  $data= Array();
  $regTraining = $db->fetch(PDO::FETCH_OBJ);

  // $regJobPref = $db->fetch(PDO::FETCH_OBJ);
  // $regJobPref = $db->fetchAll(PDO::FETCH_ASSOC);
  //$regJobPref = $db->fetchAll();
  // echo $regJobPref[0]["training_name"];
  // foreach ($regJobPref as $key => $value) {
  //   echo $value["training_institution"]."<br>";
  // }

  

?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <style type="text/css">
      .span-green {
          color: #339698;
      }
      
      .lista-aptitudes {
        font-size: 14px;
        width: 120%;
      }      
    </style>


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
                    <h1 class="titulo">Cursos y certificaciones</h1>
                    <p class="poppins-light-storm-dust-12px" style="text-align: center;"><a href="../miperfil.php" style="text-decoration: none; color:#616161">
                      Mi perfil
                      </a> / 
                      <span style="color: #339698; font-weight: 400; line-height: 130%;">Edición</span></p>
                  </div>
                </div>

                <form style="border: none;" id="frmCursoCertif" method="POST">
                  <div class="form-row mt-3">

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="text" class="form-control input_text" name="training_name" id="training_name" value="<?php echo $regTraining->training_name;?>">
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="text" class="form-control input_text" name="training_instit" id="training_instit" value="<?php echo $regTraining->training_institution;?>">
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="date" class="form-control input_text" name="trai_start_date" id="trai_start_date" value="<?php echo $regTraining->training_start_date;?>">
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <div class="select_frame">
                        <input type="date" class="form-control input_text" name="trai_end_date" id="trai_end_date" value="<?php echo $regTraining->training_end_date;?>">
                      </div>
                    </div>







                  </div>

                  <div class="form-row mt-2">
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
    <!-- <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <script src="menu/plugins/jquery/jquery.min.js"></script>
    <script src="menu/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {
        
          

      });




      $( "#frmCursoCertif" ).submit(function( event ) {
        event.preventDefault();

        $.ajax({
          url: 'upd_training.php',
          type: 'POST',
          data: {codTrai: '<?php echo $_GET["idTrai"]; ?>', 
                 training_name: $("#training_name").val(),
                 training_instit: $("#training_instit").val(),
                 trai_start_date: $("#trai_start_date").val(),
                 trai_end_date: $("#trai_end_date").val(),
               },
        })
        .done(function(data) {
          // console.log(data);
          location.href="../miperfil.php";
          // location.href="antes_postular_conoc.php?idemp="+$("#codJob").val();
        })
        .fail(function() {
          console.log("error");
        })


      });      

    </script>

  </body>
</html>
