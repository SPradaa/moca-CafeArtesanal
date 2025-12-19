<?php
class Categorias {
    private $conn;


    public function __construct($conn){
        $this->conn = $conn;
    }

    function CategoriasAll(){
        $stmt = $this->conn->prepare("SELECT * FROM categorias");
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>