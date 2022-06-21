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
    include ("conexion.php");

    $id = $_REQUEST['id']; 

    $sql = "SELECT id,nombre,imagen,precio,categoria,temporada,fechaingreso,descripcion FROM sistemadeinfomacion.producto WHERE id='$id'";
    $sql_run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($sql_run)
    
    ?>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" class="bg-light my-3 p-3 border rounded">
                    <h2>Formulario</h2>
                    <div class="form-group">
                        <p>Nombre: <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'];?> "></p>
                        <p>Imagen: <input type="file" class="form-control-file" name="imagen" value="<?php echo $row['imagen'];?> " ></p>
                        <p>Precio: <input type="number" class="form-control" name="precio" value="<?php echo $row['precio'];?> " ></p>
                        <p>Categoria:
                            <select class="custom-select" name="categoria" value="<?php echo $row['categoria'];?> " >
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>                              
                        </p>
                        <p>Temporada: <input type="radio" class="form-control" name="temporada"></p>
                        <p>Fecha: <input type="date" class="form-control" name="fechaingreso"></p>
                        <p>Descripcion: <textarea class="form-control" name="descripcion"></textarea>
                        <p><button type="submit" class="btn btn-primary">Guardar</button></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
