<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class ProductoController {
    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function manejarPeticiones() {
        // 1. PETICIONES POST (Crear/Editar producto o guardar contacto)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Si viene del formulario de contacto ("Llámanos")
            if (isset($_POST['tipo_formulario']) && $_POST['tipo_formulario'] === 'contacto') {
                $this->model->guardarContacto($_POST['nombre'], $_POST['telefono']);
            } else {
                // Si viene del formulario CRUD de productos
                $id           = $_POST['id'] ?? '';
                $nombre       = $_POST['nombre'] ?? '';
                $descripcion  = $_POST['descripcion'] ?? '';
                $precio       = $_POST['precio'] ?? 0;
                $imagen       = $_POST['imagen'] ?? 'assets/img/airpods-hero.png';
                $categoria_id = $_POST['categoria_id'] ?? 1;

                if (!empty($id)) {
                    $this->model->actualizar($id, $nombre, $descripcion, $precio, $imagen, $categoria_id);
                } else {
                    $this->model->crear($nombre, $descripcion, $precio, $imagen, $categoria_id);
                }
            }

            // Redirige a views/gracias.php (Criterio 14)
            header("Location: views/gracias.php");
            exit;
        }

        // 2. PETICIÓN GET: Eliminar producto
        if (isset($_GET['action']) && $_GET['action'] === 'eliminar' && isset($_GET['id'])) {
            $this->model->eliminar($_GET['id']);
            header("Location: views/gracias.php");
            exit;
        }
    }

    public function listarProductos() {
        // Si usaron el buscador por GET (?action=buscar&q=...)
        if (isset($_GET['action']) && $_GET['action'] === 'buscar' && !empty($_GET['q'])) {
            return $this->model->buscarPorNombre($_GET['q']);
        }
        return $this->model->obtenerTodos();
    }

    public function obtenerProductoEditar() {
        if (isset($_GET['action']) && $_GET['action'] === 'editar' && isset($_GET['id'])) {
            return $this->model->obtenerPorId($_GET['id']);
        }
        return null;
    }
}