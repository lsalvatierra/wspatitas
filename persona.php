<?php
require_once("PersonaDAO.php");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *"); // Permite solicitudes de cualquier origen
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $postBody = file_get_contents("php://input");
    $conver = json_decode($postBody, true);
    //print_r($conver);
    if(json_last_error()==0){
        $res = RegistrarPersona($conver);
        print_r(json_encode($res));
        http_response_code(200);
    }else{
        http_response_code(400);
    }
    http_response_code(200);
}else{
    http_response_code(405);  
}
?>