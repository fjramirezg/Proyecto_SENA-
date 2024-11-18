<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>List Orders</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Estilo personalizado para centrar y hacer más grueso el título */
        h1 {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body class="container">
    <!-- Encabezado principal de la página -->
    <h1>List of Orders</h1>

    <!-- Enlace para agregar un nuevo pedido -->
    <a href="index.php?action=add" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Order
    </a>

    <!-- Enlace para cerrar sesión, alineado a la derecha -->
    <a href="logout.php" class="btn btn-danger mb-3 float-right">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>

    <!-- Tabla para mostrar la lista de pedidos -->
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <!-- Encabezados de las columnas de la tabla -->
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
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
                        <a href="index.php?action=edit&id=<?= $order['new_order_id'] ?>" class="btn btn-info">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <!-- Enlace para eliminar el pedido, con confirmación antes de proceder -->
                        <a href="index.php?action=delete&id=<?= $order['new_order_id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this order?');" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-vjEe10nKc4Jw6Ppbji36fM1B96smX4edYo2LMRZGgOHgsNftj3KN1Svax0y8nbTz" crossorigin="anonymous">
    </script>
</body>

</html>