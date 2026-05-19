<?php
// Ejemplo de ejecución de código remoto (RCE) mediante eval()
// Esto activará las alertas de Semgrep inmediatamente

if (isset($_GET['input_usuario'])) {
    $codigo = $_GET['input_usuario'];
    
    // PELIGRO: eval() toma el texto del usuario y lo ejecuta como código PHP real
    eval($codigo);
}
?>
