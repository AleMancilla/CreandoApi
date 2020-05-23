<?php 

    require_once('db.php');

    function obtenerPersonas(){
        $consulta = 'SELECT * FROM persona';
        $res = obtenerRegistros($consulta);
        return $res;
    }
?>