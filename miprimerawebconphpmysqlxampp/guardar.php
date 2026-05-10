<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$curso = $_POST['curso'];

$sql = "INSERT INTO estudiantes (nombre, correo, curso)
        VALUE ('$nombre', '$correo', '$curso')";

if (mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
} else{
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}
?>