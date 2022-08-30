<?php  
	session_start();
  $_SESSION["idPosutlante"] = 1; 
  include_once "../conf/conf.php";
	

	echo $_POST["txtAsunto"];
	echo $_POST["txtMensaje"];

  $sql2 = "INSERT INTO mensajes(asunto_mensaje, mensaje, id_profile, id_recruter, estado_mensaje) 
  				 VALUES ('".$_POST["txtAsunto"]."','".$_POST["txtMensaje"]."', 1, 1,1)";

  $db = $dbh->prepare($sql2);
  $db->execute();

  header('Location: mensajes.php');


?>