<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th> IMAGE</th>
                        <th> username</th>
                        <th>lapromo</th>
                    </tr>
                </thead>
                <?php
                   
                   include "conexion.php";
                   $sql = "SELECT nombre, imagen, precio, categoria FROM sistemadeinfomacion.producto";
                   $sql_run = mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_array($sql_run))
                   {

                    ?>
                    <tr>
                        <td> <?php echo'<img src="data":image;base64,'.base64_encode($row['image']).'"alt="imagen"  >';?> </td>
                        <td> <?php echo $row['nombre'] ?> </td> 
                        <td> <?php echo $row['precio']?> </td> 
                    </tr>
                    <?php

                   }
                ?>
            </table>
        </form>
    
</body>
</html>