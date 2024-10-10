<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir los archivos de PHPMailer
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $asunto = htmlspecialchars($_POST['subject']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hola@lonkydev.com';  // Tu correo de Gmail
        $mail->Password = '$%dEv2024dEv%$';      // Tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465;

        // Configurar remitente y destinatario
        $mail->setFrom($email, $nombre); // Correo del remitente (quien completa el formulario)
        $mail->addAddress('hola@lonkydev.com'); // El correo que recibirá el mensaje

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto: ' . $asunto;
        $mail->Body    = "Nombre: $nombre<br>Email: $email<br>Mensaje:<br>$mensaje";
        $mail->AltBody = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje"; // Texto plano sin HTML

        // Enviar el correo
        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo "error: {$mail->ErrorInfo}";
    }
} else {
    echo 'error';
}
?>
