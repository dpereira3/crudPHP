<?php
    require_once('../../view/head/head.php');
    require_once('../../controller/usernameController.php');
    $obj = new usernameController();
    $data = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $data[0]?>" class="btn btn-success">Actualizar</a>
    <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</a>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Una vez eliminado no se podra recuperar el registro.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                <a href="delete.php?id=<?= $data[0]?>" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $data[0]?></td>
            <td scope="col"><?= $data['nombre']?></td>
        </tr>
    </tbody>
</table>
<?php
    require_once('../../view/head/footer.php');
?>
