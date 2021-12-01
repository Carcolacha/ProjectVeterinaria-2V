<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$control=$_POST['control'];
$telefono=$_POST['telefono'];
$CURP=$_POST['CURP'];

$sql="UPDATE `empleados` SET `id`='$id',`nombre`='$nombre',`control`='$control',`telefono`='$telefono',`CURP`='$CURP' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>