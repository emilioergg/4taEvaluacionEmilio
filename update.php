<?php

    include('base.php');

    if(isset($_REQUEST['id'])){

    $id=$_REQUEST['id'];

        $resultado = "SELECT * FROM producto WHERE id = $id";
        $resultado2 = mysqli_query($conexion,$resultado);

        if(mysqli_num_rows($resultado2) == 1){

            $row = mysqli_fetch_array($resultado2);
            $description = $row['descripcion'];
            $precio = $row['precio'];
            $stock = $row['stock'];
        }

        include('formularioupdate.php');
    }

    if(isset($_REQUEST['update'])){

        
        $id=$_REQUEST['update'];
        $description=$_REQUEST['description'];
        $precio=$_REQUEST['precio'];
        $stock=$_REQUEST['stock'];

        $resultado="UPDATE producto SET descripcion='$description', precio='$precio', stock='$stock' WHERE id='$id'";
        
        $resultado2=mysqli_query($conexion,$resultado);  

        header("location:index2.php");
        

    }
?>
