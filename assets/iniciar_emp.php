<?php  

	include_once "../conf/conf.php";

	echo $sql_companies = "SELECT count(*) as total 
												 FROM companies 
												 WHERE email = '".$_POST["txtUsuario"]."'";
	$db = $dbh->prepare($sql_companies);
	$db->execute();
	$regUsers = $db->fetch(PDO::FETCH_OBJ);

if ($regUsers->total > 0) {

			echo $sql22 = "SELECT * FROM companies WHERE email = '".$_POST["txtUsuario"]."'";

			$db = $dbh->prepare($sql22);
			$db->execute();

			$regUsers_data = $db->fetch(PDO::FETCH_OBJ);

	session_start();
	$_SESSION["idEmpresa"] = $regUsers_data->id;
	$_SESSION["nomEmpresa"] = $regUsers_data->business_name;

	header('Location: dashboard_empre.php');
}else{

	echo "no companies";
}



 //  $sql2 = "SELECT count(*) as total, users.id FROM users WHERE email = '".$_POST["txtUsuario"]."' AND password = MD5('".$_POST["txtPassword"]."')";
 //  $db = $dbh->prepare($sql2);
 //  $db->execute();

	// $regUsers = $db->fetch(PDO::FETCH_OBJ);

	// if ($regUsers->total == 1) {

	// 		$sql2 = "SELECT 
	// 							U.id, U.email, P.name, P.surnames
	// 						 FROM users U INNER JOIN profiles P
	// 						 ON U.profile_id = P.id
	// 						 WHERE U.email = '".$_POST["txtUsuario"]."' 
	// 						 AND U.password = MD5('".$_POST["txtPassword"]."')";

	// 		$db = $dbh->prepare($sql2);
	// 		$db->execute();

	// 		$regUsers_data = $db->fetch(PDO::FETCH_OBJ);


	// 		session_start();
 //  		// $_SESSION["idPosutlante"] = $regUsers->id;
 //  		$_SESSION["idPosutlante"] = $regUsers_data->id;
 //  		$_SESSION["nombre_postulante"] = $regUsers_data->name;
 //  		$_SESSION["apellidos_postulante"] = $regUsers_data->surnames;
 //  		$_SESSION["email_postulante"] = $regUsers_data->email;

	// 		header('Location: dashboard.php');
	// }else{
	// 	header('Location: inicio_sesion.php');
	// }

	
?>