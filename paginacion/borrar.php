<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    <?php

    include("conexion.php");

    $Cod=$_GET["cod"];

    $base->query("DELETE FROM productos WHERE CODIGOARTICULO='$Cod'");

    header("Location:index.php");


    ?>


</body>
</html>