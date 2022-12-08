<?php  

  session_start();
  $_SESSION["idPosutlante"]; 
  include_once "../conf/conf.php";

  $sql = "UPDATE specializations 
  				SET name=[value-2],place=[value-3],start_date=[value-4],end_date=[value-5],category_id=[value-6] WHERE id=".  ;

  $db = $dbh->prepare($sql);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

   header('Location: ../miperfil.php');

?>