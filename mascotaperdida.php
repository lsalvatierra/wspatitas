<?php 
require_once("MascotaDAO.php");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] == 'GET') {
 	$res = ListarMascotasPerdidas();
 	print_r(json_encode($res));
 	http_response_code(200);
}else {
	http_response_code(400);	
}
?>