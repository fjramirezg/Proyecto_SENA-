<?php
require_once 'models/Order.php';

class OrderController
{
    private $orderModel;

    public function __construct($pdo)
    {
        $this->orderModel = new Order($pdo);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'customer_id' => $_POST['customer_id'],
                'customer_name' => $_POST['customer_name'],
                'customer_email' => $_POST['customer_email'],
                'status' => $_POST['status'],
                'shipped_date' => $_POST['shipped_date'],
                'delivery_date' => $_POST['delivery_date'],
                'payment_status' => $_POST['payment_status'],
                'payment_method' => $_POST['payment_method'],
                'tracking_number' => $_POST['tracking_number'],
                'shipping_address' => $_POST['shipping_address'],
                'discount_applied' => $_POST['discount_applied'],
                'tax_amount' => $_POST['tax_amount'],
            ];
            $this->orderModel->addOrder($data);
            header('Location: index.php?action=list');
        } else {
            include 'views/add_order.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'customer_id' => $_POST['customer_id'],
                'customer_name' => $_POST['customer_name'],
                'customer_email' => $_POST['customer_email'],
                'status' => $_POST['status'],
                'shipped_date' => $_POST['shipped_date'],
                'delivery_date' => $_POST['delivery_date'],
                'payment_status' => $_POST['payment_status'],
                'payment_method' => $_POST['payment_method'],
                'tracking_number' => $_POST['tracking_number'],
                'shipping_address' => $_POST['shipping_address'],
                'discount_applied' => $_POST['discount_applied'],
                'tax_amount' => $_POST['tax_amount'],
            ];
            $this->orderModel->updateOrder($id, $data);
            header('Location: index.php?action=list');
        } else {
            $order = $this->orderModel->getOrderById($id);
            include 'views/edit_order.php';
        }
    }

    public function delete($id)
    {
        $this->orderModel->deleteOrder($id);
        header('Location: index.php?action=list');
    }

    public function list()
    {
        $orders = $this->orderModel->getAllOrders();
        include 'views/list_orders.php';
    }
}
?>;