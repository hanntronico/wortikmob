<?php 

  session_start();
  $_SESSION["idPosutlante"] = 1; 
  include_once "../conf/conf.php";

  echo $sql = "UPDATE `profiles` SET 
  				`name`= ".$_POST["nombre"].",
  				`surnames`= ".$_POST["apellidos"].",
  				`birthdate`=".$_POST["fec_nac"].",
  				`ubication`=,
  				`sexo`=[value-6],
  				`phone`=[value-7],
  				`email`=[value-8],
  				`doc_id`=[value-9],
  				`localidad`=[value-10],
  				`cv`=[value-11],
  				`position`=[value-12],
  				`image`=[value-13],
  				`created_at`=[value-14],
  				`updated_at`=[value-15] WHERE 1";

  // $db = $dbh->prepare($sql);
  // $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);


?>