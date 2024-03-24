<?php 
require_once("db.php");

function RegistrarPersona($arrayPersona){
    $nom = $arrayPersona["nombres"];
    $ape = $arrayPersona["apellidos"];
    $email = $arrayPersona["email"];
    $celular = $arrayPersona["celular"];
    $usu = $arrayPersona["usuario"];
    $pass = $arrayPersona["password"];
    $Query = "insert into persona (nombres, apellidos, email, celular, usuario, password, estado, esvoluntario)   VALUES('$nom','$ape','$email','$celular','$usu','$pass','A','0')";
    $arrayRespuesta = array();
    if(NonQuery($Query) > 0){
        $arrayRespuesta["rpta"] = true;
        $arrayRespuesta["mensaje"] = "La persona fue registrada correctamente.";
    }else{
        $arrayRespuesta["rpta"] = false;
        $arrayRespuesta["mensaje"] = "Ocurrió un problema en la base de datos.";
    }
    return ConvertirUTF8($arrayRespuesta);
}

function ActualizarVoluntarioPersona($arrayPersona){
    $idpersona = $arrayPersona["idpersona"];
    $Query = "update persona set esvoluntario = '1' where idpersona = $idpersona";
    $arrayRespuesta = array();
    if(NonQuery($Query) > 0){
        $arrayRespuesta["rpta"] = true;
        $arrayRespuesta["mensaje"] = "Gracias por sumarte a nuestro grupo de voluntarios.";
    }else{
        $arrayRespuesta["rpta"] = false;
        $arrayRespuesta["mensaje"] = "Ya eres parte de nuestra red de voludarios.";
    }
    return ConvertirUTF8($arrayRespuesta);
}

function AutenticarPersona($arrayLogin){
     $usu = $arrayLogin["usuario"];
     $pass = $arrayLogin["password"];
     $Query = "select * from persona WHERE usuario = '$usu' and password = '$pass'";
     $Respuesta = ObtenerRegistros($Query);
     $arrayRespuesta = array();
     if(count($Respuesta)>0) {
        $arrayRespuesta["rpta"] = true;	
        $arrayRespuesta["idpersona"] = $Respuesta[0]["idpersona"];
    	$arrayRespuesta["nombres"] = $Respuesta[0]["nombres"];
    	$arrayRespuesta["apellidos"] = $Respuesta[0]["apellidos"];
    	$arrayRespuesta["email"] = $Respuesta[0]["email"];
    	$arrayRespuesta["celular"] = $Respuesta[0]["celular"];
    	$arrayRespuesta["usuario"] = $Respuesta[0]["usuario"];
        $arrayRespuesta["password"] = $Respuesta[0]["password"];
        $arrayRespuesta["esvoluntario"] = $Respuesta[0]["esvoluntario"];
       	$arrayRespuesta["mensaje"] = "Usuario autenticado.";
    }else{
        $arrayRespuesta["rpta"] = false;    
        $arrayRespuesta["mensaje"] = "El usuario o password es incorrecto.";
    }
     return $arrayRespuesta;     
 }

?>