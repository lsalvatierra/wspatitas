<?php 
require_once("MascotaDAO.php");
header("Access-Control-Allow-Origin: *"); // Permite solicitudes de cualquier origen
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Encabezados permitidos
header("Content-Type: application/json; charset=UTF-8");
// Manejo de solicitud OPTIONS para CORS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'GET') {
 	$res = ListarMascotasPerdidas();
 	print_r(json_encode($res));
 	http_response_code(200);
}else {
	http_response_code(400);	
}
?>