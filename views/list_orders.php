<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>List Orders</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>List of Orders</h1>

    <!-- Enlace para agregar un nuevo pedido -->
    <a href="index.php?action=add">Add New Order</a>

    <!-- Enlace para cerrar sesión, alineado a la derecha -->
    <a href="logout.php" style="float:right;">Logout</a>

    <!-- Tabla para mostrar la lista de pedidos -->
    <table border="1">
        <tr>
            <!-- Encabezados de las columnas de la tabla -->
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <!-- Se itera sobre cada pedido en el array $orders para mostrar sus detalles -->
        <?php foreach ($orders as $order): ?>
            <tr>
                <!-- Muestra el ID del pedido -->
                <td><?= $order['new_order_id'] ?></td>
                <!-- Muestra el nombre del cliente asociado al pedido -->
                <td><?= $order['customer_name'] ?></td>
                <!-- Muestra el estado del pedido -->
                <td><?= $order['status'] ?></td>
                <td>
                    <!-- Enlace para editar el pedido, pasando el ID como parámetro -->
                    <a href="index.php?action=edit&id=<?= $order['new_order_id'] ?>">Edit</a>
                    <!-- Enlace para eliminar el pedido, con confirmación antes de proceder -->
                    <a href="index.php?action=delete&id=<?= $order['new_order_id'] ?>" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>