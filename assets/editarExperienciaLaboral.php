<?php 

  session_start();
  $_SESSION["idPosutlante"]; 
  include_once "../conf/conf.php";

  $sql = "UPDATE work_experience 
               SET title_work_experience= '".$_POST["titulo"]."',
                   companies='".$_POST["companie"]."',
                   lugar='".$_POST["lugar"]."',
                   descrip_work_experience='".$_POST["descripcion"]."',
                   fec_inicio='".$_POST["fec_ini"]."',
                   fec_fin='".$_POST["fec_fin"]."' WHERE id=".$_POST["idWorkExperience"];

  $db = $dbh->prepare($sql);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

   header('Location: ../miperfil.php');

?>