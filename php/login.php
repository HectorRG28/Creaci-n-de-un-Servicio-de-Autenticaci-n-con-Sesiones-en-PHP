<?php
session_start();
// Preparamos la variable de error antes de incluir el HTML
$error_message = '';
if (isset($_SESSION['error'])) {
    $error_message = htmlspecialchars($_SESSION['error']);
    unset($_SESSION['error']);
}
// Incluimos el HTML
include 'login.html'; 
?>