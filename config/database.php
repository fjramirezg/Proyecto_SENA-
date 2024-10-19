<?php
// Configuración de la conexión a la base de datos
$host = 'bdmbotzhv63vquljsbn5-mysql.services.clever-cloud.com'; // Dirección del servidor de la base de datos
$db = 'bdmbotzhv63vquljsbn5'; // Nombre de la base de datos
$user = 'u0vxafa48flcjcbs'; // Nombre de usuario para la base de datos
$pass = 'bk6JHfhO43790sXq96Wz'; // Contraseña para el usuario de la base de datos

try {
    // Se intenta crear una nueva conexión PDO a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Se establece el modo de error a excepción para manejar errores de forma adecuada
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ocurre un error al conectar, se muestra un mensaje y se detiene la ejecución del script
    die("Could not connect to the database $db :" . $e->getMessage());
}
