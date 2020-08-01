<?php
$destino = "edgarhuerta15@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["e-mail"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "nombre: " . $nombre . "\nCorreo: " . $correo . "\ntelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "contacto", $contenido);
header("location:index.html");
?>
