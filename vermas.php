<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mas</title>

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
            <a class="nav-link" href="vista.php">Ver Productos</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">

            <?php
            include("conexion.php");

            $id = $_REQUEST['id'];

            $sql = "SELECT * FROM sistemadeinfomacion.producto WHERE id = '$id'";
            $sql_run = mysqli_query($conn,$sql);
            if($row = mysqli_fetch_array($sql_run))
            {
            ?>

            <div class="card col-12" style="width: 18rem; margin-top: 10px; margin-bottom: 10px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo $row['imagen'];?>" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title h2">
                                <?php echo $row['nombre'] ?>
                            </h5>
                            <p class="card-text text-muted">
                                <?php echo "ID ".$row['id']?>
                            </p>
                            <p class="card-text font-weight-bold text-danger">
                                <?php echo "$".$row['precio']?>
                            </p>
                            <p class="card-text">
                                <?php echo $row['descripcion']?>
                            </p>
                            <p class="card-text">
                                <small class="text-muted"><?php echo $row['fechaingreso']?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <?php
                }
            ?>
        </div>
        <a href="vista.php" class="btn btn-primary">Atras</a>
    </div>
</body>
</html>