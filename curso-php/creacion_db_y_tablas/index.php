<?php

// aqui debes de decirle a que url nos vamos a conectar
$servidor = "localhost";
$usernamme = "root";
$password = "root";
$db = "todolist";


$conexion = new mysqli($servidor, $usernamme, $password, $db);

if($conexion -> connect_error){
    die("conexion fallida:" .$colexion-> connect_error);
}else{
    // con esta sentencia creamos la base de datos.
  /* $sql ="CREATE DATABASE todolist";
   if($conexion ->query($sql) === true){   /// el triple igual "===" es por que quetemos evaluar el tipo de valor y el valor en si mismo.
    echo "base de datos creada";
   }else{
       die("error al crear base de datos" . $conexion->error);
   }*/
/// crear tabla en base de datos desde php
$sql = "CREATE TABLE todoTable(

    id INT AUTO_INCREMENT PRIMARY KEY,
     texto VARCHAR(100) NOT NULL,
     completado BOOLEAN NOT NULL,
     timestamp TIMESTAMP
)";
    if($conexion-> query($sql) === true ){
        echo "la tabla se creo correctamente...";
    }else{
        die("error al crear tabla" . $conexion->error);
    }
}




?>