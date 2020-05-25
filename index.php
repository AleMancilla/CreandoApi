<?php
    # require_once('db.php');
    # $query = "select * from persona";
    # $resultado = obtenerRegistros($query);
    # print_r($resultado);

#print("Hola Mari :*");
require_once('utilidades.php');

if(isset($_GET['url'])){
    $urlRoute = $_GET['url'];
    if($_SERVER['REQUEST_METHOD']=='GET'){
        #echo "GET";

        
        #print($urlRoute);
        $CI = intval(preg_replace('/[^0-9]+/','',$urlRoute),10);
        #print($numero);

        switch($urlRoute){
            case "personas": 
                $res = obtenerPersonas();
                #print('{ "vector":');
                print_r( json_encode($res) );
                http_response_code(200);
                #print('}');
            case "personas/$CI": 
                $res = obtenerPersonasCi($CI);
                #print('{ "vector":');
                print_r( json_encode($res) );
                http_response_code(200);
                #print('}');
            default ;
        }

        http_response_code(200);
    } else if($_SERVER['REQUEST_METHOD']=='POST'){
        $postBody = file_get_contents("php://input");
        $convert = json_decode($postBody,true);

        if(json_last_error()==0){
            # print_r( $convert);
            # http_response_code(200);
            switch($urlRoute){
                case "personas": 
                    CrearPersona($convert);
                    http_response_code(200);
                    #print('}');
                default ;
            }
        }else{
            http_response_code(400);
        }

        
    }else {
        http_response_code(405);
    }
} else{
    //
}


?>