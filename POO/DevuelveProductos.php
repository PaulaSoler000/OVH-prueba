<?php

require ("conexion.php");

class DevuelveProductos extends Conexion{

/*
	public function DevuelveProductos(){

//LLAMANDO AL CONSTRUCTOR DE LA CLASE PADRE CONSEGUIMOS CREAR LA CONEXION A LA BASE DE DATOS
		parent::__construct();
		
	}
	
*/
//AHORA CREAMOS UN METODO QUE HAGA LA CONSULTA SQL Y DEVUELVA UN ARRAY CON LOS REGISTROS
	public function get_productos(){
		
		$resultado=$this->conexion_db->query("SELECT * FROM productos");
		$productos=$resultado->fetch_all(MYSQLI_ASSOC);
		return $productos;
	}
	
	
}


?>