<?php

// Dirección de correo electrónico y contraseña de tu cuenta de Gmail
$username = 'wortika4@gmail.com';
$password = '44wortika12$';

// Dirección de correo electrónico del destinatario
$to = 'hanntronico@gmail.com';

// Asunto y cuerpo del mensaje
$subject = 'Asunto del correo';
$message = 'Cuerpo del correo';

// Cabeceras del correo
$headers = array(
  'From' => $username,
  'Reply-To' => $username,
  'X-Mailer' => 'PHP/' . phpversion()
);

// Opciones del servidor
$options = array(
  'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  )
);

// Conecta al servidor de Gmail a través de IMAP
$inbox = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $username, $password, 0, 1, $options);

// Envía el correo
$result = imap_mail($to, $subject, $message, implode("\r\n", $headers));

// Cierra la conexión
imap_close($inbox);

if ($result) {
  echo 'Correo enviado';
} else {
  echo 'Error al enviar el correo';
}

?>