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
        }}
?>