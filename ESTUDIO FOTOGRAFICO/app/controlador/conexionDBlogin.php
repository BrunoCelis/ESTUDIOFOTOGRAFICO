<?php
require_once('../../config/conexion.php');

$correo = $_POST['correo'];
$clave = $_POST['clave'];

//echo $correo . "____" .$clave;

//Consultemos al usuario mediante un "scrip" a la base de datos
$sql = "SELECT * FROM usuario";
$resultado = $conexion->query($sql);

//Esto es una condicional donde nos brinda los numero de mi tablas registradas 
if($resultado->num_rows > 0){
   // echo "Las filas devueltas son" .$resultado->num_rows;
}

//Consultamos todos los datos y mostramos mediante una ARRA ASOCIATIVO
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
{
    //print_r($row);
    if($row['correo'] == $correo && $row['clave'] == $clave ){

        $encontrados = 1;
        session_start();
        $_SESSION['datos'] = $row;
        break;
    }else{
        $encontrados = 0;
    }
}
######
/* Hacemos una condicional preguntando si "encontrados" es 1 o 0, si es 1 nos
redireccione a la pagina correcta, pero si es "0" nos vuelva a pedir nuestro usuario o
clave */

if($encontrados == 1){
$ruta = 'Location: ../p_principal.php';
    header($ruta);
}else{
$ruta = 'Location: ../index.php';
    header($ruta);
}
?>