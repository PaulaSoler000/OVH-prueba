<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php
include("conexion.php");

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

//$conexion=$base->query("SELECT * FROM DATOS_USUARIOS");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
 $registros=$base->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde,$registros_por_pagina")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){

  $nombre=$_POST["Nom"];
  $apellido=$_POST["Ape"];
  $direccion=$_POST["Dir"];
  $sql="INSERT INTO DATOS_USUARIOS (NOMBRE,APELLIDO, DIRECCION) VALUES(:nom, :ape, :dir)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

  header("Location:index.php");
}


?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <?php
    foreach ($registros as $persona):?>

    <tr>
        <td><?php echo $persona->id;?></td>
        <td><?php echo $persona->Nombre;?></td>
        <td><?php echo $persona->Apellido;?></td>
        <td><?php echo $persona->Direccion;?></td>

        <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
        <td class="bot"><a href="editar.php?Id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre ?> & apellido=<?php echo $persona->ApelLido?> & dir=<?php echo $persona->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>
      <?php
      endforeach;
      ?>

		    
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      <tr><td><?php
	for ($i=1; $i<=$total_paginas; $i++){
/*		echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";*/
		echo "<a href='index.php?pagina=" . $i . "'>" . $i . "</a>  ";
	}

  ?></td></tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>