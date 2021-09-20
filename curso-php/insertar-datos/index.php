<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar datos</title>
</head>
<body>
    <!--crearemos una caje de testo -->
    <form action="index.php" method="POST">
    <input type="text" name="texto" id="texto">
    <input type="submit" value="añadir pendiente">

    </form>

    <div id="todolist">
        <!-- conexion -->
        <?php
            $servidor = "localhost";
            $usernamme = "root";
            $password = "root";
            $db = "todolist";
            
            
            $conexion = new mysqli($servidor, $usernamme, $password, $db);
            
            if($conexion -> connect_error){
                die("conexion fallida:" .$conexion-> connect_error);
            }
            // validacion de datos para agregar
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                ///echo $texto;  ////insertar datos
                $sql = "INSERT INTO todotable(texto,completado)  
                                    VALUE('$texto', false )";
                if($conexion->query($sql)=== true){
                //   echo '<div><form action=""><input type="checkbox">' .$texto. '</form></div>';

                }else{
                    die("error al insertar datos". $conexion->error);
                }  
            // $conexion->close();
            }else{
                if(isset($_POST['completar'])){
                    $id = $_POST['completar'];
                    $sql = "UPDATE todotable SET completado= 1 WHERE id = $id";
                    
                    if($conexion->query($sql) === true){

                    }else{
                        die("error al actualizar datos". $conexion->error);
                    }
                
                }else if(isset($_POST['eliminar'])){
                    $id = $_POST['eliminar'];
                    $sql = "DELETE FROM todotable WHERE id = $id";
                    if($conexion->query($sql) === true){

                    }else{
                        die("error al actualizar datos". $conexion->error);
                    }
                }
            }
            /// obtener los datos de la tabla 
            $sql = "SELECT * FROM todotable where completado =0 ";
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){ // aqui validarmos si la consulta se hizo mal o si no hay datos

            // echo $resultado->num_rows;
            //assert($resultado);  // si no presneta nada el documento es complejo y se necesita recorrerlo.
            while($row = $resultado->fetch_assoc()){   // la funcion featch_assoc() permite obtener el volcado de datso
            
                        //var_dump($row);// lo imprime todo 
           ?> 
           <div>
                <form method="POST" id="form<?php echo $row['id']?>" action=""> <!-- con mi id puedo mapear los elementos-->
                    <input name="completar" value="<?php echo $row['id']?> " id="<?php echo $row['id']?>" type="checkbox" onchange="completarpendiente(this)"><?php echo $row['texto'];?>  <!-- hace la referencia que va a pasar el metodo check-->
                </form>
                <form method="POST" id="form_eliminar<?php echo $row['id']?>" action="index.php">
                <input type="hidden" name="eliminar" value="<?php echo $row['id']?>">
 
                <input type="submit" value="eliminar">

                </form>
            </div>
           <?php
                //  echo '<div><form action=""><input type="checkbox">' .$row['texto']. '</form></div>';
            }
         }   

         $conexion->close();
        ?>
    </div>
    <script>
        function completarpendiente(e){
            var id = "form" + e.id;
            var formulario = document.getElementById(id)
            formulario.submit();
            // console.log(id);
        }

    </script>

</body>
</html>