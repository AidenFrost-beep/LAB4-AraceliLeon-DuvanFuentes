<?php

include "conexion.php";

$sql = "SELECT nombre, imagen, precio, categoria FROM sistemadeinfomacion.producto";
$productos = $conn->query($sql);

echo "<h3>Alumnos de Tecnologias Web </h3>";

foreach($productos as $producto){
    echo "nombre: " . $producto["nombre"] . ", Imagen: ".$producto['imagen'] . ", Edad: ". $producto["precio"]. ", Categoria: ". $producto["categoria"]."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>xd </p>
    
<br>
<?php
      foreach($productos as $producto){
        
echo "nombre: " . $producto["nombre"] . ", Imagen: ". ", Edad: ". $producto["precio"]. ", Categoria: ". $producto["categoria"]."<br>";
      }
      echo "nombre: " . $producto["nombre"]

?>

<p><a href="Modificar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar  </a>
                <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Eliminar</a>
    
    </p>
    
    
</body>

</html>