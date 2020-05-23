<?php
    require_once('db.php');
    $query = "select * from persona";
    $resultado = obtenerRegistros($query);
    print_r($resultado);
?>