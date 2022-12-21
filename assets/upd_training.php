<?php  

  session_start();
  include_once "../conf/conf.php";

// $_POST["training_name"]
// $_POST["training_instit"]
// $_POST["trai_start_date"]
// $_POST["trai_end_date"]

  $sql = "UPDATE trainings 
          SET training_name='".$_POST["training_name"]."', 
              training_institution='".$_POST["training_instit"]."',
              training_start_date='".$_POST["trai_start_date"]."',
              training_end_date='".$_POST["trai_end_date"]."', 
              id_profile=".$_SESSION["idPosutlante"]."
          WHERE idTraining = " . $_POST["codTrai"];

  $db = $dbh->prepare($sql);
  $db->execute();
  // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);

   // header('Location: ../miperfil.php');



?>