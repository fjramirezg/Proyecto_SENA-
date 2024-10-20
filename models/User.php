<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Definición de la clase User que maneja las operaciones relacionadas con los usuarios
class User
{
    // Propiedad para almacenar la conexión PDO a la base de datos
    private $pdo;

    // Constructor que inicializa la conexión a la base de datos
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para crear un nuevo usuario en la base de datos
    public function createUser($data)
    {
        // Consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO login (usuario, email, password, rol) VALUES (:usuario, :email, :password, :rol)";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con los datos proporcionados y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para obtener un usuario por su correo electrónico
    public function getUserByEmail($email)
    {
        // Consulta SQL para seleccionar un usuario basado en su correo electrónico
        $sql = "SELECT * FROM login WHERE email = :email";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con el correo electrónico proporcionado
        $stmt->execute(['email' => $email]);
        // Retorna el resultado como un array asociativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar la información de un usuario existente
    public function updateUser($id, $data)
    {
        // Consulta SQL para actualizar los detalles del usuario
        $sql = "UPDATE login SET usuario = :usuario, email = :email, rol = :rol WHERE ID_Usuario = :id";
        // Añade el ID del usuario a los datos a actualizar
        $data['id'] = $id;
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para cambiar la contraseña de un usuario
    public function changePassword($id, $newPassword)
    {
        // Consulta SQL para actualizar la contraseña del usuario
        $sql = "UPDATE login SET password = :password WHERE ID_Usuario = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con la nueva contraseña y el ID del usuario y retorna el resultado
        return $stmt->execute(['password' => $newPassword, 'id' => $id]);
    }

    // Método para eliminar un usuario de la base de datos
    public function deleteUser($id)
    {
        // Consulta SQL para eliminar un usuario basado en su ID
        $sql = "DELETE FROM login WHERE ID_Usuario = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute(['id' => $id]);
    }
}
