<?php

// require_once('Cliente.php');
// require_once('Sucursal.php');

// Autoloader: busca el nombre de la clase instanciada, que ha de coincidir con el nombre del archivo en que se encuentra dicha clase
// Evita tener que hacer un 'require_once' por cada archivo de clase instanciada
spl_autoload_register(function ($nombre_clase){
    require_once($nombre_clase . '.php');
});

$c1 = new Cliente();
$c1->nombre = 'Torsten';
$c1->apellido = 'Kling';
echo $c1->getNombreCompleto();

$c2 = new Cliente();
$c2->nombre = 'Eustacio';
$c2->apellido = 'Sasoin';
echo $c2->getNombreCompleto();

$suc1 = new Sucursal();
$suc1->nombre = 'Claypole';
$suc1->direccion = 'Camino de la Cuchilla Grande 4070';
$suc1->localidad = 'Chucrutia';
echo $suc1->getDatos();