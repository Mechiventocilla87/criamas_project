<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$perro = $_POST['tPerro'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "osmarycarrillo@gmail.com";
$asunto = "Solicitud de Traslado desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Perro: $perro \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header("location:formulario_de_contacto/mensaje-de-envio.html");



