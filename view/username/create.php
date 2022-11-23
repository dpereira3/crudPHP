<?php
    
    require_once('../../view/head/head.php');
?>

<form action="store.php" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Usuario:</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="index.php" class="btn btn-danger">cancelar</a>
</form>

<?php
    require_once('../../view/head/footer.php');
?>
