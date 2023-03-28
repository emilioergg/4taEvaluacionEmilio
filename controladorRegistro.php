<?php 

    include('base.php');

    if(isset($_REQUEST['registrar'])){

        if(empty($_REQUEST['correo']) or empty($_REQUEST['clave']) or empty($_REQUEST['nombre']) or empty($_REQUEST['apellido'])){
           
            echo '<div class="alert alert-danger" role="alert">No pueden haber campos vacios!</div>';

        }else{

          $correo=$_REQUEST['correo'];
          $clave=$_REQUEST['clave'];
          $nombre=$_REQUEST['nombre'];
          $apellido=$_REQUEST['apellido'];


          $resultado ="INSERT INTO ventas(nombre, apellido, email, clave) VALUES ('$nombre','$apellido','$correo','$clave')";
          $resultado2=mysqli_query($conexion,$resultado);
          if($resultado2){

            $sms ='<div class="alert alert-success" role="alert">Registrado Correctamente!</div>';

            header("location:login.php");
            
          }else{
            echo '<div class="alert alert-warning" role="alert">Acceso Denegado!</div>';
            }
        }

       
    }

?>
