<?php
if (file_exists('controllers/ProductoController.php')) {
    require_once 'controllers/ProductoController.php';
    $controller = new ProductoController();
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        $controller->index();
    }
} else {
    require_once 'views/home.php';
}
?>