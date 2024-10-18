<!DOCTYPE html>
<html>

<head>
    <title>Edit Order</title>
</head>

<body>
    <h1>Edit Order</h1>
    <form method="POST" action="">
        <input type="hidden" name="new_order_id" value="<?= $order['new_order_id'] ?>">
        <input type="text" name="customer_id" value="<?= $order['customer_id'] ?>" required>
        <input type="text" name="customer_name" value="<?= $order['customer_name'] ?>" required>
        <input type="email" name="customer_email" value="<?= $order['customer_email'] ?>" required>
        <input type="text" name="status" value="<?= $order['status'] ?>" required>
        <input type="date" name="shipped_date" value="<?= $order['shipped_date'] ?>">
        <input type="date" name="delivery_date" value="<?= $order['delivery_date'] ?>">
        <input type="text" name="payment_status" value="<?= $order['payment_status'] ?>" required>
        <input type="text" name="payment_method" value="<?= $order['payment_method'] ?>" required>
        <input type="text" name="tracking_number" value="<?= $order['tracking_number'] ?>">
        <textarea name="shipping_address"><?= $order['shipping_address'] ?></textarea>
        <input type="number" name="discount_applied" value="<?= $order['discount_applied'] ?>">
        <input type="number" name="tax_amount" value="<?= $order['tax_amount'] ?>">
        <button type="submit">Update Order</button>
    </form>
</body>

</html>