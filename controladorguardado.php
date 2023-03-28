<?php 

    include('base.php');

    if(isset($_REQUEST['save_form'])){

        if(empty($_REQUEST['description']) or empty($_REQUEST['precio']) or empty($_REQUEST['stock'])){
           
            echo '<div class="alert alert-danger" role="alert">No pueden haber campos vacios!</div>';

        }else{

          $description=$_REQUEST['description'];
          $precio=$_REQUEST['precio'];
          $stock=$_REQUEST['stock'];
        
          $resultado="INSERT INTO producto(descripcion, precio, stock) VALUES ('$description','$precio','$stock')";
          $resultado2=mysqli_query($conexion,$resultado);

          
          if($resultado2){

            echo'<div class="alert alert-success" role="alert">Guardado Correctamente!</div>';
            
          }else{
            echo '<div class="alert alert-warning" role="alert">Acceso Denegado!</div>';
            }
        }

       
    }

?>
