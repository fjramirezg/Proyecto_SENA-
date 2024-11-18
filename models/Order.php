<?php
// Se incluye el archivo de configuración de la base de datos
require_once 'config/database.php';

// Definición de la clase Order que maneja las operaciones relacionadas con los pedidos
class Order
{
    // Propiedad para almacenar la conexión PDO a la base de datos
    private $pdo;

    // Constructor que inicializa la conexión a la base de datos
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para agregar un nuevo pedido a la base de datos
    public function addOrder($data)
    {
        // Consulta SQL para insertar un nuevo pedido en la tabla NewOrders
        $sql = "INSERT INTO NewOrders (customer_id, customer_name, customer_email, status, shipped_date, delivery_date, payment_status, payment_method, tracking_number, shipping_address, discount_applied, tax_amount) VALUES (:customer_id, :customer_name, :customer_email, :status, :shipped_date, :delivery_date, :payment_status, :payment_method, :tracking_number, :shipping_address, :discount_applied, :tax_amount)";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con los datos proporcionados y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para obtener todos los pedidos de la base de datos
    public function getAllOrders()
    {
        // Consulta SQL para seleccionar todos los pedidos de la tabla NewOrders
        $sql = "SELECT * FROM NewOrders";
        // Ejecuta la consulta y retorna todos los resultados como un array asociativo
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un pedido específico por su ID
    public function getOrderById($id)
    {
        // Consulta SQL para seleccionar un pedido basado en su ID
        $sql = "SELECT * FROM NewOrders WHERE new_order_id = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con el ID proporcionado y retorna el resultado como un array asociativo
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un pedido existente en la base de datos
    public function updateOrder($id, $data)
    {
        // Consulta SQL para actualizar los detalles del pedido basado en su ID
        $sql = "UPDATE NewOrders SET customer_id = :customer_id, customer_name = :customer_name, customer_email = :customer_email, status = :status, shipped_date = :shipped_date, delivery_date = :delivery_date, payment_status = :payment_status, payment_method = :payment_method, tracking_number = :tracking_number, shipping_address = :shipping_address, discount_applied = :discount_applied, tax_amount = :tax_amount WHERE new_order_id = :id";
        // Añade el ID del pedido a los datos a actualizar
        $data['id'] = $id;
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para eliminar un pedido de la base de datos
    public function deleteOrder($id)
    {
        // Consulta SQL para eliminar un pedido basado en su ID
        $sql = "DELETE FROM NewOrders WHERE new_order_id = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute(['id' => $id]);
    }
}
