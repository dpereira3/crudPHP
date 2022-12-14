<?php
    define('ROOT_DIR', realpath(__DIR__.'/..'));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            echo (empty($_GET['id']))
            ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
            : ((strpos($_SERVER['REQUEST_URI'], 'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id']);
        ?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid bg-dark p-2 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo '/crudphp/index.php'?>">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Username
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="/crudphp/view/username/index.php">Usuarios</a>
                    <a class="dropdown-item" href="<?php echo '/crudphp/view/username/create.php'?>">Agregar nuevos usuarios</a>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
    </div>
<div class="container-fluid">
