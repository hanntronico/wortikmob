<?php  
	session_start();
  include_once "../conf/conf.php";

  // $sql3 = "UPDATE users SET `password`=md5('".$_POST["nuevo_password"]."') WHERE profile_id=".$_SESSION["idPosutlante"];
  // $sql3 = "UPDATE companies SET email=".." WHERE id = " . $_SESSION["idEmpresa"]; 
  // $db = $dbh->prepare($sql3);
  // $db->execute();

  header('Location: dashboard_empre.php');


	


?>