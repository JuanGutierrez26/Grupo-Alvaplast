<?php
// Recibe los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Dirección de correo electrónico a la que se enviará el formulario
$para = 'cooreo@gmail.com';

// Asunto del correo electrónico
$subject = 'Nuevo mensaje del formulario de contacto';

// Construye el cuerpo del correo electrónico
$body = "Este mensaje es enviador por $name\n";
$body .= "Correo: $email\n";
$body .= "Asunto: $subject\n";
$body .= "Mensaje:\n$message";

// Encabezados para el correo electrónico
$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

// Envía el correo electrónico
$mail_sent = mail($para, $subject, $body, $headers);

// Verifica si el correo electrónico se ha enviado correctamente
if ($mail_sent) {
    echo '¡Gracias! Su mensaje ha sido enviado correctamente.';
} else {
    echo 'Hubo un problema al enviar su mensaje. Por favor, inténtelo de nuevo.';
}
?>
