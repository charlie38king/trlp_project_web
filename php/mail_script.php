<?php

$user = $_POST['miniusername'];    /* nombre del usuario */
$email = $_POST['miniemail'];      /* correo del usuario */
$message = $_POST['message'];      /* cuerpo del mensaje */

$button_press = $_POST['send'];


if (isset($_POST['send']))  {
    $destino = 'ccalderons.studyandwork@gmail.com';
    $titulo = 'Email enviado desde la web de The Roth/Logan Project por' . $user;
    $mensaje = wordwrap($message, 70, "\r\n");
    $headers = 'From:' . $email . "\r\n" .
        'Reply-To: ccalderons.studyandwork@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($destino, $titulo, $mensaje, $headers);
} else {
    break;
}



?>