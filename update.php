<?php

include("conexion.php");
$con=conectar();

$name=$_POST['name'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

$sql= "UPDATE `empleados` SET `Id`=NULL,`Nombre`='$name',`apellido`='$apellido',`E-mail`='$email',`Telefono`= '$telefono' WHERE Nombre = '$name'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: empleados.php"); 
    }
?>