<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <style>

        body{
            font-family: Arial;
            background: #BDE85F;
        }
        div{
            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 200px;
        }
            h1{font-size: 36px;}
    </style>
</head>
<body>
    <?php
    $frutas = array("platanos","manzana","uvas","fresas");
    print_r($frutas);
    echo $frutas[1];

    echo "<br/>";
    echo count($frutas) . "elementos" ;
    echo "<br/>";

        for($i=0;$i< count($frutas); $i++){      // iretar en los arreglos para recorerlos e imprimirlos 

            echo $frutas[$i] . "<br/>";
        }

        //otra forma de decharararreglos
        $edades = array("Marcos" => 34, "Tania" => 23, "Omar" => 27);    // => sorve para asignar un valor

		print_r($edades);

		echo "<br >";

		echo $edades['Tania'];

		echo "<br >";


		foreach($edades as $key => $value){ // el foreach se utiliza para los arreglos asociativos osea objetos con valores
			echo $key . " tiene el valor de " . $value . "<br />";
		}
    ?>
    <div>


    
    </div>

</body  >
</html>

<?php



?>