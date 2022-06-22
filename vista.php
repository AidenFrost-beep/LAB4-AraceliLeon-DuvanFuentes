<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <!-- SECCION NAVEGACIÓN-->
    <ul class="nav justify-content-center nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="formulario.html">Agregar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="vista.php">Ver Productos</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">


            <?php
            include("conexion.php");
            
            $sql = "SELECT id, nombre, imagen, precio, categoria FROM sistemadeinfomacion.producto";
            $sql_run = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($sql_run))
            {
            ?>
                <div class="card col-12 col-md-4 text-center" style="width: 18rem; margin-top: 10px; ">
                    <div class="row no-gutters">
                        <img src="data:imagen;base64,<?php echo base64_encode($row['imagen']);?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">
                                <?php echo $row['nombre'] ?>
                            </h5>
                            <p class="card-text font-weight-bold text-danger">
                                <?php echo "$".$row['precio']?>
                            </p>
                            <a href="vermas.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Ver</a>
                            <a href="modificar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                        
                    </div>
                </div>
                <br> <br>

            <?php
                }
            ?>
        </div>
    </div>

</body>
</html>