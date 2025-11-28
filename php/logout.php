<?php
//Implementación de manejo de sesiones
session_start(); [cite_start]

// Destruir todas las variables de sesión
$_SESSION = array();

// Eliminar la cookie de sesión 
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy(); [cite_start]// 
// Redirigir al login
header("Location: login.php");
exit();
?>