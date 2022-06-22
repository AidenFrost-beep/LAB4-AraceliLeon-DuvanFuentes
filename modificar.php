<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <?php
        include("conexion.php");

        $id = $_REQUEST['id']; 

        $sql = "SELECT id,nombre,imagen,precio,categoria,temporada,fechaingreso,descripcion FROM sistemadeinfomacion.producto WHERE id='$id'";
        $sql_run = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($sql_run)
    
    ?>

    <!-- SECCION NAVEGACIÓN-->
    <ul class="nav justify-content-center nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="formulario.html">Agregar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="vista.php">Ver Productos</a>
        </li>
    </ul>
    <!-- SECCION DE FORMULARIO -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" class="bg-light my-3 p-3 border rounded" enctype="multipart/form-data">
                    <h2>Formulario</h2>
                    <div class="form-group">
                        <p>Nombre: <input type="text" class="form-control"  name="nombre" value="<?php echo $row['nombre'];?>"/></p>
                        <p>Imagen: <input type="file" class="form-control-file" name="imagen"/></p>
                        <img src="data:imagen;base64,<?php echo base64_encode($row['imagen']);?>"  alt="...">
                        <p>Precio: <input type="number" class="form-control"  name="precio" value="<?php echo $row['precio'];?>"/></p>
                        <p>Categoria:
                            <select class="custom-select"  name="categoria" value="<?php echo $row['categoria'];?>">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>                              
                        </p>
                        <p>Temporada: 
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="temporada" class="custom-control-input" value="1eraopcion">
                                <label class="custom-control-label" for="customRadio1">1era opcion</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="temporada" class="custom-control-input" value="1eraopcion">
                                <label class="custom-control-label" for="customRadio2">2da opcion</label>
                            </div>
                        </p>
                        <p>Fecha: <input type="date" class="form-control" name="fechaingreso" value="<?php echo $row['fechaingreso'];?>"/></p>
                        <p>Descripcion: <textarea class="form-control" name="descripcion"><?php echo $row['descripcion'];?></textarea>
                        <p><button type="submit" class="btn btn-primary">Guardar</button></p>
                    </div>
                </form>
            </div>
        </div>
        <a href="vista.php" class="btn btn-primary">Atras</a>
    </div>
</body>
</html>