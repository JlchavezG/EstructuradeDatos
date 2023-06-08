<?php 
// conexion a la base de datos para extrar y manipular los tipos de datos 
$servidor = "localhost";
$Usuario = "root";
$Password = "";
$Bd = "UhabCoapa";
$conecta = mysqli_connect($servidor, $Usuario, $Password, $Bd);
if($conecta->connect_errno){
    die("Error al conectar la base de datos".$conecta->connect_errno);
}

?>