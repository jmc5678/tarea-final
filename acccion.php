<html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"]; 
  $APELLIDO_PATERNO = $_POST["paterno"]; 
  $APELLIDO_MATERNO = $_POST["materno"];
  $email = $_POST["correo"];
  $DIRECCION = $_POST["dire"];

  // Aquí puedes realizar cualquier acción con los datos del formulario
  // Por ejemplo, guardarlos en una base de datos o enviar un correo electrónico

  // En este ejemplo, simplemente mostraremos un mensaje de confirmación
   echo "¡Gracias por enviar el formulario, " . $nombre  . "!<br>";
  echo "Nos pondremos en contacto contigo pronto en " . $email;
}
?>
</html>