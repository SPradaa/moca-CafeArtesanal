<?php
    class Productos {
    private $conn;
        public function __construct($conn){
        $this->conn = $conn;
    }

        function ProductosAll(){
        $stmt = $this->conn->prepare("SELECT * FROM productos");
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    function ProductosCreate($nombre, $descripcion, $precio, $precioDescuento, $imagen_url, $categoria_id, $estado)
    {
        $stmt = $this->conn->prepare("INSERT INTO productos (nombre, descripcion, precio, precioDescuento,imagen_url, categoria_id, estado) VALUES (:nombre, :descripcion, :precio, :precioDescuento, :imagen_url, :categoria_id, :estado)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':precioDescuento', $precioDescuento);
        $stmt->bindParam(':imagen_url', $imagen_url);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':estado', $estado);
        $stmt->execute();
        return $stmt->rowCount();
    }


   
}
