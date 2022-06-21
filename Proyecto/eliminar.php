<?php
   include("conexion.php");

   $id = $_REQUEST['id'];

   $sql = "DELETE FROM sistemadeinfomacion.producto where id = '$id'";
   $resultado = $conn->query($sql);

   if($resultado){
      echo "Borrado";
   }
   else{
      echo "echo XD NO SE elimino";
   }

?>