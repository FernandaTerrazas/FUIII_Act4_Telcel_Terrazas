<?php

include("conexion.php");
$con=conectar();

$name=$_GET['id'];

$sql="DELETE FROM empleados  WHERE Nombre ='$name'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>