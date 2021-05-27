<link rel="stylesheet" href="email.css">

<?php


$destinatario = 'adriansantillan2603@gmail.com';
$asunto = $_POST['asunto'];

$mensaje= '<html><body class="bodyMensaje"> <strong>Hola</strong>, Soy ' . $_POST['nombrePersona'].'.<br> Mi consulta es la siguiente:<br>'.$_POST['mensaje'].'<br>Gracias por su atencion.</body></html>';
$cabecera = 'From: adriansantillan2603@outlook.com'. '\r\n';
$cabecera .= 'MIME-Version: 1.0'."\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";

$Enviado = mail($destinatario,$asunto,$mensaje,$cabecera);

if($Enviado){
    echo 'Correo enviado correctamente.';
}
else{
    echo 'Error al enviar correo.';
}

?>