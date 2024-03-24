<?php 
require_once("db.php");

function ListarMascotasPerdidas(){
    $Query = "select mp.nommascota, DATE_FORMAT(mp.fechaperdida,'%d/%m/%Y') AS fechaperdida , mp.urlimagen, mp.lugar, mp.contacto FROM mascotaperdida mp WHERE mp.idtipomascota = 1 and mp.estado = '1' ORDER BY mp.fechaperdida DESC";
    $Respuesta = ObtenerRegistros($Query);
    return ConvertirUTF8($Respuesta);
 }

?>