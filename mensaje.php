<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Construir el enlace de WhatsApp con el mensaje personalizado
    $whatsapp_link = "https://wa.me/59169580835?text=Hola mi%20$nombre,%20$email,20$nombre,%20$nombre,20$nombre,%20$nombre";

    // Redirigir al enlace de WhatsApp
    header("Location: $whatsapp_link");
    exit;
}
?>
