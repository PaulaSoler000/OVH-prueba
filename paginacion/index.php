<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD CESUR 2022</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php
include("conexion.php");

//$conexion=$base->query("SELECT * FROM DATOS_USUARIOS");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

//--------------paginación--------------------------------------------------------

$registros_por_pagina=5; /* CON ESTA VARIABLE INDICAREMOS EL NUMERO DE REGISTROS QUE QUEREMOS POR PAGINA*/
$estoy_en_pagina=1;/* CON ESTA VARIABLE INDICAREMOS la pagina en la que estamos*/

  if (isset($_GET["pagina"])){
    $estoy_en_pagina=$_GET["pagina"];				
  }

$empezar_desde=($estoy_en_pagina-1)*$registros_por_pagina;

$sql_total="SELECT * FROM productos";
/* CON LIMIT 0,3 HACE LA SELECCION DE LOS 3 REGISTROS QUE HAY EMPEZANDO DESDE EL REGISTRO 0*/
$resultado=$base->prepare($sql_total);
$resultado->execute(array());

$num_filas=$resultado->rowCount(); /* nos dice el numero de registros del reusulset*/
$total_paginas=ceil($num_filas/$registros_por_pagina);

//------------------------------------------------------------------------

 $registros=$base->query("SELECT * FROM PRODUCTOS LIMIT $empezar_desde,$registros_por_pagina")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){

  $Cod=$_POST["Cod"];
  $Sec =$_POST["Sec"];
  $Nom=$_POST["Nom"];
  $Pre=$_POST["Pre"];
  $Fech=$_POST["Fech"];
  $Imp=$_POST["Imp"];
  $Pais=$_POST["Pais"];

  $sql="INSERT INTO productos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUES (:cod, :sec, :nom, :pre, :fech, :imp, :pais)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array( ":cod"=>$Cod, ":sec"=>$Sec, ":nom"=>$Nom , ":pre"=>$Pre, ":fech"=>$Fech, ":imp"=>$Imp , ":pais"=>$Pais));

  header("Location:index.php");
}


?>


<h1>CRUD CESUR 2022</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Codigo</td>
      <td class="primera_fila">Sección</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Precio</td>
      <td class="primera_fila">Fecha</td>
      <td class="primera_fila">Importado</td>
      <td class="primera_fila">Pais</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <?php
    foreach ($registros as $producto):?>

    <tr>
        <td><?php echo $producto->CODIGOARTICULO?></td>
        <td><?php echo $producto->SECCION?></td>
        <td><?php echo $producto->NOMBREARTICULO?></td>
        <td><?php echo $producto->PRECIO?></td>
        <td><?php echo $producto->FECHA?></td>
        <td><?php echo $producto->IMPORTADO?></td>
        <td><?php echo $producto->PAISDEORIGEN?></td>

        <td class="bot"><a href="borrar.php?cod=<?php echo $producto->CODIGOARTICULO?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
        <td class="bot"><a href="editar.php?cod=<?php echo $producto->CODIGOARTICULO?> & sec=<?php echo $producto->SECCION ?> & nom=<?php echo $producto->NOMBREARTICULO?> & pre=<?php echo $producto->PRECIO?> & fech=<?php echo $producto->FECHA?> & imp=<?php echo $producto->IMPORTADO?> & pais=<?php echo $producto->PAISDEORIGEN?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>
      <?php
      endforeach;
      ?>

		    
	<tr>

      <td><input type='text' name='Cod' size='10' class='centrado'></td>
      <td><input type='text' name='Sec' size='10' class='centrado'></td>
      <td><input type='text' name=' Nom' size='10' class='centrado'></td>
      <td><input type='text' name=' Pre' size='10' class='centrado'></td>
      <td><input type='text' name=' Fech' size='10' class='centrado'></td>
      <td><input type='text' name=' Imp' size='10' class='centrado'></td>
      <td><input type='text' name=' Pais' size='10' class='centrado'></td>

      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>   
      
      <tr><td><?php
	for ($i=1; $i<=$total_paginas; $i++){
/*		echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";*/
		echo "<a href='index.php?pagina=" . $i . "'>" . $i . "</a>  ";
	}

  ?></td></tr>
      </table>   
      
    
</form>




</body>
</html>