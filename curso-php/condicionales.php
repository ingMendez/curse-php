

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
    <div>

    <?php
    $hora = 12;
    if($hora > 6 && $hora <13){  // el && es de anidacion
        echo "<h1>buenos dias>";
    }else{
        echo "<h1>buenas noches>";
    }


?>

    </div>
</body>
</html>

<?php



?>