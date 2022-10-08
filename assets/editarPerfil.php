<?php 

  session_start();
  $_SESSION["idPosutlante"] = 1; 
  include_once "../conf/conf.php";

  $sql = "INSERT INTO `work_experience`(`title_work_experience`, 
                                        `companies`, 
                                        `lugar`, 
                                        `descrip_work_experience`, 
                                        `fec_inicio`, 
                                        `fec_fin`, 
                                        `status_work_experience`) 
          VALUES ('".$_POST["titulo"]."',[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

   header('Location: ../miperfil.php');

?>