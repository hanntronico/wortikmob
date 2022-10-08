<?php  
	session_start();
  include_once "../conf/conf.php";

  // $sql2 = "INSERT INTO languages(language, status_language) 
  //          VALUES ('".$_POST["optIdiomas"]."',1)";
  // $db = $dbh->prepare($sql2);
  // $db->execute();

  // $ultimo_id = $dbh->lastInsertId();

  $sql_search = "SELECT * FROM detalle_languages 
                 WHERE id_profile = ". $_SESSION["idPosutlante"] . 
                 " AND id_language = " . $_POST["optIdiomas"];
  $db = $dbh->prepare( $sql_search );
  $db->execute();                 

  $sql3 = "INSERT INTO detalle_languages(id_profile, id_language, nivel_language) 
         VALUES (".$_SESSION["idPosutlante"].", ". $_POST["optIdiomas"] .", '".$_POST["nivel-idioma"]."')";
  $db = $dbh->prepare($sql3);
  $db->execute();

  header('Location: ../miperfil.php');


?>