<?php
require_once("./Config/conexion.php");
require_once("./App/Controller/controllerUser.php");
require_once("./App/Controller/controllerAdmin.php");
require_once("./App/Controller/controllerCarrito.php");
require_once("./App/Controller/controllerFavoritos.php");
require_once("./App/Controller/controllerLogin.php");
require_once("./App/Controller/controllerTrabajador.php");

$database = new Database();
$conn = $database->connect();

$ruta = isset($_GET["ruta"]) ? $_GET["ruta"] :"usuario";

switch ($ruta) {
    case "usuario":
        $controllerUser = new ControllerUser();
        $controllerUser->index($conn);
        break;
    case "administrador":
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->admin($conn);
        break;
    case "carrito":
        $controllerCarrito = new ControllerCarrito();
        $controllerCarrito->carrito($conn);
        break;
    case "favoritos":
        $controllerFavoritos = new ControllerFavoritos();
        $controllerFavoritos->favoritos($conn);
        break;
    case "login":
        $controllerLogin = new controllerLogin();
        $controllerLogin->login($conn);
        break;
    case "registro":
        $controllerLogin = new controllerLogin();
        $controllerLogin->registroUsuario($conn);
        break;
    case "trabajador":
        $controllerTrabajador = new controllerTrabajador();
        $controllerTrabajador->trabajador($conn);
        break;
    case "createProduct":
        $controllerTrabajador = new controllerTrabajador();
        $controllerTrabajador->createProduct($conn);
        break;

    default:
        $controllerUser = new ControllerUser();
        $controllerUser->index($conn);
        break;
}
?>