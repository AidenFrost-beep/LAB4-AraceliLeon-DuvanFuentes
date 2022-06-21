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
    <?php
    include "conexion.php";
    $sql = "SELECT id,nombre, imagen, precio, categoria FROM sistemadeinfomacion.producto";
    $sql_run = $conn->query($sql);
    while($row = $sql_run->fetch_assoc()){
    ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="data:imagen;base64,<?php echo base64_encode($row['imagen']);?>" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                <h5 class="card-title">
                    <?php echo $row['nombre'] ?>
                </h5>
                <p class="card-text">
                    <?php echo $row['precio']?>
                </p>
                <p>
                <?php echo $row['id']; ?>
                </p>

                <a href="#" class="btn btn-primary">Ver</a>
                <a href="Modificar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar  </a>
                <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>