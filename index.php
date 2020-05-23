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
    $CI = intval(preg_replace('/[^0-9]+/','',$urlRoute),10);
    #print($numero);

    switch($urlRoute){
        case "personas": 
            $res = obtenerPersonas();
            #print('{ "vector":');
            print_r( json_encode($res) );
            #print('}');
        case "personas/$CI": 
            $res = obtenerPersonasCi($CI);
            #print('{ "vector":');
            print_r( json_encode($res) );
            #print('}');
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