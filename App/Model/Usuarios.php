<?php
class usuarios{
    private $conn; 
    public function __construct($conn){
        $this->conn = $conn;
    }

    function usuariosAll(){
        $stmt = $this->conn->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function ConsultarUsuario($documento){
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = :documento");
        $stmt->execute([":documento"=>$documento]);
        return $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function registroUsuario($documento, $nombre, $correo, $telefono, $contrasena){
    $stmt = $this->conn->prepare("
        INSERT INTO usuarios 
        (id, nombreUsuario, correo, telefono, contrasena, id_rol, fecha_registro)
        VALUES 
        (:documento, :nombre, :correo, :telefono, :contrasena, :id_rol, :fecha_registro)
    ");

    return $stmt->execute([
        ":documento"      => $documento,
        ":nombre"         => $nombre,
        ":correo"         => $correo,
        ":telefono"       => $telefono,
        ":contrasena"     => $contrasena,
        ":id_rol"         => 3,
        ":fecha_registro" => date("Y-m-d H:i:s")
    ]);
}
}
?>