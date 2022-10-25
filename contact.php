<?php 
error_reporting(0); 
$nombreCompleto = $_POST['nombreCompleto']; 
$correo_electronico= $_POST['email']; 
$tipoinvitacion = $_POST['tipoinvitacion']; 
$msj=$_POST['msj']; 

$header = 'From: ' . $mail . ", Tipo de invitacion ".$tipoinvitacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por :" . $nombreCompleto . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n"; 
$mensaje .= "Mensaje: " . $_POST['msj'] . " \r\n"; 
$mensaje .= "Tipo de invitacion: " . $_POST['tipoinvitacion'] . " \r\n"; 

$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'contacto@palmainvitaciones.com'; 
$asunto = 'Palma Invitaciones'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

require 'index.html';

?> 