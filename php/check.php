<?php
//Manejo de sesiones
session_start();

// Lista de usuarios válidos 
$usuarios = [ "admin" => "1234", "usuario" => "abcd" ]; [cite_start]// [cite: 68]

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

// Verificar si las credenciales coinciden
if (array_key_exists($user, $usuarios) && $usuarios[$user] === $pass) {
    // Credenciales correctas
    $_SESSION['username'] = $user; // Guardar el nombre de usuario en la sesión
    
    //Direcciones en header
    header("Location: bienvenida.php");
    exit();
} else {
    // Credenciales incorrectas: guardar error y redirigir al login
    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
    // Redirecciones con el header
    header("Location: login.php");
    exit();
}
?>