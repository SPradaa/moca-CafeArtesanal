<?php
require_once __DIR__ . "/../model/Productos.php";
require_once __DIR__ . "/../model/Pedidos.php";
require_once __DIR__ . "/../model/Usuarios.php";
require_once __DIR__ . "/../model/Categorias.php";

class controllerAdmin{
    private $conn ;

    public function admin($conn){

        $modeloProductos = new Productos($conn);
        $modeloPedidos = new Pedidos($conn);
        $modeloUsuarios = new Usuarios($conn);
        $modeloCategorias = new Categorias($conn);


        $productos = $modeloProductos->ProductosAll();
        $pedidos = $modeloPedidos->PedidosAll();
        $usuarios = $modeloUsuarios->usuariosAll();
        $categorias = $modeloCategorias->CategoriasAll();
        
    }
}