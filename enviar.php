<?php

include("conexion.php");

$image = $_FILES['imagen']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));



// $nombreimagen = $_FILES['imagen']['name'];//obtinen el nombre
// $imagen =  $_FILES['imagen']['tmp_name'];//contiene el archivo
// $ruta="imgs";

// $ruta=$ruta."/".$nombreimagen;

// move_uploaded_file($imagen,$ruta); 


$sql = "INSERT INTO sistemadeinfomacion.producto(nombre,imagen,precio,categoria,temporada,fechaingreso,descripcion)
VALUES ('$_POST[nombre]', '$imgContent', '$_POST[precio]','$_POST[categoria]','$_POST[temporada]'
,'$_POST[fechaingreso]','$_POST[descripcion]')";

 
if ($conn->query($sql) === TRUE){
    header ("Location: vista.php");

}else{
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>