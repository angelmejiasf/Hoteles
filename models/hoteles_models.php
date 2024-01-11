<?php
// require_once("../db/db.php");

require_once __DIR__ . '/../db/db.php';


class hoteles_models
{
    private $pdo;
    private $bd;



    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->getPDO();
    }


    public function gethoteles()
    {

        $stmt = $this->pdo->prepare('SELECT * FROM hoteles');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function validarUsuario($nombre_usuario, $contrasena)
{
    try {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $stmt->bindParam(':nombre', $nombre_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Verifica la contraseña
            if (password_verify($contrasena, $usuario['contraseña'])) {
                // Contraseña correcta
                return $usuario;
            } else {
                // Contraseña incorrecta
                return false;
            }
        } else {
            // Usuario no encontrado
            return false;
        }
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
        // Puedes agregar más información de depuración si es necesario
        echo "<pre>";
        var_dump($e);
        echo "</pre>";
        
    }
}
}
