<?php

// aqui debes de decirle a que url nos vamos a conectar
$servidor = "localhost";
$usernamme = "root";
$password = "root";

/// esta es la conexion para hacer las llamadas a la base de datos.
$conexion = new mysqli($servidor, $usernamme, $password);

if($conexion -> connect_error){
    die("conexion fallida:" .$colexion-> connect_error);
}else{
    die("conexion exitosa!!");
}




?>