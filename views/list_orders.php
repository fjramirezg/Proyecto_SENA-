<!DOCTYPE html>
<html>

<head>
    <title>List Orders</title>
</head>

<body>
    <h1>List of Orders</h1>
    <a href="index.php?action=add">Add New Order</a>
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order['new_order_id'] ?></td>
                <td><?= $order['customer_name'] ?></td>
                <td><?= $order['status'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $order['new_order_id'] ?>">Edit</a>
                    <a href="index.php?action=delete&id=<?= $order['new_order_id'] ?>" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>