<?php 
  session_start();
  include_once "../conf/conf.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <!-- <link rel="stylesheet" type="text/css" href="miperfil.css" /> -->
    <link rel="stylesheet" type="text/css" href="styleguide.css" />
    <link rel="stylesheet" type="text/css" href="globals.css" />
    <link rel="stylesheet" type="text/css" href="dashboard.css" />

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
                    <h1 class="titulo">Aptitudes</h1>
                    <p class="poppins-light-storm-dust-12px" style="text-align: center;">

                     <a href="../miperfil.php" style="text-decoration: none; color:#868686">
                      Mi perfil
                      </a>
                       / 
                      <span style="color: #339698; font-weight: 400; line-height: 130%;">Edición</span></p>
                  </div>
                </div>

                <form style="border: none;">
                  <div class="form-row mt-3">

                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="aptitudes" id="aptitudes">
                          <option value="0">Seleccione una aptitud</option>
                          <option value="Lenguajes y Frameworks">Lenguajes y Frameworks</option>
                          <option value="Bases de Datos">Bases de Datos</option>
                          <option value="Desarrollo móvil">Desarrollo móvil</option>
                          <option value="Librerias">Librerías</option>
                          <option value="Herramientas de diseño">Herramientas de diseño</option>
                          <option value="Sistemas Opertaivos">Sistemas Opertaivos</option>
                          <option value="DevOps">DevOps</option>
                          <option value="Métodologias de trabajo">Métodologias de trabajo</option>
                          <option value="Otros">Otros</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="busqueda col-12 col-md-12 mb-4">
                      <input type="text" class="txt_busqueda" placeholder="Buscar aptitud" name="" id="buscar">
                      <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 15.5C11.866 15.5 15 12.366 15 8.5C15 4.63401 11.866 1.5 8 1.5C4.13401 1.5 1 4.63401 1 8.5C1 12.366 4.13401 15.5 8 15.5Z" stroke="#339698" stroke-width="2" stroke-linecap="round"/>
                        <path d="M13 14.5L16 17.5" stroke="#339698" stroke-width="2" stroke-linecap="round"/>
                      </svg>
                    </div>


                    <div class="col-12 col-md-12 mb-4">
                      <div class="select_frame">
                        <select class="form-control select_input" name="aptitudes" id="aptitudesNivel">
                          <option value="0">Seleccione nivel</option>
                          <option value="Básico">Básico</option>
                          <option value="Intermedio">Intermedio</option>
                          <option value="Avanzado">Avanzado</option>
                          <option value="Experto">Experto</option>
                        </select>
                        <img
                        class="chevron-down-1"
                        src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/629768465aeed9a731c2eb83/img/chevron-down-1@2x.svg"
                      />
                      </div>
                    </div>

                    <div class="col-12 col-md-12 mt-2 mb-4">
                      <button type="submit" class="btn btn-primary btn-lg|btn-sm" id="agregar"
                      style="color: #339698; border: none; border-radius: 16px; background: #F5F5F5; font-size: 13px; font-weight: 500; padding: 12px 16px;">
                      Agregar
                    </button>
                    </div>

                  </div>



                  <div class="form-row mt-2">
                    
                    <div class="col-12 col-md-12 mb-4" id="contenedor">
                     <span class=""
                     style="color: #9F9F9F; font-size: 12px; font-weight: 400;" id="resultado">
                     Aún no se ha agregado nada.
                    </span> 
                    </div>

                  </div>

                  
                </form>
                <div class="col-12 col-md-12 mt-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg|btn-sm"
                     style="border: none; border-radius: 16px; background: linear-gradient(270deg, #339698 0%, #83C389 100%); font-size: 12px; padding: 8px 24px;">
                     Guardar
                    </button>
                  </div>

              </div>

          </div>
        </div>
      </div>
    </div>
    <style>
      .etiqueta{
        background: #F5F5F5;
        padding: 9px;
        border-radius: 18px;
        margin-right: 12px;
        display: inline-block;
        margin-top: 12px;
      }
    .colorTexto{
      color: #339698;
    }
    .autocomplete-items {
      position: absolute;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      top: 100%;
      left: 0;
      right: 0;
    }
    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #F5F5F5;
      border-bottom: 1px solid #d4d4d4;
    }

    .btnEliminar{
      font-size: 14px;
      margin-left: 5px;
      font-weight: 500;
      color: #339698;
    }

    </style>
    <script>
      window.onload = function() {
        window.datos = [];
      } 

      document.getElementById('agregar').addEventListener('click',function(e){
        e.preventDefault();
        let selectLenguaje = document.getElementById ('aptitudes').value;
        let selectNivel = document.getElementById ('aptitudesNivel').value;
        let buscarLenguaje = document.getElementById ('buscar').value;
        let barra = '/';
       
        if (selectLenguaje == null || selectLenguaje == 0 ){
         return false;
        }
 
        if( buscarLenguaje == null || buscarLenguaje.length == 0 || /^\s+$/.test(buscarLenguaje ) ) {
            return false;
         }
 
         if (selectNivel == null || selectNivel == 0 ){
         return false;
        }
       
        let colorSelectNivel = '<span class ="colorTexto">' + selectNivel + '</span>'
        let colorBarra = '<span class ="colorTexto">' + barra + '</span>'
        let btnEliminar = '<span class="btnEliminar">X</span>';
        let resultadoValor = buscarLenguaje  + colorBarra + colorSelectNivel + " " + btnEliminar;

      

        
        datos.push(resultadoValor);

        mostraInfo();
        limpiarCampos();
        eliminarEtiqueta();

      });
      function eliminarEtiqueta(){

        if ($('.btnEliminar').length) {

          $('.btnEliminar').on("click", function(e){
          e.preventDefault();
          console.log(datos.indexOf());
        });
        }

      }

      function mostraInfo() {
        let resultado = document.getElementById('contenedor');

        resultado.innerHTML = '';

        let selectLenguaje = document.getElementById ('aptitudes').value;

        for (const dato of datos) {
          let titulo = document.createElement('p');
      
            titulo.innerHTML = selectLenguaje;

          let valor = document.createElement('span');
          valor.innerHTML = dato;

          valor.classList.add("etiqueta");

          resultado.appendChild(titulo);
          resultado.appendChild(valor);

        }
      }

      function limpiarCampos(){
        $('#aptitudes')[0].selectedIndex = 0;
        $('#aptitudesNivel')[0].selectedIndex = 0;
        $('#buscar').val('');
      }
      
      // Autocompletado input buscar

      function autocomplete(inp, arr) {
        var currentFocus;
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            closeAllLists();

            if (!val) { return false;}
            currentFocus = -1;

            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");

            this.parentNode.appendChild(a);
            
            for (i = 0; i < arr.length; i++) {

              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                b = document.createElement("DIV");

                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);

                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                b.addEventListener("click", function(e) {

                  inp.value = this.getElementsByTagName("input")[0].value;

                  closeAllLists();
                });
                a.appendChild(b);
              }
            }
        });

        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {

              currentFocus++;

              addActive(x);
            } else if (e.keyCode == 38) { 

              currentFocus--;

              addActive(x);
            } else if (e.keyCode == 13) {

              e.preventDefault();
              if (currentFocus > -1) {

                if (x) x[currentFocus].click();
              }
            }
        });
        function addActive(x) {

          if (!x) return false;

          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);

          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {

          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {

          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }

        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
      }

      var lenguajes = ["JAVA","PHP","javascript","C#","Kotlin","Swift","Phyton","MySQL","PostgreSQL","Microsoft SQL Server",
      "Oracle","MongoDB","Angular","Laravel","Xamarin","Jquery"," Mootols","Chart.js","MathJS","matplotlib","Numpy",
      "Pandas","iostream","cstring","PHPUnit","Twig","Oauth 2.0","Symfony Console Component","Psr/log","Figma",
      "Balsamiq","Sketch"," Microsoft Windows","UNIX","Linux","MAC OS","iOS","Android","Solaris","Microsoft Azure",
      "Metodología Scrum","Metodología Kanban","Metodología Scrumban","Metodología Six Sigma"];


      autocomplete(document.getElementById("buscar"), lenguajes);
          
    </script>

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

  </body>
</html>
