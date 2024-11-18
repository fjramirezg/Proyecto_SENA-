<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Edit Order</title>

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

        /* Espaciado y estilo del formulario */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Estilo de los botones */
        button {
            width: 100%;
        }

        /* Estilo para los campos del formulario */
        input,
        textarea {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="container">

    <!-- Encabezado principal de la página -->
    <h1>Edit Order</h1>

    <!-- Formulario para editar la información del pedido -->
    <form method="POST" action="">
        <!-- Campo oculto para almacenar el ID del pedido -->
        <input type="hidden" name="new_order_id" value="<?= $order['new_order_id'] ?>">

        <!-- Campo para el ID del cliente -->
        <div class="form-group">
            <input type="text" name="customer_id" class="form-control" value="<?= $order['customer_id'] ?>" required>
        </div>

        <!-- Campo para el nombre del cliente -->
        <div class="form-group">
            <input type="text" name="customer_name" class="form-control" value="<?= $order['customer_name'] ?>" required>
        </div>

        <!-- Campo para el correo electrónico del cliente -->
        <div class="form-group">
            <input type="email" name="customer_email" class="form-control" value="<?= $order['customer_email'] ?>" required>
        </div>

        <!-- Campo para el estado del pedido -->
        <div class="form-group">
            <input type="text" name="status" class="form-control" value="<?= $order['status'] ?>" required>
        </div>

        <!-- Campo para la fecha de envío del pedido -->
        <div class="form-group">
            <input type="date" name="shipped_date" class="form-control" value="<?= $order['shipped_date'] ?>">
        </div>

        <!-- Campo para la fecha de entrega del pedido -->
        <div class="form-group">
            <input type="date" name="delivery_date" class="form-control" value="<?= $order['delivery_date'] ?>">
        </div>

        <!-- Campo para el estado del pago -->
        <div class="form-group">
            <input type="text" name="payment_status" class="form-control" value="<?= $order['payment_status'] ?>" required>
        </div>

        <!-- Campo para el método de pago -->
        <div class="form-group">
            <input type="text" name="payment_method" class="form-control" value="<?= $order['payment_method'] ?>" required>
        </div>

        <!-- Campo para el número de seguimiento del envío -->
        <div class="form-group">
            <input type="text" name="tracking_number" class="form-control" value="<?= $order['tracking_number'] ?>">
        </div>

        <!-- Área de texto para la dirección de envío -->
        <div class="form-group">
            <textarea name="shipping_address" class="form-control"><?= $order['shipping_address'] ?></textarea>
        </div>

        <!-- Campo para el descuento aplicado -->
        <div class="form-group">
            <input type="number" name="discount_applied" class="form-control" value="<?= $order['discount_applied'] ?>">
        </div>

        <!-- Campo para la cantidad de impuestos aplicados -->
        <div class="form-group">
            <input type="number" name="tax_amount" class="form-control" value="<?= $order['tax_amount'] ?>">
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Update Order
        </button>
    </form>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-vjEe10nKc4Jw6Ppbji36fM1B96smX4edYo2LMRZGgOHgsNftj3KN1Svax0y8nbTz" crossorigin="anonymous">
    </script>
</body>

</html>