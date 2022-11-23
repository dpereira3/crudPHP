<?php
    require_once('../../controller/usernameController.php');
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);

?>