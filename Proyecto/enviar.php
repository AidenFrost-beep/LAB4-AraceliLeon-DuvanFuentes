<?php

include "conexion.php";



$sql = "INSERT INTO sistemadeinfomacion.producto (nombre,imagen,precio,categoria,temporada,fechaingreso,descripcion)
VALUES ('$_GET[nombre]','$_GET[imagen]', '$_GET[precio]','$_GET[categoria]','$_GET[temporada]'
,'$_GET[fechaingreso]','$_GET[descripcion]')";

 echo "XD";
 
if ($conn->query($sql) === TRUE){
    echo "Registro agregado satisfactoriamente";

}else{
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>