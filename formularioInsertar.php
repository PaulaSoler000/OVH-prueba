<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<form method="get" action="insertarRegistro.php">
		

        <tr>
            <td>Codigo Articulo</td>
            <td><label for="$codigo_articulo"></label>
            <imput type="text" name="codigo_articulo" id="codigo_articulo">
        </tr>

        <tr>
            <td>Seccion</td>
            <td><label for="$seccion"></label>
            <imput type="text" name="seccion" id="seccion">
        </tr>

        <tr>
            <td>Nombre de Articulo</td>
            <td><label for="$nombre_articulo"></label>
            <imput type="text" name="nombre_articulo" id="nombre_articulo">
        </tr>

        <tr>
            <td>Precio</td>
            <td><label for="$precio"></label>
            <imput type="text" name="precio" id="precio">
        </tr>

        <tr>
            <td>Fecha</td>
            <td><label for="$fecha"></label>
            <imput type="text" name="fecha" id="fecha">
        </tr>

        <tr>
            <td>Importado</td>
            <td><label for="$importado"></label>
            <imput type="text" name="importado" id="importado">
        </tr>

        <tr>
            <td>Pais de origen</td>
            <td><label for="$pais_origen"></label>
            <imput type="text" name="pais_origen" id="pais_origen">
        </tr>

        <tr>
        <input type="submit" name="enviado" value="Dale!">
        </tr>
        
</form>
</table>
</body>
</html>