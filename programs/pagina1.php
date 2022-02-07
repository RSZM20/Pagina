<?php 

class persona{#Esta es la clase padre

	#Atributos heredados a la clase hija
	private $nombre;
	private $apellido;

	#constructor
	/*public function construct(){

	}*/

	#Métodos
	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function imprimeNombre(){
		echo 'Mi nombre es '.$this->getNombre().' '.$this->getApellido();
	}


}

?>