<?php
require_once("PersonaDAO.php");
header("Content-Type: application/json; charset=UTF-8");
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