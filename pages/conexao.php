<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$dbserver = "db773957428.hosting-data.io";
$dbname = "db773957428";
$dbuser = "dbo773957428";
$dbpass = "Aguia019$$$";


$conecta = mysqli_connect($dbserver, $dbuser, $dbpass);
mysqli_select_db($conecta, $dbname) or die("Erro ao conectar com o banco de dados!");
?>