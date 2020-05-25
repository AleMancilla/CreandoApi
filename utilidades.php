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

    //INSERT INTO `persona` (`CI`, `NOMBRE`, `APEPATERNO`, `APEMATERNO`, `NACIONALIDAD`, `SEXO`, `FECHANAC`, `TELEFONO`, `CODREO`, `PARENTESCO`) VALUES ('321', 'MARI', 'BELLA', 'PRINCESA', 'CELESTIAL', 'FEMENINO', '2020-05-26', '655371', '858A', 'HERMANA');
    function CrearPersona($array){
        $CI = $array[0]["CI"];
        $NOMBRE = $array[0]["NOMBRE"];
        $APEPATERNO = $array[0]["APEPATERNO"];
        $APEMATERNO = $array[0]["APEMATERNO"];
        $NACIONALIDAD = $array[0]["NACIONALIDAD"];
        $SEXO= $array[0]["SEXO"];

        $query = "INSERT INTO `persona` (`CI`, `NOMBRE`, `APEPATERNO`, `APEMATERNO`, `NACIONALIDAD`, `SEXO`) VALUES ('$CI', '$NOMBRE', '$APEPATERNO', '$APEMATERNO', '$NACIONALIDAD', '$SEXO');";
        NonQuery($query);
        return true;
    }
?>