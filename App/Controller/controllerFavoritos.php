<?php
require_once __DIR__ . "../../Model/Productos.php";

class controllerFavoritos{
    public function favoritos(){
        $db = new Database();
        $conn = $db->connect();

        $modeloProductos = new Productos($conn);
        $productos = $modeloProductos->ProductosAll();

        include __DIR__ . "../../Views/Users/favoritos.php";
    }
}