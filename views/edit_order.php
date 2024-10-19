<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Edit Order</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>Edit Order</h1>

    <!-- Formulario para editar la información del pedido -->
    <form method="POST" action="">
        <!-- Campo oculto que almacena el ID del nuevo pedido, necesario para identificar el pedido a actualizar -->
        <input type="hidden" name="new_order_id" value="<?= $order['new_order_id'] ?>">

        <!-- Campo para ingresar el ID del cliente, precargado con el valor actual -->
        <input type="text" name="customer_id" value="<?= $order['customer_id'] ?>" required>

        <!-- Campo para ingresar el nombre del cliente, precargado con el valor actual -->
        <input type="text" name="customer_name" value="<?= $order['customer_name'] ?>" required>

        <!-- Campo para ingresar el correo electrónico del cliente, precargado con el valor actual -->
        <input type="email" name="customer_email" value="<?= $order['customer_email'] ?>" required>

        <!-- Campo para ingresar el estado del pedido, precargado con el valor actual -->
        <input type="text" name="status" value="<?= $order['status'] ?>" required>

        <!-- Campo para ingresar la fecha de envío del pedido, precargado con el valor actual -->
        <input type="date" name="shipped_date" value="<?= $order['shipped_date'] ?>">

        <!-- Campo para ingresar la fecha de entrega del pedido, precargado con el valor actual -->
        <input type="date" name="delivery_date" value="<?= $order['delivery_date'] ?>">

        <!-- Campo para ingresar el estado del pago, precargado con el valor actual -->
        <input type="text" name="payment_status" value="<?= $order['payment_status'] ?>" required>

        <!-- Campo para ingresar el método de pago, precargado con el valor actual -->
        <input type="text" name="payment_method" value="<?= $order['payment_method'] ?>" required>

        <!-- Campo para ingresar el número de seguimiento del envío, precargado con el valor actual -->
        <input type="text" name="tracking_number" value="<?= $order['tracking_number'] ?>">

        <!-- Área de texto para ingresar la dirección de envío, precargada con la dirección actual -->
        <textarea name="shipping_address"><?= $order['shipping_address'] ?></textarea>

        <!-- Campo para ingresar el descuento aplicado al pedido, precargado con el valor actual -->
        <input type="number" name="discount_applied" value="<?= $order['discount_applied'] ?>">

        <!-- Campo para ingresar la cantidad de impuestos aplicados al pedido, precargado con el valor actual -->
        <input type="number" name="tax_amount" value="<?= $order['tax_amount'] ?>">

        <!-- Botón para enviar el formulario y actualizar la información del pedido -->
        <button type="submit">Update Order</button>
    </form>
</body>

</html>