<?php
// Inicia la sesión para poder acceder a las variables de sesión
session_start();

// Función para verificar si el usuario está autenticado
function isAuthenticated()
{
    // Devuelve true si la variable de sesión 'user_id' está establecida, indicando que el usuario ha iniciado sesión
    return isset($_SESSION['user_id']);
}

// Función para requerir que el usuario esté autenticado
function requireLogin()
{
    // Verifica si el usuario no está autenticado
    if (!isAuthenticated()) {
        // Redirige al usuario a la página de inicio de sesión si no está autenticado
        header('Location: login.php');
        exit; // Asegúrate de incluir esto para evitar la ejecución del resto del script
    }
}
?>