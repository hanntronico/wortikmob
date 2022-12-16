<?php 

  session_start();
  include_once "../conf/conf.php";

  $sql = "UPDATE `work_experience` SET `status_work_experience`=0 WHERE id=".$_POST["codExperLab"];

  $db = $dbh->prepare($sql);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);
?>