<?php
require_once __DIR__ . "/../model/Productos.php";
require_once __DIR__ . "/../model/Pedidos.php";



class controllerUser{
    public function index(){
        $db = new Database();
        $conn = $db->connect();


        // instanciar el modelo de productos y obtener los productos
        $modeloProductos = new Productos($conn);
        $modeloPedidos = new Pedidos($conn);


        //instanciar Clases

        $productos = $modeloProductos->ProductosAll();
        $pedidos = $modeloPedidos->PedidosAll();


        include __DIR__ . "/../Views/usuarios.php";

    }

}