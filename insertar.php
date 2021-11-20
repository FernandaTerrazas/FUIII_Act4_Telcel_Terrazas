<?php
include("conexion.php");
$con=conectar();

$name=$_POST['name'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO `empleados`(`Id`, `Nombre`, `Apellido`, `E-mail`, `Telefono`)
VALUES (NULL,'$name','$apellido','$email','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>
