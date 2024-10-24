<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>List Suppliers</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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
    <h1>List of Suppliers</h1>

    <!-- Enlace para agregar un nuevo proveedor -->
    <a href="index.php?action=add_supplier" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Supplier
    </a>

    <!-- Enlace para cerrar sesión, alineado a la derecha -->
    <a href="logout.php" class="btn btn-danger mb-3 float-right">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>

    <!-- Tabla para mostrar la lista de proveedores -->
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <!-- Encabezados de las columnas de la tabla -->
                <th>Supplier ID</th>
                <th>Name</th>
                <th>Product</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Se itera sobre cada proveedor en el array $suppliers para mostrar sus detalles -->
            <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <!-- Muestra el ID del proveedor -->
                    <td><?= $supplier['ID_Proveedor'] ?></td>
                    <!-- Muestra el nombre del proveedor -->
                    <td><?= $supplier['Nombre'] ?></td>
                    <!-- Muestra el producto que ofrece -->
                    <td><?= $supplier['Producto'] ?></td>
                    <!-- Muestra el teléfono del proveedor -->
                    <td><?= $supplier['Telefono'] ?></td>
                    <!-- Muestra el correo electrónico del proveedor -->
                    <td><?= $supplier['Email'] ?></td>
                    <td>
                        <!-- Enlace para editar el proveedor, pasando el ID como parámetro -->
                        <a href="index.php?action=edit_supplier&id=<?= $supplier['ID_Proveedor'] ?>" class="btn btn-info">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <!-- Enlace para eliminar el proveedor, con confirmación antes de proceder -->
                        <a href="index.php?action=delete_supplier&id=<?= $supplier['ID_Proveedor'] ?>"
                            onclick="return confirm('Are you sure you want to delete this supplier?');" class="btn btn-danger">
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
