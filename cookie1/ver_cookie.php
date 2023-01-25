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

if ($_COOKIE["idioma_seleccionado"]=="es") {

    header("Location:spanish.php");

} else if ($_COOKIE["idioma_seleccionado"]=="in") {

    header("Location:english.php");

} else {

    header("Location:pag1.php");
    
}

?>



</body>
</html>