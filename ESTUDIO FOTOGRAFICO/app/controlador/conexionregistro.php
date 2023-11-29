<?php
//Importamos la conoxcion;
require_once('controlador/conexion.php');

//Variables
$corre = $_POST['correoU'];
$clave = $_POST['claveU'];
$edad = $_POST['edadU'];
$direccion = $_POST['direccionU'];
$preferencias = $_POST['preferenciasU'];

/* === mensaje === */
echo $correo ."___" . $correo . "<br>";
echo $clave ."____" . $preferencias ; 

/* ==== Codigo SQL - mediante script ==== */
$sql = "INSERT INTO usuario(correo, clave, nombre, edad, direccion, preferencia) VALUES('$correo','$clave','$nombre','$edad','$direccion','$preferencias')";

$resultado = $conexion->query($sql) or die($conexion->connect_error);
if($resultado){
echo "Registro insertado exitosamente.";
}else{
    echo "Error: " . $conexion->error;
}

//Cerramos la conexion, siempre utilizamos esto cada vez que usamos un registro
$conexion->close();
?>