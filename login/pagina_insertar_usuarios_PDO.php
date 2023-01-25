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

    $usuario=$_POST["login"];
    $contra=$_POST["password"];

    $pass_cifrado=password_hash($contra, PASSWORD_DEFAULT);

    try{
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="INSERT INTO usuario_pass (usuarios, password) VALUES (:nombre, :contrase)";
		
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":nombre"=>$usuario, ":contrase"=>$pass_cifrado));
		
		echo "Registro insertado";
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