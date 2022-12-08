<?php 

  session_start();
  include_once "../conf/conf.php";

  $sqlIns = "INSERT INTO work_experience( title_work_experience, companies, lugar, descrip_work_experience, fec_inicio, fec_fin, status_work_experience) 
  				VALUES (
  				'".$_POST["titulo"]."',
  				'".$_POST["companie"]."',
  				'".$_POST["lugar"]."',
  				'".$_POST["descripcion"]."',
  				'".$_POST["fec_ini"]."',
  				'".$_POST["fec_fin"]."',
  				1)";

  $db = $dbh->prepare($sqlIns);
  
  if ($db->execute()) {
		$ultimo_id = $dbh->lastInsertId(); 
	  $sql_Ins_WE = "INSERT INTO `detalle_work_experience`(`id_profile`, `id_work_experience`) 
	  							 VALUES (".$_SESSION["idPosutlante"].",".$ultimo_id.")";
	  $db = $dbh->prepare($sql_Ins_WE);
	  $db->execute();
  }



  header('Location: ../miperfil.php');

?>