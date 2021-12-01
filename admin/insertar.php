<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$control=$_POST['control'];
$telefono=$_POST['telefono'];
$CURP=$_POST['CURP'];


$sql="INSERT INTO `empleados`(`id`, `nombre`, `control`, `telefono`, `CURP`) VALUES ('$id','$nombre','$control','$telefono','$CURP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>