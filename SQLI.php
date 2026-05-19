<?php
// Ejemplo de inyección SQL muy básica para que Semgrep la detecte
$id = $_GET['id'];
$db = new mysqli('localhost', 'usuario', 'contraseña', 'base_datos');
$db->query("SELECT * FROM usuarios WHERE id = " . $id);

// Ejemplo de inyección de comandos
$comando = $_GET['cmd'];
system($comando);
?>
