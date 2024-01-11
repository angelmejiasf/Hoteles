<?php

include 'models/hoteles_models.php';
include 'views/hoteles_vista.php';
include 'controllers/hoteles_controller.php';


$HotelesController = new HotelesController();

$HotelesController->listar();


?>


<form method="post" action="./controllers/login_controller.php">
    <label for="nombre">Nombre de usuario:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required>
    <br>
    <input type="submit" value="Iniciar sesión">
</form>

