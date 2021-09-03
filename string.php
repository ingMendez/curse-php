<?php
// funciones para strings.
$mensaje = "hoy voy a aprender mucho";



 echo "<br>";
// longitud
//echo strlen(string:);
echo strlen($mensaje);
echo "<br>";
// numero de palabras de texto.
echo str_word_count($mensaje);
 
echo "<br>";
// revertir el texto de derecha a izquierda.
echo strrev($mensaje);
echo "<br>";
// encontrar texto
echo "<br>";

echo strpos($mensaje,"aprender");
echo "<br>";

// remplazar testo 


echo str_replace("aprender", "nadar" ,"$mensaje");
echo "<br>";

// convertir a minusculas
echo "<br>";
	//Convertir a minúsculas
	echo strtolower($mensaje);	

	echo "<br>";
	//Convertir a mayúsculas
	echo strtoupper($mensaje);

    echo "<br>";
	//Substraer cadena
	echo substr($mensaje, 10, 7);

echo "<br>";
	//Remover espacios en blanco
	echo trim("        hola     soy      Marcos");





?>