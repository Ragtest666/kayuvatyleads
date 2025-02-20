<?php
if (isset($_POST['registrar'])) {
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        echo '<div class="alert alert-danger">No se pudo enviar el correo. Campo vacío.</div>';
    } else {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-danger">Correo electrónico inválido.</div>';
        } else {
            $to = 'info@kayuvaty.mx';
            $subject = 'Lead de Pagina Web';
            $message = "Correo electrónico: $email \r\n";
            $headers = "From: no-reply@tudominio.com\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            if (mail($to, $subject, $message, $headers)) {
                echo '<div class="alert alert-success">¡Éxito! Correo enviado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger">No se pudo enviar el correo.</div>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST" >
                <div class="formulario-registro">
                    <div class="wrap-input100">
                        <!-- Input en español -->
                        <input type="text" class="input100 cambio_idioma_ES" id="email_es" name="" placeholder="Introduce tu correo" required style="display: none;">
                        <!-- Input en inglés -->
                        <input type="email" class="input100 cambio_idioma_EN" id="email_en" name="email" placeholder="Enter your email address" required>
                        <button class="btn-registro" type="submit" name="registrar">
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </button>
                    </div>
                    <p id="error-mensaje" style="color: red; display: none;"></p>
                </div>
            </form>
</body>
</html>