<?php 

  session_start();
  $_SESSION["idPosutlante"]; 
  include_once "../conf/conf.php";

  $sql = "UPDATE `profiles` 
          SET `name`=[value-2],
              `surnames`=[value-3],
              `birthdate`=[value-4],
              `ubication`=[value-5],
              `sexo`=[value-6],
              `phone`=[value-7],
              `email`=[value-8],
              `doc_id`=[value-9],`localidad`=[value-10],`cv`=[value-11],`position`=[value-12],`image`=[value-13],`id_job_summary`=[value-14],`created_at`=[value-15],`updated_at`=[value-16] WHERE id=".$_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

   header('Location: ../miperfil.php');

?>