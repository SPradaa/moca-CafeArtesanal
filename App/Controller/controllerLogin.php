<?php
require_once __DIR__ . '../../Model/Usuarios.php';

class controllerLogin{

    public function index(){
        include __DIR__ . '../../views/login.php';
    }

    public function login(){    
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            include __DIR__ . '../../views/login.php';
            return;
        }

        $documento = $_POST['documento'];
        $password = $_POST['password'];


    if(empty($documento) || empty($password)){
        echo"<script>alert('Todos los campos son obligatorios')</script>";
        include __DIR__ . '../../views/login.php';
            return;
        }

        $db = new Database();
        $conn = $db->connect();

        $modeloUsuarios = new Usuarios($conn);
        $usuarios = $modeloUsuarios->ConsultarUsuario($documento);

    if($usuarios && password_verify($password, $usuarios['contrasena'])){
            session_start();
            $_SESSION['documento'] = $usuarios['id'];
            $_SESSION['nombre'] = $usuarios['nombreUsuario'];
            $_SESSION['correo'] = $usuarios['correo'];
            $_SESSION['telefono'] = $usuarios['telefono'];
            $_SESSION['rol'] = $usuarios['id_rol'];

        if($usuarios['id_rol'] == 1){
                header("Location: index.php?ruta=administrador");
                exit();
        }else if($usuarios['id_rol'] == 2){
                header("Location: index.php?ruta=trabajador");
                exit();
        }else if($usuarios['id_rol'] == 3){
                header("Location: index.php?ruta=usuario");
                exit();
            }
    }else{
        echo"<script>alert('Usuario o contraseña incorrectos')</script>";
        include __DIR__ . '../../views/login.php';

    }
    
    
    }


public function registroUsuario(){
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            include __DIR__ . '../../views/login.php';
            return;
        }


        $documento = $_POST['documento'] ?? null;
        $nombre = $_POST['nombre'] ?? null;
        $correo = $_POST['correo'] ?? null;
        $telefono = $_POST['telefono'] ?? null;
        $Precontrasena = $_POST['password'] ?? null;
        $password = password_hash($Precontrasena, PASSWORD_DEFAULT);

        if(!$documento || !$nombre || !$correo || !$telefono || !$Precontrasena){
            echo"<script>alert('Todos los campos son obligatorios')</script>";
            include __DIR__ . '../../views/login.php';
            return;
        }
        $db = new Database();
        $conn = $db->connect();

        $modeloUsuarios = new Usuarios($conn);

        if($modeloUsuarios->ConsultarUsuario($documento)){
            echo '<script>alert("El usuario ya existe")</script>';
            include __DIR__ . '../../views/login.php';
            return;
        }

        if($modeloUsuarios->registroUsuario($documento, $nombre, $correo, $telefono, $password)){
            echo '<script>alert("Usuario registrado correctamente")</script>';
            include __DIR__ . '../../views/login.php';
            return;
        }else{
            echo '<script>alert("Error al registrar el usuario")</script>';
            include __DIR__ . '../../views/login.php';
            return;
        }

         include __DIR__ . '../../views/login.php';
        

    }
}

