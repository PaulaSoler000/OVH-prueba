

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	$c_art=$_GET["codart"];
	
	try{
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="DELETE FROM productos WHERE CODIGOARTICULO = :contra";
		
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":contra"=>$c_art));
		
		echo "Registro ELIMINADO";
		$resultado->closeCursor();
		
			
	}catch (Exception $e){
		//die ("Error: " . $e->getMessage());
	
	 echo "La linea del error es: " . $e->getLine();
		
	}finally{
		$base=null;  /*con esto vaciamos la memoria*/
	}
	
	
	
?>
	
	
	
	
</body>
</html>