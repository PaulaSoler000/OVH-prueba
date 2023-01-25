<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(isset($_COOKIE["idioma_seleccionado"])){

        if($_COOKIE["idioma_seleccionado"]=="es"){

            header("Loaction:spanish.php");
        
        }else if($_COOKIE["idioma_seleccionado"]=="in"){
        
            header("Loaction:english.php");
        }
    }

?>

    <h1>Elige idioma</h1>

    <a href="crearCookie.php?idioma=es">Español</a>
    <a href="crearCookie.php?idioma=in">Ingles</a>

</body>
</html>