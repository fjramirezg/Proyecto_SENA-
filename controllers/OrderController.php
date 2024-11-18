<?php
// Se incluye el modelo de pedidos que contiene la lógica de acceso a datos para los pedidos
require_once 'models/Order.php';

// Definición de la clase OrderController que maneja las operaciones relacionadas con los pedidos
class OrderController
{
    // Propiedad para almacenar la instancia del modelo de pedidos
    private $orderModel;

    // Constructor que inicializa el modelo de pedidos con la conexión PDO
    public function __construct($pdo)
    {
        $this->orderModel = new Order($pdo);
    }

    // Método para agregar un nuevo pedido
    public function add()
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
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
            // Llama al método addOrder del modelo para agregar el pedido
            $this->orderModel->addOrder($data);
            // Redirige a la lista de pedidos después de agregar
            header('Location: index.php?action=list');
        } else {
            // Muestra la vista para agregar un nuevo pedido si no es un POST
            include 'views/add_order.php';
        }
    }

    // Método para editar un pedido existente
    public function edit($id)
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
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
            // Llama al método updateOrder del modelo para actualizar el pedido
            $this->orderModel->updateOrder($id, $data);
            // Redirige a la lista de pedidos después de editar
            header('Location: index.php?action=list');
        } else {
            // Obtiene el pedido por su ID y muestra la vista de edición si no es un POST
            $order = $this->orderModel->getOrderById($id);
            include 'views/edit_order.php';
        }
    }

    // Método para eliminar un pedido por su ID
    public function delete($id)
    {
        // Llama al método deleteOrder del modelo para eliminar el pedido
        $this->orderModel->deleteOrder($id);
        // Redirige a la lista de pedidos después de eliminar
        header('Location: index.php?action=list');
    }

    // Método para listar todos los pedidos
    public function list()
    {
        // Obtiene todos los pedidos y muestra la vista correspondiente
        $orders = $this->orderModel->getAllOrders();
        include 'views/list_orders.php';
    }
}
