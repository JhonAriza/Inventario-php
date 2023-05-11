<?php 

class productos{

	public $idProductos;
	public $nombreProductos;
	public $valorProductos;
	public $cantidadProductos;
	public $idProveedor;


	public  function __construct($a,$e,$i,$o,$u){
		$this->idProductos = $a;
		$this->nombreProductos = $e;
		$this->valorProductos = $i;
		$this->cantidadProductos = $o;
		$this->idProveedor = $u;
	}

	public function registro(){

	}
	public function Eliminar(){

	}
	public function Editar(){

	}

	public function listaDatos(){

		$c= new Conexion;
		$conexion=$c->conectar();

		$sql = "SELECT idProductos,nombreProductos,valorProductos,cantidadProductos, 
		idProveedor FROM productos";

		$result = $conexion->query($sql);

		return $result;

	}	


}


?>