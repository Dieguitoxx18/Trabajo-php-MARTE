<?php
require_once 'controllers/ProductoController.php';

$controller = new ProductoController();
$controller->manejarPeticiones();

$listaProductos = $controller->listarProductos();
$productoEditar = $controller->obtenerProductoEditar();

require_once 'views/home.php';