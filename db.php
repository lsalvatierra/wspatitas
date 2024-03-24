<?php
/*
$server = "192.185.48.144";
$user = "jsantos3_luisuse";
$pswd = "_cwI[wFJeRnD";
$database = "jsantos3_luis";
$port = "3306";


$conexion = new mysqli($server,$user,$pswd,$database,$port);
if($conexion->connect_errno){
    die($conexion->connect_errno);
}

function NonQuery($slqstr, &$conexion = null){
    if(!$conexion)global $conexion;
    $result = $conexion->query($slqstr);
     return $conexion->affect_row;
}
function ObtenerRegistros($slqstr, &$conexion = null){
    if(!$conexion)global $conexion;
    $result = $conexion->query($slqstr);
    $resultArray = array();
    foreach($result as $registros){
        $resultArray[] = $registros;       
    }
    return $resultArray;
}
function ConvertirUTF8($array){
    array_walk_recursive($array, function (&$item, $key){
        if(!mb_detect_encoding($item,'utf-8',true)){
            $item = utf8_encode($item);
        }
    });
    return $array;
}
*/
$server = "localhost";
$user = "root";
$pswd = "";
$database = "bdpatitas";
$port = "3306";

$conexion = new mysqli($server,$user,$pswd,$database,$port);
if($conexion->connect_errno){
    die($conexion->connect_errno);
}

function NonQuery($slqstr, &$conexion = null){
    if(!$conexion)global $conexion;
    $result = $conexion->query($slqstr);
    //return $conexion->affect_row;
    return $conexion->affected_rows;
}
function ObtenerRegistros($slqstr, &$conexion = null){
    if(!$conexion)global $conexion;
    $result = $conexion->query($slqstr);
    $resultArray = array();
    foreach($result as $registros){
        $resultArray[] = $registros;       
    }
    return $resultArray;
}

function ConvertirUTF8($array){
    array_walk_recursive($array, function (&$item, $key){
        if(!mb_detect_encoding($item,'utf-8',true)){
            $item = utf8_encode($item);
        }
    });
    return $array;
}
?>