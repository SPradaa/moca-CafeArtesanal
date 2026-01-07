<?php
require_once __DIR__ . ("../../Model/Usuarios.php");
require_once __DIR__ . ("../../Model/Pedidos.php");
require_once __DIR__ . ("../../Model/Categorias.php");
require_once __DIR__ . ("../../Model/Estados.php");
class controllerTrabajador
{
    public function index()
    {
        $db = new Database();
        $conn = $db->connect();

        // Categorías
        $modelCategorias = new Categorias($conn);
        $categorias = $modelCategorias->CategoriasAll();

        // Estados
        $modelEstados = new Estados($conn);
        $estadosProductos = $modelEstados->EstadosProductos();

        include __DIR__ . '../../views/trabajador/trabajador.php';
    }

    // Opcional: redirigir en vez de duplicar lógica
    public function trabajador()
    {
        $this->index();
    }

    public function categorias()
    {
        $this->index();
    }

    public function estados()
    {
        $this->index();
    }
}
