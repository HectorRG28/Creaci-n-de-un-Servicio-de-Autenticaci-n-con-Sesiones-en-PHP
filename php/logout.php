<?php
// Requisito 1: Implementar el manejo de sesiones (session_start, session_destroy)
session_start(); [cite_start]// [cite: 63]

// Destruir todas las variables de sesión
$_SESSION = array();

// Eliminar la cookie de sesión (opcional, pero buena práctica)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy(); [cite_start]// [cite: 63]

// Redirigir al login
header("Location: login.php");
exit();
?>