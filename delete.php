<?php

include('base.php');

$id = $_REQUEST['id'];

$resultado = "DELETE FROM producto WHERE id = $id";
$resultado2=mysqli_query($conexion,$resultado);

if($resultado2){
    header("location:index2.php");
    echo'<div class="alert alert-success" role="alert">Borrado Correctamente!</div>';
}

die("EROR 404");

?>