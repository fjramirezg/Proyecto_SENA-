<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Definición de la clase Supplier que maneja las operaciones relacionadas con los proveedores
class Supplier
{
    // Propiedad para almacenar la conexión PDO a la base de datos
    private $pdo;

    // Constructor que inicializa la conexión a la base de datos
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para agregar un nuevo proveedor a la base de datos
    public function addSupplier($data)
    {
        // Consulta SQL para insertar un nuevo proveedor en la tabla Suppliers
        $sql = "INSERT INTO proveedor (Nombre, Producto, Telefono, Email) VALUES (:Nombre, :Producto, :Telefono, :Email)";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con los datos proporcionados y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para obtener todos los proveedores de la base de datos
    public function getAllSuppliers()
    {
        // Consulta SQL para seleccionar todos los proveedores de la tabla Suppliers
        $sql = "SELECT * FROM proveedor";
        // Ejecuta la consulta y retorna todos los resultados como un array asociativo
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un proveedor específico por su ID
    public function getSupplierById($id)
    {
        // Consulta SQL para seleccionar un proveedor basado en su ID
        $sql = "SELECT * FROM proveedor WHERE ID_Proveedor = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con el ID proporcionado y retorna el resultado como un array asociativo
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un proveedor existente en la base de datos
    public function updateSupplier($id, $data)
    {
        // Consulta SQL para actualizar los detalles del proveedor basado en su ID
        $sql = "UPDATE proveedor SET Nombre = :Nombre, Producto = :Producto, Telefono = :Telefono, Email = :Email WHERE ID_Proveedor = :id";
        // Añade el ID del proveedor a los datos a actualizar
        $data['id'] = $id;
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para eliminar un proveedor de la base de datos
    public function deleteSupplier($id)
    {
        // Consulta SQL para eliminar un proveedor basado en su ID
        $sql = "DELETE FROM proveedor WHERE ID_Proveedor = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute(['id' => $id]);
    }
}
