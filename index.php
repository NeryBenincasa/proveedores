<?php
require_once 'modelo/producto.php';
require_once 'modelo/proveedores.php';

$p = new Producto();
$p->setId('111');
$p->setNombre('Don Satur Dulces');
$p->setCodigo('1234');
$p->setPrecio('$60');
$p->setMarca('Don Satur');

$p1 = new Proveedor();
$p1->setIdProveedor('ID: 11     ');
$p1->setNombreProveedor('Nombre: Arcor      ');
$p1->setCuilProveedor('CUIL: 1973     ');
$p1->setDireccionProveedor('Direccion: Magallanes 5416     ');
$p1->setTelefonoProveedor('Telefono: 3413456345       ');

$p2 = new Proveedor();
$p2->setIdProveedor('ID: 22     ');
$p2->setNombreProveedor('Nombre: Bagley     ');
$p2->setCuilProveedor('CUIL: 1793     ');
$p2->setDireccionProveedor('Direccion: Rueda 2981      ');
$p2->setTelefonoProveedor('Telefono: 3415645645       ');

$p3 = new Proveedor();
$p3->setIdProveedor('ID: 33     ');
$p3->setNombreProveedor('Nombre: CocaCola       ');
$p3->setCuilProveedor('CUIL: 1643     ');
$p3->setDireccionProveedor('Direccion: Rodriguez 4455      ');
$p3->setTelefonoProveedor('Telefono: 3413365398       ');

$p->setProveedor($p1);
$p->setProveedor($p2);
$p->setProveedor($p3);
$p->MostrarInformacion();