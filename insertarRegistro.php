<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

	$servername = "localhost";
	$database = "pruebas";
	$username= "root";
	$password= "";

	$conexion = mysqli_connect($servername, $username, $password, $database);
	
		if (!$conexion) {
			die("Connection failed: " . mysqli_connect_error());
		}

    $consulta="INSERT INTO productos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUES ('$codigp_articulo',$seccion',
    '$nombre_articulo', '$precio','$fecha','$importado','$pais_origen')";

    $resultados=mysqli_query($conexion,$consulta);

    if ($resultados==false){
        echo "error en la consulta";
    }else{
        echo "registro guardado<br>";
        echo "<table><tr><td>$codigo_articulo</td></tr></table>";
        echo "<tr><td>$seccion</td></tr>";
        echo "<tr><td>$nombre_articulo</td></tr>";
        echo "<tr><td>$precio</td></tr>";
        echo "<tr><td>$fecha</td></tr>";
        echo "<tr><td>$importado</td></tr>";
        echo "<tr><td>$pais_origen</td></tr></table>";
    }

    mysqli_close($conexion);

?>
</body>
</html>