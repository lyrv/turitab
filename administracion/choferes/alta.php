<script>
    $(document).ready(function(){
        $( ".asignarpermisos.btn.btn-info" ).click(function(event) {
            alert($( this ).val());
            //borrarCotizacion($( this ).val());
        });
    });


</script>
    
<div class="container-fluid">
<?php
$controlador = new controllerRecursos();
print_r($controlador);
$listado = $controlador->listado();
?>
    <div class="content">
        <div class="panel panel-default">
            <div class="panel-heading">Administración de Permisos</div>
            <div class="panel-body">
                <code><?= print_r($listado);?></code>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <td colspan="5">
<?php
include('formRecursos.php');
?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">DESCRIPCION</th>
                        <th class="text-center">FECHA DE CREACION</th>
                        <th class="text-center">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
<?php
if($listado['resultado']){
    foreach ($listado['datos'] as $key => $value) {
?>
                    <tr class="text-center">
                        <td><?= $listado['datos'][$key]['recursoID'] ?></td>
                        <td><?= $listado['datos'][$key]['nombre'] ?></td>
                        <td><?= $listado['datos'][$key]['descripcion'] ?></td>
                        <td><?= $listado['datos'][$key]['fecha_registro'] ?></td>
                        <td>
                            <button type="button" class="asignarpermisos btn btn-info" id="asignarpermisos" value="<?= $listado['datos'][$key]['recursoID'] ?>" title="Asignar Permisos"><span title="Asignar Permisos" class="glyphicon glyphicon-wrench"></span></button>
                            <button type="button" class="imprimir btn btn-success" id="imprimir" value="<?= $listado['datos'][$key]['recursoID'] ?>" title="Imprimir Ficha Usuario"><span title="Imprimir Ficha" class="glyphicon glyphicon-print"></span></button>
                            <button type="button" class="editar btn btn-info" id="editar" value="<?= $listado['datos'][$key]['recursoID'] ?>" title="Editar Usuario"><span title="Editar" class="glyphicon glyphicon-pencil"></span></button>
                            <button type="button" class="borrar btn btn-danger" id="borrar" value="<?= $listado['datos'][$key]['recursoID'] ?>" title="Borrar Usuario"><span title="Borrar" class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
<?php
    } 
}
?>                    
                    
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            <div class="panel-footer">Mostrando <?= $_SESSION['resultados'] ?> de <?= $listado['filas'] ?></div>
        </div>
    </div>
</div>