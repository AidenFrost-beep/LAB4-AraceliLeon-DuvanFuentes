<?php
   include("conexion.php");

   $id = $_REQUEST['id'];

   $sql = "DELETE FROM sistemadeinfomacion.producto where id = '$id'";
   $resultado = $conn->query($sql);

   if($resultado){
      header ("Location: vista.php");
   }
   else{
      echo "NO SE ELIMINO";
   }

?>