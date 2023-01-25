<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php
include("conexion.php");

if(!isset($_POST["bot_actualizar"])){
  

  $Cod=$_GET["cod"];
  $Sec=$_GET["sec"];
  $Nom=$_GET["nom"];
  $Pre=$_GET["pre"];
  $Fech=$_GET["fech"];
  $Imp=$_GET["imp"];
  $Pais=$_GET["pais"];

}else{

  $Cod=$_POST["cod"];
  $Sec=$_POST["sec"];
  $Nom=$_POST["nom"];
  $Pre=$_POST["pre"];
  $Fech=$_POST["fech"];
  $Imp=$_POST["imp"];
  $Pais=$_POST["pais"];
  $sql="UPDATE productos SET  SECCION=:miSec, NOMBREARTICULO=:miNom, PRECIO=:miPre,  FECHA=:miFech, IMPORTADO=:miImp, PAISDEORIGEN=:miPais WHERE CODIGOARTICULO=:miCod";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":miCod"=>$Cod, ":miSec"=>$Sec,":miNom"=>$Nom, ":miPre"=>$Pre, ":miFech"=>$Fech, ":miImp"=>$Imp, ":miPais"=>$Pais));
  header("Location:index.php");


}
?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td>Código</td>
      <td><label for="cod"></label>
      <input type="text" name="cod" id="cod" value="<?php echo $Cod ?>"></td>
    </tr>
    <tr>
      <td>Seccion</td>
      <td><label for="Sec"></label>
      <input type="text" name="sec" id="sec" value="<?php echo $Sec ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nom ?>"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre" value="<?php echo $Pre ?>"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="fech"></label>
      <input type="text" name="fech" id="fech" value="<?php echo $Fech ?>"></td>
    </tr>
    <tr>
      <td>Importado</td>
      <td><label for="imp"></label>
      <input type="text" name="imp" id="imp" value="<?php echo $Imp ?>"></td>
    </tr>
    <tr>
      <td>Pais</td>
      <td><label for="pais"></label>
      <input type="text" name="pais" id="pais" value="<?php echo $Pais ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>