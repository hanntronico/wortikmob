<?php 

  session_start();
  $_SESSION["idPosutlante"]; 
  include_once "../conf/conf.php";

  echo $sql = "INSERT INTO `companies`(`ruc`, `business_name`, `sector`, `size`, `phone`, `address`, `website`, `email`, `description`, `district_id`) VALUES ('".$_POST["txtRuc"]."',
            '".$_POST["txtRazonSocial"]."',
            '".$_POST["txtSector"]."',
            '".$_POST["txtTama"]."',
            '".$_POST["telefono"]."',
            '".$_POST["direccion"]."',
            '".$_POST["txtSitioWeb"]."',
            '".$_POST["txtCorreo"]."',
            '".$_POST["txtDescripcion"]."', 10101)";

  $db = $dbh->prepare($sql);
  $db->execute();
  $data= Array();
  $reg = $db->fetch(PDO::FETCH_OBJ);

   header('Location: inicio_sesion_empresa.php');

?>