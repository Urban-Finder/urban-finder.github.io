<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = "Nombre: " . $name . "<br>Correo: " . $email .  "<br>Mensaje: " . $message;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;  // Sacar esta línea para no mostrar salida debug
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Host de conexión SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'lopezbarrientosrosadamaris@gmail.com';                 // Usuario SMTP
    $mail->Password = 'rosa1234';                           // Password SMTP
    $mail->SMTPSecure = 'tls';                            // Activar seguridad TLS
    $mail->Port = 587;                                    // Puerto SMTP

    $mail->setFrom('lopezbarrientosrosadamaris@gmail.com' , $name);		// Mail del remitente
    $mail->addAddress('lopezbarrientosrosadamaris@gmail.com');     // Mail del destinatario
 
    $mail->isHTML(true);
    $mail->Subject = $subject;  // Asunto del mensaje
    $mail->Body    = $body;    // Contenido del mensaje (acepta HTML)
 
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, ', $mail->ErrorInfo;
}