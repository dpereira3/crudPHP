<?php
    require_once('./view/head/head.php');
?>

<a href="./view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>

<?php
echo 'getenv ';
echo getenv('CREATOR');
echo '<br>';
echo '$ env';
echo $_ENV["CREATOR"];
echo '<br>';
echo '$ server';
echo $_SERVER["CREATOR"];
echo '<br>';
?>

<?php
    require_once('./view/head/footer.php');
?>
