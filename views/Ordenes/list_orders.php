<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>List Orders</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../../Assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>  

    <?php include(__DIR__ . '/../includ/sidebar.php'); ?>
    <?php include(__DIR__ . '/../includ/navbar.php'); ?>
    <!-- Encabezado principal de la página -->

    <div class="main">
        <div class="container mt-4">
            <h1>Órdenes</h1>

            <!-- Enlace para agregar un nuevo pedido -->
            <a href="index.php?action=add" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Añadir Orden
            </a>

            <!-- Enlace para cerrar sesión, alineado a la derecha -->


            <!-- Tabla para mostrar la lista de pedidos -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <!-- Encabezados de las columnas de la tabla -->
                            <th>Order ID</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Acciones</th>
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
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <!-- Enlace para eliminar el pedido, con confirmación antes de proceder -->
                                    <a href="index.php?action=delete&id=<?= $order['new_order_id'] ?>"
                                        onclick="return confirm('Are you sure you want to delete this order?');" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-vjEe10nKc4Jw6Ppbji36fM1B96smX4edYo2LMRZGgOHgsNftj3KN1Svax0y8nbTz" crossorigin="anonymous">
    </script>
    <script src="../../Assets/js/script.js"></script>
</body>

</html>
