<?php
// Archivo suscripcion.php

// Verificar si se recibió una petición POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el valor del campo de correo electrónico
  $email = $_POST["email_address"];

  // Validar que se haya ingresado un correo electrónico válido
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor ingresa un correo electrónico válido.";
    exit;
  }

  // Procesar la suscripción del correo electrónico aquí
  // (agregar la lógica de suscripción a tu sistema)

  // Mostrar mensaje de éxito
  echo "¡Gracias por suscribirte!";
}
?>
