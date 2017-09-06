<?php
require_once '../config.php';
foreach ($_REQUEST as $key => $value) {
    $datarq['datos'][$key]=$_REQUEST[$key];
}
$recurso = new entidadRecursos();
$funcion = $accion;
$funcion($datarq,$recurso);
function buscarCliente($param,$objeto) {
    $resultado=$objeto->buscarCliente($param);
    print json_encode($resultado['datos']);
}
function agregarRecurso($param,$objeto){
    $param['datos']['recursos']['recursoID']="null";
    $resultado=$objeto->crearRecurso($param['datos']['recursos']);
    print json_encode($resultado);
}