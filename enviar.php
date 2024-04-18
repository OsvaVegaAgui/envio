<?php

$nombre = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

$destino = 'osvaldo.vega.aguilar@gmail.com';
$asunto = 'Hola Mundo';

$cuerpo = "<p>Hola Mundo</p>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$headers = "From: $nombre <$email>\r\n";

$headers = "Return-path: $destino\r\n";

mail($destino,$asunto,$cuerpo,$headers);

echo "ENVIADO GLORIA A DIOS";
?>