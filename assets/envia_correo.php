<?php

require 'assets/phpmailer/vendor/autoload.php';

// Crea una instancia de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer;

// Configura el servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'wortika4@gmail.com';
$mail->Password = 'gtettztbwzxzokyd';
$mail->SMTPSecure = 'tls';
// $mail->SMTPDebug = 2;
$mail->Port = 587;

// Configura el remitente y el destinatario
$mail->setFrom('wortika4@gmail.com', 'Wortika');
// $mail->addAddress('hanntronico@gmail.com', 'Pedro Luis Bernal');
$mail->addAddress('ronil.mondragon.m@gmail.com', 'Ronil Mondragón');

// Configura el contenido del correo electrónico
$mail->isHTML(true);
$mail->Subject = 'Bienvenido a Wortika';
$mail->Body    = 'Bienvenido a Wortika, haz click en: <br> Ahora puedes acceder a la plataforma';
$mail->AltBody = 'Contenido del correo en texto plano';

// Adjunta un archivo al correo
// $mail->addAttachment('ruta/del/archivo.pdf');


if (!$mail->send()) {
    echo 'El correo no pudo ser enviado.'.'<br>';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'El correo ha sido enviado correctamente.';
}


?>