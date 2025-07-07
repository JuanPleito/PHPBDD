<?php
define("DB_HOST", "localhost");
define("DB_NOMBRE", "seneca");
define("DB_USUARIO", "seneca");
define("DB_PASSWORD", '1234'); 
//iniciar sesion en PHP
session_start();




//CONECTAR la base de datos

$conexion = mysqli_connect(DB_HOST, DB_USUARIO, DB_PASSWORD,  DB_NOMBRE );
//or die("No se puede conectar al servidor");
if (!$conexion){

    echo "<h3> No se ha posido conectar al servidor </h3>";
    return;

} else {

    echo "<h3> Conexion Establecida correctamente </h3>";
}
?>