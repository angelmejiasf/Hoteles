<?php
require_once '../db/db.php';
require_once '../models/hoteles_models.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'], $_POST['contraseña'])) {
    $nombre_usuario = $_POST['nombre'];
    $contrasena = $_POST['contraseña'];

    $db = new DB();
    $modelo = new hoteles_models();
    $usuario = $modelo->validarUsuario($nombre_usuario, $contrasena);

    if ($usuario) {
        echo 'Login exitoso. Redirigiendo...';
        header('Location: ./pages/inicioexitoso.html');
        exit();
    } else {
        echo 'Credenciales incorrectas.';
    }
}
?>
