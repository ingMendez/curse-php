<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fechas</title>
    <style>
        body{
            background: #5276af;
         height: 100%;
        }
        #container{
            background: white;
            margin: 100px auto;
            padding: 100px;
            text-align: center;}
        
    </style>
</head>
<body>
    <div id="container">
        <?php  /// trabajando con la fecha y arreglos.
$mes = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
          echo "Fecha:" . date("l")."/ ". $mes[date("m")-1]. "/". date("y"). "<br>"; 
          echo "son las:". date("h:i:sa");
          
          ?>
   
    </div>
</body>
</html>