<?php 

    include('base.php');

    if(isset($_REQUEST['ingreso'])){

        if(empty($_REQUEST['correo']) or empty($_REQUEST['clave'])){
           
            echo '<div class="alert alert-danger" role="alert">No pueden haber campos vacios!</div>';

        }else{

          $correo=$_REQUEST['correo'];
          $clave=$_REQUEST['clave'];


          $resultado ="select * from ventas where email='$correo' and clave='$clave'";
          $resultado2=mysqli_query($conexion,$resultado);
          //$=$conexion->query("select * from ventas where nombre='$correo' and clave='$clave' ");
          if($datos=$resultado2->fetch_object()){
            header("location:index2.php");
            echo '<div class="alert alert-success" role="alert">Logueado Correctamente!</div>';

            

          }else{
            echo '<div class="alert alert-warning" role="alert">Acceso Denegado!</div>';
            }
        }

       
    }

?>
