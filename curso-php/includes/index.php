<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes y requiere</title>
    <style>
        #container{width: 500px; margin: 150px auto;}
        #footer{background-color:#222; padding: 10px; color: white;}
        #menu{background-color: #eee;padding: 10px;}
    </style>
</head>
<body>
    <div id="container">
        <?php
             include("menu.php");  //  el include nos da la ventsja que solo falla el fragmeto que esta malo luego lo demas sigue igual 
        ?>
        <h3>contenido principal</h3>
        <?php
             require("footer.php"); // el require avisa un error fatal y no permite ver el otro contenido. este se utiliza cuando el archivo que esta haciendo referencia tiene que esistir oblicatoriamente.
        ?>

    </div>
</body>
</html>