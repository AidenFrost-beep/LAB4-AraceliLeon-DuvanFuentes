<?php
    include("conexion.php");

    $id = $_REQUEST['id'];

    $name = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $temporada = isset($_POST['temporada']) ? $_POST['temporada'] : 0;
    $fechaingreso = $_POST['fechaingreso'];
    $descripcion = $_POST['descripcion'];

    // $image = $_FILES['imagen']['tmp_name'];
    // $imgContent = addslashes(file_get_contents($image));

    // Creando una ruta donde se guarda el archivo
    $nombreimagen = $_FILES['imagen']['name'];//obtiene el nombre
    $imagen =  $_FILES['imagen']['tmp_name'];//contiene el archivo
    $ruta="imgs";

    $ruta=$ruta."/".$nombreimagen;

    move_uploaded_file($imagen,$ruta); 


    $sql ="UPDATE sistemadeinfomacion.producto
    SET nombre= '$name', imagen= '$ruta', precio = '$precio',categoria = '$categoria',temporada = '$temporada',fechaingreso = '$fechaingreso' ,descripcion = '$descripcion'  WHERE id='$id' ";


    if ($conn->query($sql) === TRUE){
        header ("Location: vista.php");

    }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>