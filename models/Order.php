<?php
require_once 'config/database.php';

class Order
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function addOrder($data)
    {
        $sql = "INSERT INTO NewOrders (customer_id, customer_name, customer_email, status, shipped_date, delivery_date, payment_status, payment_method, tracking_number, shipping_address, discount_applied, tax_amount) VALUES (:customer_id, :customer_name, :customer_email, :status, :shipped_date, :delivery_date, :payment_status, :payment_method, :tracking_number, :shipping_address, :discount_applied, :tax_amount)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM NewOrders";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderById($id)
    {
        $sql = "SELECT * FROM NewOrders WHERE new_order_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateOrder($id, $data)
    {
        $sql = "UPDATE NewOrders SET customer_id = :customer_id, customer_name = :customer_name, customer_email = :customer_email, status = :status, shipped_date = :shipped_date, delivery_date = :delivery_date, payment_status = :payment_status, payment_method = :payment_method, tracking_number = :tracking_number, shipping_address = :shipping_address, discount_applied = :discount_applied, tax_amount = :tax_amount WHERE new_order_id = :id";
        $data['id'] = $id;
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function deleteOrder($id)
    {
        $sql = "DELETE FROM NewOrders WHERE new_order_id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
?>;