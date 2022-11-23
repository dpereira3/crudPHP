<?php
    
    require_once('../../view/head/head.php');
    require_once('../../controller/usernameController.php');
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="<?php echo '/crud/view/username/create.php' ?>" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#Modal<?= $row[0]?>">Eliminar</a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="Modal<?= $row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
    require_once('../../view/head/footer.php');
?>