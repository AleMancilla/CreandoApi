<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombredb = "recintodb"; 

$CONECDB = mysqli_connect($servidor,$usuario,$password,$nombredb );

if($CONECDB -> connect_error)
    die($CONECDB->connect_error);

# echo "CONEXION EXITOSA";

// guardar , modificar , eliminar
function NonQuery($consulta, &$CONECDB =null){

    if(!$CONECDB) global $CONECDB;
    $result = $CONECDB->query($consulta);
    return $CONECDB -> affected_rows;
}

// select
function obtenerRegistros($consulta, &$CONECDB =null){

    if(!$CONECDB) global $CONECDB;
    $result = $CONECDB->query($consulta);
    $resultArray = array();
    foreach ($result   as $obj) {
        $resultArray[] = $obj;
    }

    return $resultArray;


}


?>