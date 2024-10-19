<?php
require_once 'config/database.php';

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createUser($data)
    {
        $sql = "INSERT INTO login (usuario, email, password, rol) VALUES (:usuario, :email, :password, :rol)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM login WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $data)
    {
        $sql = "UPDATE login SET usuario = :usuario, email = :email, rol = :rol WHERE ID_Usuario = :id";
        $data['id'] = $id;
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function changePassword($id, $newPassword)
    {
        $sql = "UPDATE login SET password = :password WHERE ID_Usuario = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['password' => $newPassword, 'id' => $id]);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM login WHERE ID_Usuario = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
?>;