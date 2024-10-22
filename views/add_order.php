<!DOCTYPE html>
<html>

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Add Order</title>
</head>

<body>
    <!-- Encabezado principal de la página -->
    <h1>Add Order</h1>

    <!-- Formulario para agregar un nuevo pedo -->
    <form method="POST" action="">
        <input type="text" name="customer_id" placeholder="Customer ID" required>
        <!-- Campo para ingresar el nombre del cliente, requero para el envío del formulario -->
        <input type="text" name="customer_name" placeholder="Customer Name" required>

        <!-- Campo para ingresar el correo electrónico del cliente, requero -->
        <input type="email" name="customer_email" placeholder="Customer Email" required>

        <!-- Campo para ingresar el estado del pedo, requero -->
        <input type="text" name="status" placeholder="Status" required>

        <!-- Campo para ingresar la fecha de envío del pedo (opcional) -->
        <input type="date" name="shipped_date">

        <!-- Campo para ingresar la fecha de entrega del pedo (opcional) -->
        <input type="date" name="delivery_date">

        <!-- Campo para ingresar el estado del pago, requero -->
        <input type="text" name="payment_status" placeholder="Payment Status" required>

        <!-- Campo para ingresar el método de pago, requero -->
        <input type="text" name="payment_method" placeholder="Payment Method" required>

        <!-- Campo para ingresar el número de seguimiento del envío (opcional) -->
        <input type="text" name="tracking_number" placeholder="Tracking Number">

        <!-- Área de texto para ingresar la dirección de envío (opcional) -->
        <textarea name="shipping_address" placeholder="Shipping Address"></textarea>

        <!-- Campo para ingresar el descuento aplicado al pedo (opcional) -->
        <input type="number" name="discount_applied" placeholder="Discount Applied">

        <!-- Campo para ingresar la cantad de impuestos aplicados al pedo (opcional) -->
        <input type="number" name="tax_amount" placeholder="Tax Amount">

        <!-- Botón para enviar el formulario y agregar el nuevo pedo -->
        <button type="submit">Add Order</button>
    </form>
</body>

</html>