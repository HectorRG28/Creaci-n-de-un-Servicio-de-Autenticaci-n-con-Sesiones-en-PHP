<?php
session_start();

// Control de acceso
if (!isset($_SESSION['username'])) {
    [cite_start]// Redirgir a pantalla sin permisos
    header("Location: permisos.php"); [cite_start]
    exit();
}

// Datos mostrados bienvenida
$nombre_usuario = htmlspecialchars($_SESSION['username']); [cite_start]]
$hora_actual = date("H:i:s"); [cite_start]
$mensaje_bienvenida = "¡Disfruta de tu acceso exclusivo al sistema!"; [cite_start]
// Incluimos el HTML
include 'bienvenida.html';
?>