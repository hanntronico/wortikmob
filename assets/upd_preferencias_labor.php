<?php  

  session_start();
  $_SESSION["idPosutlante"]; 
  include_once "../conf/conf.php";

  $sql = "UPDATE job_preferences 
  				SET situation=".$_POST["situation"].", 
  						desired_job='".json_encode($_POST["desired_job"])."',
  						area=".$_POST["area"].",
  						seniority=".$_POST["seniority"].",
  						min_salary='".$_POST["minSalary"]."',
  						currency=".$_POST["moneda"]." 
  				WHERE idProfile=" . $_SESSION["idPosutlante"];

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

   // header('Location: ../miperfil.php');



?>