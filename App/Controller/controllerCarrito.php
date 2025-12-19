<?php
require_once __DIR__ . "../../Model/Productos.php";


class controllerCarrito{
    public function carrito(){
        $db = new Database();
        $conn = $db->connect();

        $modeloProductos = new Productos($conn);
        $productos = $modeloProductos->ProductosAll();

        include __DIR__ . "../../Views/Users/carrito.php";
    }
}
