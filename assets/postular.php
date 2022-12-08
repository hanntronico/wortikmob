<?php 

  session_start();
  include_once "../conf/conf.php";

	foreach ($_POST['preguntas'] as $key => $value) {
		$idPregunta = explode("__", $value);
		$sqlInsAnswer = "INSERT INTO answers(question_id, answer) 
										 VALUES (".$idPregunta[0].",'".$idPregunta[1]."')";
		$db3 = $dbh->prepare($sqlInsAnswer);
  	$db3->execute();
	}

		$sqlJobProfile = "UPDATE jobs_profiles SET job_profile_status=1 WHERE id_job=".$_POST['codEmp']." AND id_profile=".$_POST['codProfile'];
			$db4 = $dbh->prepare($sqlJobProfile);
  	$db4->execute();

?>