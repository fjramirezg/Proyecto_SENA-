<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Add Order</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>Add Order</h1>

    <!-- Formulario para agregar un nuevo pedido -->
    <form method="POST" action="">
        <!-- Campo para ingresar el nombre del cliente, requerido para el envío del formulario -->
        <input type="text" name="customer_name" placeholder="Customer Name" required>

        <!-- Campo para ingresar el correo electrónico del cliente, requerido -->
        <input type="email" name="customer_email" placeholder="Customer Email" required>

        <!-- Campo para ingresar el estado del pedido, requerido -->
        <input type="text" name="status" placeholder="Status" required>

        <!-- Campo para ingresar la fecha de envío del pedido (opcional) -->
        <input type="date" name="shipped_date">

        <!-- Campo para ingresar la fecha de entrega del pedido (opcional) -->
        <input type="date" name="delivery_date">

        <!-- Campo para ingresar el estado del pago, requerido -->
        <input type="text" name="payment_status" placeholder="Payment Status" required>

        <!-- Campo para ingresar el método de pago, requerido -->
        <input type="text" name="payment_method" placeholder="Payment Method" required>

        <!-- Campo para ingresar el número de seguimiento del envío (opcional) -->
        <input type="text" name="tracking_number" placeholder="Tracking Number">

        <!-- Área de texto para ingresar la dirección de envío (opcional) -->
        <textarea name="shipping_address" placeholder="Shipping Address"></textarea>

        <!-- Campo para ingresar el descuento aplicado al pedido (opcional) -->
        <input type="number" name="discount_applied" placeholder="Discount Applied">

        <!-- Campo para ingresar la cantidad de impuestos aplicados al pedido (opcional) -->
        <input type="number" name="tax_amount" placeholder="Tax Amount">

        <!-- Botón para enviar el formulario y agregar el nuevo pedido -->
        <button type="submit">Add Order</button>
    </form>
</body>

</html>