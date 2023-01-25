<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	$c_art=$_GET["codart"];
	$secc=$_GET["sec"];
	$n_art=$_GET["nomart"];
	$pre=$_GET["pre"];
	$fec=$_GET["fech"];
	$imp=$_GET["import"];
	$p_ori=$_GET["pais"];
	
	try{
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		$sql="INSERT INTO productos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";
		
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":c_art"=>$c_art, ":seccion"=>$secc, ":n_art"=>$n_art, ":precio"=>$pre, ":fecha"=>$fec, ":importado"=>$imp, ":p_orig"=>$p_ori));
		
		echo "Registro insertado";
		$resultado->closeCursor();
		
			
	}catch (Exception $e){
		//die ("Error: " . $e->getMessage());
	
	 echo "La linea del error es: " . $e->getLine();
		
	}finally{
		$base=null;  /*con esto vaciamos la memoria*/
	}