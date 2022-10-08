<?php  
	session_start();
  $_SESSION["idPosutlante"] = 1; 
  include_once "../conf/conf.php";
	

	echo $_POST["txtResumen"];
  echo "<br>";
  echo $_POST["idSummary"];

  $sql2 = "UPDATE job_summary SET job_summary = '".$_POST["txtResumen"]."' WHERE (id = ".$_POST["idSummary"].")";


  // $sql2 = "INSERT INTO mensajes(asunto_mensaje, mensaje, id_profile, id_recruter, estado_mensaje) 
  // 				 VALUES ('".$_POST["txtAsunto"]."','".$_POST["txtMensaje"]."', 1, 1,1)";

  $db = $dbh->prepare($sql2);
  $db->execute();

  header('Location: ../miperfil.php');


?>