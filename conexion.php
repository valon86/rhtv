<?php 

$server ="localhost";
$user ="root";
$db ="rrhh_tv";
$password="";

$connect = mysql_connect($server, $user, $password, $db);

if(!$connect){
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>