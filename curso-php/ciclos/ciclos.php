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
       
        
            h1{font-size: 36px;}
    </style>
</head>
<body>
    <div>

    <?php
   
        for($i=1;$i <9;$i++){
      ?>
        <img src="imagen.jpg" alt="">
        <?php
          }
        ?>


    <img src="imagen.jpg" alt="">
    </div>
    <div>

<?php

   while(rand(1,10) !=3){
  ?>
    <img src="imagen.jpg" alt="">
    <?php
      }
    ?>


<img src="imagen.jpg" alt="">
</div>
</body>
</html>
