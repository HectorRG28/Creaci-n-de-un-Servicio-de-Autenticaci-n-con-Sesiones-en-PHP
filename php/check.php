<?php
// Requisito 1: Implementar el manejo de sesiones (session_start)
session_start();

// Requisito 3: Lista de usuarios válidos (nombre => contraseña)
$usuarios = [ "admin" => "1234", "usuario" => "abcd" ]; [cite_start]// [cite: 68]

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

// Verificar si las credenciales coinciden
if (array_key_exists($user, $usuarios) && $usuarios[$user] === $pass) {
    // Credenciales correctas
    $_SESSION['username'] = $user; // Guardar el nombre de usuario en la sesión
    
    // Requisito 2: Utilizar redirecciones con header()
    header("Location: bienvenida.php");
    exit();
} else {
    // Credenciales incorrectas: guardar error y redirigir al login
    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
    // Requisito 2: Utilizar redirecciones con header()
    header("Location: login.php");
    exit();
}
?>