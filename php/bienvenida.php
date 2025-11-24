<?php
session_start();

// Requisito 3: Pantalla de no tienes permisos (control de acceso)
if (!isset($_SESSION['username'])) {
    [cite_start]// Redirigir automáticamente a la pantalla de no tienes permisos [cite: 58]
    header("Location: permisos.php"); [cite_start]// [cite: 67]
    exit();
}

// Datos que se mostrarán en bienvenida.html
$nombre_usuario = htmlspecialchars($_SESSION['username']); [cite_start]// Requisito: Nombre del usuario [cite: 54]
$hora_actual = date("H:i:s"); [cite_start]// Requisito: La hora actual [cite: 55]
$mensaje_bienvenida = "¡Disfruta de tu acceso exclusivo al sistema!"; [cite_start]// Requisito: Datos adicionales [cite: 56]

// Incluimos el HTML
include 'bienvenida.html';
?>