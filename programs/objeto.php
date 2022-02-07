<?php

require 'palumno.php';

$objAlumno = new Alumno();

$objAlumno->setNombre('Julian');
$objAlumno->setApellido('Aguilar');
$objAlumno->imprimeNombre();

$objAlumno->setMatricula('18270271');
echo $objAlumno->getMatricula();


?>