<div class="container-center-horizontal">
  <div class="menu-dashboard screen">
      <img
          class="group"
          src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/group@2x.svg"
        />
        <img
          class="close-2-1" id="btnClose"
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
                <div class="dashboard poppins-medium-malachite-16px">
                  <a href="./assets/dashboard.php">Dashboard</a>
                </div>
              </div>
              <div class="seccin-1">
                <img
                  class="icon-user"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                />
                <div class="mi-perfil poppins-normal-storm-dust-16px">
                  <a href="miperfil.php">Mi perfil</a>
                </div>
              </div>
              <div class="seccin-2">
                <img
                  class="icon-user-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/user--1--1@2x.svg"
                />
                <div class="postulaciones poppins-normal-storm-dust-16px">
                  <a href="./assets/postulaciones.php">Postulaciones</a>
                </div>
              </div>
              <div class="seccin-3">
                <img
                  class="icon-mail"
                  src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/628e2d7a4d7b8199858c9c5f/img/mail-1@2x.svg"
                />
                <div class="mensajes_mnu_izq poppins-normal-storm-dust-16px">Mensajes</div>
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

          <button type="button" class="botn-p" onclick="irEmpleos()">
            <img
                class="icon-search"
                src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/62aa83f4d4ab18fcfd2ee297/img/search-3@2x.svg"
              />
            <div class="buscar-empleo poppins-medium-white-16px">Buscar empleo</div>
          </button>


          <div class="frame-3539">
            <div class="correo">
              <div class="name poppins-medium-storm-dust-16px">
                <?php echo $reg->name . " " . $reg->surnames; ?>
              </div>
              <div class="rodrigo44gmailcom poppins-normal-storm-dust-12px"><?php echo $reg->email; ?></div>
            </div>
            <div class="frame-3542 poppins-normal-storm-dust-16px">
              <div class="mi-cuenta">Mi cuenta</div>
              <div class="cerrar-sesin">Cerrar sesión</div>
            </div>
          </div>
        </div>

  </div>
</div>

<script type="text/javascript">
  
  function irEmpleos() {
    location.href = 'assets/empleos.php';
  }

</script>