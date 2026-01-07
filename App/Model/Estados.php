<?php 

class Estados{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }


    function EstadosAll(){
        $stmt = $this->conn->prepare("SELECT * FROM estado");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function EstadosProductos(){
        $stmt=  $this->conn->prepare("SELECT * FROM estado WHERE id_estado IN (1,2,3)");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}

?>
