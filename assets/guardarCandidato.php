<?php 

  session_start();
  include_once "../conf/conf.php";
  $sql = "INSERT INTO profiles(name, 
                               surnames, 
                               email) 
               VALUES ('".$_POST["txtNombre"]."','".$_POST["txtApellidos"]."','".$_POST["txtCorreo"]."')";
  $db = $dbh->prepare($sql);
  $result = $db->execute();

  if($result){
    $ultimo_id = $dbh->lastInsertId();
    $sql_user = "INSERT INTO users(name, email, password, profile_id) 
                VALUES ('".$_POST["txtNombre"]." ".$_POST["txtApellidos"]."','".$_POST["txtCorreo"]."','".MD5($_POST["txtContrasena"])."', ".$ultimo_id.")";
    $db = $dbh->prepare($sql_user);
    $result2 = $db->execute();
    

    $sql_job_sumary = "INSERT INTO job_summary(status_job_summary) VALUES (1)";
    $db = $dbh->prepare($sql_job_sumary);
    $result_sunmary = $db->execute();

    $ultimo_summary_id = $dbh->lastInsertId();

    $sql_upd_job_sumary = "UPDATE profiles SET id_job_summary=".$ultimo_summary_id." WHERE id=".$ultimo_id;
    $db = $dbh->prepare($sql_upd_job_sumary);
    $result_ups_sunmary = $db->execute();
    
    echo $result2;
  }
?>