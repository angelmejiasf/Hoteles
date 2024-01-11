
<?php
class DB
{
    private $pdo;

    public function __construct()
    {
        $cadena_conexion = "mysql:dbname=hoteles;host=localhost";
        $usuario = "root";
        $clave = "";

        try {
            $this->pdo = new PDO($cadena_conexion, $usuario, $clave);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}

?>