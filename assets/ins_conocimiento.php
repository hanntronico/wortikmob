<?php 

  session_start();
  include_once "../conf/conf.php";

	foreach ($_POST['niveles'] as $key => $value) {
		$nivel = explode("__", $value);
		// $experiencia = explode("__", $_POST['experiencias'][$key]);

	  $sqlIns = "UPDATE detalle_job_knowledges 
	  			  SET nivel=".$nivel[1]." WHERE idJob=".$_POST["codEmp"]." AND idKnowledge=".$nivel[0];		
  	$db = $dbh->prepare($sqlIns);
  	$db->execute();	  			  
	}

	// header('Location: antes_postular_2.php');
	// echo $_POST["codEmp"];

?>