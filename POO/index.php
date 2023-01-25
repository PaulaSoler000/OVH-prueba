<?php

require("DevuelveProductos.php");
//CREAMOS AHORA UNA INSTANCIA U OBJETO DE ESA CLASE

$misproductos=new DevuelveProductos(); //INSTANCIAMOS. ES COMO DARLE AL BOTON DE START
$misproductos->Conexion();
$array_productos=$misproductos->get_productos();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
foreach ($array_productos as $fila){
		echo "<table><tr><td>";
		echo $fila['CODIGOARTICULO'] . "</td><td>";
		echo $fila['NOMBREARTICULO'] . "</td><td>";
		echo $fila['IMPORTADO'] . "</td><td>";
		echo $fila['SECCION'] . "</td><td>";
		echo $fila['PRECIO'] . "</td><td>";
		echo $fila['PAISDEORIGEN'] . "</td></tr></table>";
		echo "<br>";
}	
	
?>
	
	
</body>
</html>