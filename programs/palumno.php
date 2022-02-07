<?php 

require 'pagina1.php';

class Alumno extends persona{#Esta es una clase hija que herada de la clase padre "persona"

	private $matricula;

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getMatricula(){
		return $this->matricula;

	}

	public function datosAlumnos(){
		$this->imprimeNombre();
		echo $this->getMatricula();
	}
}


?>