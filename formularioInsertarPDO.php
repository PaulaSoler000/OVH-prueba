<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<form action="insertarRegistrosPDO.php" method="get">
	<table>
	<tr><td>CODIGOARTICULO:</td><td><input type="text" name="codart"></td></tr><br>
	<tr><td>SECCION:</td><td><input type="text" name="sec"></td></tr><br>
	<tr><td>NOMBREARTICULO:</td><td><input type="text" name="nomart"></td></tr><br>
	<tr><td>PRECIO:</td><td><input type="number" name="pre"></td></tr><br>
	<tr><td>FECHA:</td><td><input type="text" name="fech"></td></tr><br>
	<tr><td>IMPORTADO:</td><td><input type="text" name="import"></td></tr><br>
	<tr><td>PAISDEORIGEN:</td><td><input type="text" name="pais"></td></tr><br>
	</table>
	<input type="submit" name="enviando" value="Dale!">	
	
</form> 
	
</body>
</html>