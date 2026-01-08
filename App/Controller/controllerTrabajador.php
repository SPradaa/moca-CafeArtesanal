<?php
require_once __DIR__ . ("../../Model/Usuarios.php");
require_once __DIR__ . ("../../Model/Pedidos.php");
require_once __DIR__ . ("../../Model/Categorias.php");
require_once __DIR__ . ("../../Model/Estados.php");
require_once __DIR__ . ("../../Model/Productos.php");
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

        // Productos
        $modelProductos = new Productos($conn);
        $productos = $modelProductos->ProductosAll();

        $CountProductos = count($productos);

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

 public function createProduct()
{
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: index.php?controller=trabajador");
        exit;
    }

    $NombreProducto      = $_POST['nombreNuevoProducto'];
    $PrecioProducto      = $_POST['precioNuevoProducto'];
    $PrecioDescuento     = $_POST['precioDescuentoNuevoProducto'];
    $DescripcionProducto = $_POST['descripcionNuevoProducto'];
    $CategoriaProducto   = $_POST['categorias'];
    $EstadoProducto      = $_POST['estadoNuevoProducto'];

    // VALIDAR IMAGEN
    if (!isset($_FILES['imagenNuevoProducto']) || $_FILES['imagenNuevoProducto']['error'] !== 0) {
        header("Location: index.php?controller=trabajador&error=imagen");
        exit;
    }

    $carpetaImagen = __DIR__ . '/../../Assets/Images/productos/';
    $imagen = $_FILES['imagenNuevoProducto'];

    $extension = pathinfo($imagen['name'], PATHINFO_EXTENSION);
    $nombreLimpio = preg_replace('/[^A-Za-z0-9]/', '', $NombreProducto);
    $nombreArchivo = $nombreLimpio . '_' . time() . '.' . $extension;
    $rutaFisica = $carpetaImagen . $nombreArchivo;

    if (!move_uploaded_file($imagen['tmp_name'], $rutaFisica)) {
        header("Location: index.php?controller=trabajador&error=subida");
        exit;
    }

    $rutaImagen = './Assets/Images/productos/' . $nombreArchivo;

    $db = new Database();
    $conn = $db->connect();

    $producto = new Productos($conn);
    $producto->ProductosCreate(
        $NombreProducto,
        $DescripcionProducto,
        $PrecioProducto,
        $PrecioDescuento,
        $rutaImagen,
        $CategoriaProducto,
        $EstadoProducto
    );

  header("Location: index.php?ruta=trabajador&success=producto_creado");
exit;

}


}
