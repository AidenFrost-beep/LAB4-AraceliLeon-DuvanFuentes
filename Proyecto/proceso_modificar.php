
<?php

  include("conexion.php");

  $id = $_REQUEST['id'];
  
  $name = $_POST['nombre'];
  $precio = $_POST['precio'];
  $categoria = $_POST['categoria'];
  $temporada = $_POST['temporada'];
  $fechaingreso = $_POST['fechaingreso'];
  $descripcion = $_POST['descripcion'];



  $sql ="UPDATE sistemadeinfomacion.producto
  SET nombre= '$name', precio = '$precio',categoria = '$categoria',temporada = '$temporada',fechaingreso = '$fechaingreso' ,descripcion = '$descripcion'  WHERE id='$id' ";
  



if ($conn->query($sql) === TRUE){
    echo "Registro Modificado! satisfactoriamente";

}else{
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>
