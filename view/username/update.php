<?php
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']);

?>