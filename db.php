<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombredb = "recintodb"; 

$CONECDB = mysqli_connect($servidor,$usuario,$password,$nombredb );

if($CONECDB -> connect_error)
    die($CONECDB->connect_error);

echo "CONEXION EXITOSA";




?>