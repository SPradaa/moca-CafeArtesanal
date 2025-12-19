<?php
require_once __DIR__.("../../Model/Usuarios.php");
require_once __DIR__.("../../Model/Pedidos.php");

class controllerTrabajador{


    public function index(){
        include __DIR__ . '../../views/trabajador/trabajador.php';
    }



    public function trabajador(){
        include __DIR__ . '../../views/trabajador/trabajador.php';

        $db = new Database();
        $conn = $db->connect();


       
    }


}