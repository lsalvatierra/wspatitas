<?php
require_once("PersonaDAO.php");
header("Content-Type: application/json; charset=UTF-8");
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