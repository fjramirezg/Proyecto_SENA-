<?php
$host = 'bdmbotzhv63vquljsbn5-mysql.services.clever-cloud.com'; // Cambia esto si es necesario
$db = 'bdmbotzhv63vquljsbn5';
$user = 'u0vxafa48flcjcbs';
$pass = 'bk6JHfhO43790sXq96Wz';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>;

