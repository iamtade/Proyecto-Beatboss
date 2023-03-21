<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = "agustinhalli@hotmail.com";
$asunto = 'Este mail fue enviado desde la página de Beat Boss';

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>