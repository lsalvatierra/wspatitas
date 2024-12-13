<?php
require_once("PersonaDAO.php");
header("Access-Control-Allow-Origin: *"); // Permite solicitudes de cualquier origen
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos
header("Content-Type: application/json; charset=UTF-8");
// Manejo de solicitud OPTIONS para CORS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $postBody = file_get_contents("php://input");
    //print_r(json_decode($postBody));
    $conver = json_decode($postBody,true);
    if(json_last_error()==0){
        $res = ActualizarVoluntarioPersona($conver);
        //print_r($res);
        print_r(json_encode($res));
        http_response_code(200);
    }else{
        http_response_code(400);
    }
}else{
    http_response_code(405);  
}
?>