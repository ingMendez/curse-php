<?php   

print_r($_GET);

$usuario = $_GET['tipo_usuario'];
$navegador = $_GET['navegador'];

echo "el usuario es " . $usuario;
echo "<br/>" . $navegador;

?>