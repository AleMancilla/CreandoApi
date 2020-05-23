<?php 

    require_once('db.php');

    function obtenerPersonas(){
        $consulta = "SELECT * FROM persona";
        $res = obtenerRegistros($consulta);
        return ConvertirUTF8($res);
    }
    function obtenerPersonasCi($ci){
        $consulta = "SELECT * FROM persona WHERE CI = $ci";
        $res = obtenerRegistros($consulta);
        return ConvertirUTF8($res);
    }
?>