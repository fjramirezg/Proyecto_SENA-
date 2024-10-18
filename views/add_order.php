<!DOCTYPE html>
<html>

<head>
    <title>Add Order</title>
</head>

<body>
    <h1>Add Order</h1>
    <form method="POST" action="">
        <input type="text" name="customer_id" placeholder="Customer ID" required>
        <input type="text" name="customer_name" placeholder="Customer Name" required>
        <input type="email" name="customer_email" placeholder="Customer Email" required>
        <input type="text" name="status" placeholder="Status" required>
        <input type="date" name="shipped_date">
        <input type="date" name="delivery_date">
        <input type="text" name="payment_status" placeholder="Payment Status" required>
        <input type="text" name="payment_method" placeholder="Payment Method" required>
        <input type="text" name="tracking_number" placeholder="Tracking Number">
        <textarea name="shipping_address" placeholder="Shipping Address"></textarea>
        <input type="number" name="discount_applied" placeholder="Discount Applied">
        <input type="number" name="tax_amount" placeholder="Tax Amount">
        <button type="submit">Add Order</button>
    </form>
</body>

</html>