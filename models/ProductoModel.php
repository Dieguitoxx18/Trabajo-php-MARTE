<?php
require_once 'Conexion.php';

class ProductoModel {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    // LEER (Read) - Trae todos los productos para mostrarlos en la página
    public function obtenerTodos() {
        $sql = "SELECT p.*, c.nombre AS categoria 
                FROM productos p 
                LEFT JOIN categorias c ON p.categoria_id = c.id 
                ORDER BY p.id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // LEER UNO (Para cargar los datos al editar)
    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // CREAR (Create - vía POST)
    public function crear($nombre, $descripcion, $precio, $imagen, $categoria_id) {
        $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen, categoria_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $descripcion, $precio, $imagen, $categoria_id]);
    }

    // ACTUALIZAR (Update - vía POST)
    public function actualizar($id, $nombre, $descripcion, $precio, $imagen, $categoria_id) {
        $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, imagen = ?, categoria_id = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $descripcion, $precio, $imagen, $categoria_id, $id]);
    }

    // ELIMINAR (Delete - vía GET)
    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Buscar por nombre (para el buscador GET de tu amigo)
    public function buscarPorNombre($texto) {
        $sql = "SELECT p.*, c.nombre AS categoria 
                FROM productos p 
                LEFT JOIN categorias c ON p.categoria_id = c.id 
                WHERE p.nombre LIKE ? 
                ORDER BY p.id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["%$texto%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Guardar contacto del formulario "Llámanos"
    public function guardarContacto($nombre, $telefono) {
        $sql = "INSERT INTO mensajes_contacto (nombre_cliente, correo, mensaje) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $telefono, 'Solicitud de llamada desde la web']);
    }
}