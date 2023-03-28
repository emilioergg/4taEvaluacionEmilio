
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">Buscador</a>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>

    <?php include('base.php') ?>

    <main class="container p-4">
    <div class="row">

        <div class="col-md-4">
        
            <div class="card card-body"> <!-- card card-body: creación de tarjeta-->
            <form action="update.php" method="POST">

            
                <div class="mb-3">
                    <textarea name="description" rows="2" class="form-control" placeholder="Descripción"><?php echo  $description ?></textarea>
                </div>

                <div class="mb-3"> <!-- form-group: para dar estilos a los inputs-->
                    <input type="text" name="precio" class="form-control" placeholder="precio" value="<?php echo $precio ?>"> 
                </div>

                <div class="mb-3"> <!-- form-group: para dar estilos a los inputs-->
                    <input type="text" name="stock" class="form-control" placeholder="stock" value="<?php echo $stock ?>"> 
                </div>

                <div class="d-grid gap-2">
                     <button type="Sumbit" name="update"  class="btn btn-success btn-lg btn-block" value="<?php echo $id ?>" >Actualizar</button>
                </div>

            </form>
            </div>

        </div>


        
        <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $query = "SELECT * FROM producto";
            $result_tasks = mysqli_query($conexion, $query);    

            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td>
                <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                </a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
