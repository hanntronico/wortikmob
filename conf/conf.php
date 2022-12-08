<?php  

error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set('America/Peru');
setlocale(LC_TIME, "es_ES");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '*274053*'); // pon la clave del root de tu phpmyadmin no tengo
define('DB_NAME', 'bdwortika');
// define('ENLACE_SERVIDOR', 'C:/xampp/htdocs/wortikmob/');
define('ENLACE_SERVIDOR', 'C:/laragon/www/wortikmob/');
define('ENLACE_WEB', 'http://127.0.0.1/wortikamob/');
define('BOOTSTRAP', 'http://127.0.0.1/wortikamob/bootstrap/');
define('PROY_TITULO', 'WORTIKA');


$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8', DB_USERNAME, DB_PASSWORD, array(
    PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
));

$dddd = "hanntronico";

function obtenerMoneda($idMoneda)
{
		$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8', DB_USERNAME, DB_PASSWORD, array(
		    PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
		));
    $sqlCurr = "SELECT idCurrency, currency, currency_code 
                FROM currencies 
                WHERE idCurrency=".$idMoneda;
    $dbCurr = $dbh->prepare($sqlCurr);
    $dbCurr->execute();
    $regCurrency= $dbCurr->fetch(PDO::FETCH_OBJ);    
    return $regCurrency->currency_code;


}

?>

