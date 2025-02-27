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
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kayuvaty | Próximamente en Nuevo Vallarta</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Eleva tu vida. Un desarrollo estratégico en 4 etapas donde el lujo y la exclusividad se encuentran. Descubre un nuevo nivel de sofisticación en Nuevo Vallarta.">
    <meta name="keywords" content="Departamentos de lujo, Venta, Locales comerciales, Nuevo Nayarit, Nuevo Vallarta, Bahía de Banderas, Residenciales, Amenidades">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">
    <meta property="og:title" content="Kayuvaty | Departamentos de Lujo en Nuevo Vallarta">
    <meta property="og:description" content="Eleva tu vida. Un desarrollo estratégico en 4 etapas donde el lujo y la exclusividad se encuentran. Descubre un nuevo nivel de sofisticación en Nuevo Vallarta.">
    <meta property="og:url" content="https://www.kayuvaty.mx">
    <meta property="og:image" content="https://www.kayuvaty.mx/imgs/Render.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kayuvaty | Departamentos de Lujo en Nuevo Vallarta">
    <meta name="twitter:description" content="Eleva tu vida. Un desarrollo estratégico en 4 etapas donde el lujo y la exclusividad se encuentran. Descubre un nuevo nivel de sofisticación en Nuevo Vallarta.">
    <meta name="twitter:image" content="https://www.kayuvaty.mx/imgs/Render.webp">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="canonical" href="https://www.kayuvaty.mx">
    <link rel="icon" href="imgs/favicon.webp" type="image/webp">
    <link rel="apple-touch-icon" href="imgs/favicon.webp">
    <link rel="mask-icon" href="imgs/favicon.webp">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-1KE6R2GG5N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-1KE6R2GG5N');
    </script>
    <script defer src="js/script.js"></script>
</head>

<body>

    <header class="fixed-top">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-between">
                <!-- Logo -->
                <div class="col-6 col-md-2 d-flex justify-content-start">
                    <img class="logo" src="imgs/Logo png blanco.webp" alt="Logo">
                </div>
                <!-- Botón de cambio de idioma -->
                <div class="col-6 col-md d-flex justify-content-end">
                    <ul class="dropdown" aria-labelledby="dropdownMenuLink1" style="margin: 0px; background: none;">
                        <li>
                            <button id="cambioIdioma" class="scrollto btn enlace_cambio_idioma" data-lantext="EN">EN</button>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    </header>

    <div class="containers bg-pan-right">
        <div class="izq col-4">
            <h1 class="cambio_idioma_ES h1 Techovier text-uppercase tracking-in-contract">Próximamente</h1>
            <h1 class="cambio_idioma_EN h1 Techovier text-uppercase tracking-in-contract" style="display:none !important;">coming soon </h1>
            <br>
            <br>
            <p class="cambio_idioma_ES GeneralSans text-uppercase md-5 tracking-in-expand-fwd"><strong>DEPARTAMENTOS DE LUJO CON TODOS LOS SERVICIOS, EN UN SOLO LUGAR EN NUEVO NAYARIT</strong></p>
            <p class="cambio_idioma_EN GeneralSans text-uppercase md-5 tracking-in-expand-fwd" style="display:none !important;"><strong>LUXURY APARTMENTS WITH ALL THE SERVICES, IN ONE PLACE IN NUEVO NAYARIT</strong></p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p class="cambio_idioma_ES GeneralSans text-uppercase md-5 tracking-in-expand-fwd"><strong>Regístrate para ser el primero en conocer este magnífico desarrollo</strong></p>
            <p class="cambio_idioma_EN GeneralSans text-uppercase md-5 tracking-in-expand-fwd" style="display:none !important;"><strong>Sign up to be the first to know about this magnificent development.</strong></p>
            <form action="#" method="POST" onsubmit="return validarCorreo(event)">
                <div class="formulario-registro">
                    <div class="wrap-input100">
                        <!-- Input en español -->
                        <input type="email" class="input100 cambio_idioma_ES" id="email_es" name="" placeholder="Introduce tu correo" required style="display: none;">
                        <!-- Input en inglés -->
                        <input type="email" class="input100 cambio_idioma_EN" id="email_en" name="" placeholder="Enter your email address" required>
                        <button class="btn-registro" type="submit" name="registrar">
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </button>
                    </div>
                    <p id="error-mensaje" style="color: red; display: none;"></p>
                </div>
            </form>


        </div>

    </div>

    <footer class="fixed-bottom footer d-flex flex-wrap align-items-center justify-content-between">
        <div class="logos d-flex">
            <img class="footer-logo" src="imgs/logo1.webp" alt="Imagen 1">
            <img class="footer-logo" src="imgs/logo2.webp" alt="Imagen 2">
            <img class="footer-logo" src="imgs/logo3.webp" alt="Imagen 3">
        </div>
        <div class="d-flex align-items-center flex-grow-1 text-container">
            <p class="GeneralSans cambio_idioma_ES" style="font-size: 12px;">&copy; 2025 KAYUVATY. Todos los derechos reservados.</p>
            <p class="GeneralSans cambio_idioma_EN" style="display: none !important; font-size: 12px;">&copy; 2025 KAYUVATY. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 1000);
    </script>

</body>

</html>