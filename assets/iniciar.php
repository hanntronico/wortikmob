<?php  

	include_once "../conf/conf.php";
	
  echo $sql2 = "SELECT count(*) as total, users.id FROM users WHERE email = '".$_POST["txtUsuario"]."' AND password = MD5('".$_POST["txtPassword"]."')";
  $db = $dbh->prepare($sql2);
  $db->execute();

	$regUsers = $db->fetch(PDO::FETCH_OBJ);

	if ($regUsers->total == 1) {
			session_start();
  		$_SESSION["idPosutlante"] = $regUsers->id; 
			header('Location: dashboard.php');
	}else{
		header('Location: inicio_sesion.php');
	}

	
?>