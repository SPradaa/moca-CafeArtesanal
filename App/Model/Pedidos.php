<?php
class Pedidos {
    private $conn; 
    public function __construct($conn){
        $this->conn = $conn;
    }

    function PedidosAll(){
        $stmt = $this->conn->prepare("SELECT * FROM pedidos");
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }}
?>