<?php
    # require_once('db.php');
    # $query = "select * from persona";
    # $resultado = obtenerRegistros($query);
    # print_r($resultado);

#print("Hola Mari :*");
require_once('utilidades.php');

if($_SERVER['REQUEST_METHOD']=='GET'){
    #echo "GET";

    $urlRoute = $_GET['url'];
    #print($urlRoute);

    switch($urlRoute){
        case "personas": 
            $res = obtenerPersonas();
            print_r($res);
        default ;
    }

    http_response_code(200);
} else if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "POST";
    http_response_code(200);
}else {
    http_response_code(405);
}

?>