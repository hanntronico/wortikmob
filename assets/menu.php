<div class="container-center-horizontal">
  <div class="menu-dashboard screen">
      <img
          class="group"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/group@2x.svg"
        />
        <img
          class="close-2-1" id ="btnClose"
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
<!--                 <img
                  class="dashboard-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/dashboard-1@2x.svg"
                /> -->

                <img class="dashboard-1" src="assets/menu/dashboard-1@2x.svg"/>

                <div class="dashboard poppins-medium-malachite-16px">
                  <a href="./dashboard.php">Dashboard</a>
                </div>

              </div>
              <div class="seccin-1">
<!--                 <img
                  class="icon-user"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                /> -->
                <img class="icon-user" src="assets/menu/user--1--1@2x.svg"/>
                <div class="mi-perfil poppins-normal-storm-dust-16px">
                  <a href="../miperfil.php">Mi perfil</a>
                </div>
              </div>

              <div class="seccin-2">
<!--                 <img
                  class="icon-user-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                /> -->
                <img class="icon-user-1" src="assets/menu/Folder 2.svg"/>

                <div class="postulaciones poppins-normal-storm-dust-16px">
                  <a href="./postulaciones.php">Postulaciones</a>
                </div>
              </div>
              <div class="seccin-3">
                <img
                  class="icon-mail"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/mail-1@2x.svg"
                />
                <div class="mensajes poppins-normal-storm-dust-16px">
                 <a href="./mensajes.php">Mensajes</a>
               </div>
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

<!--             <div class="botn-p">
              <img
                class="icon-search"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/search-3@2x.svg"
              />
              <div class="buscar-empleo poppins-medium-white-16px">Buscar empleo</div>
            </div>
          </div> -->

          <button type="button" class="botn-p" onclick="javascript:alert('buscar');">
            <img
                class="icon-search"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/search-3@2x.svg"
              />
            <div class="buscar-empleo poppins-medium-white-16px">Buscar empleo</div>
          </button>


          <ul class="frame-3539">
            
            <li class="name poppins-medium-storm-dust-16px"><?php echo $reg->name . " <br> " . $reg->surnames; ?></li>
            <li class="text_correo poppins-normal-storm-dust-12px">correo@dominio.com</li>
            <li class="mi-cuenta">Mi cuenta</li>
            <li class="cerrar-sesin"><a href="logout.php">Cerrar sesión</a></li>
          </ul>

<!--           <div class="frame-3539" style="border: 1px solid red">
            <div class="correo">
              <div class="name poppins-medium-storm-dust-16px">
                <?php echo $reg->name . " <br> " . $reg->surnames; ?></div>

              <div class="text_correo poppins-normal-storm-dust-12px"><?php echo $reg->email; ?></div>

            </div>
            <div class="frame-3542 poppins-normal-storm-dust-16px">
              <div class="mi-cuenta">Mi cuenta</div>
              <a href="logout.php">
                <div class="cerrar-sesin">Cerrar sesión</div>  
              </a>
              
            </div>
          </div> -->



        </div>

  </div>
</div>

