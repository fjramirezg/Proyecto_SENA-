<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Lista de Productos</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../../Assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

</head>

<body>

    <?php include(__DIR__ . '/../includ/sidebar.php'); ?>
    <?php include(__DIR__ . '/../includ/navbar.php'); ?>

    <div class="main">
        <div class="container mt-4">
            <!-- Encabezado principal de la página -->
            <h1>Lista de Productos</h1>
            <!-- Enlace para agregar un nuevo proveedor -->
            <a href="index.php?action=add_product" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Agregar Producto
            </a>


            <!-- Tabla para mostrar la lista de proveedores -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <!-- Encabezados de las columnas de la tabla -->
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock Disponible</th>
                        <th>Stock Minimo</th>
                        <th>Proveedor</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Se itera sobre cada proveedor en el array $suppliers para mostrar sus detalles -->
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <!-- Muestra el nombre del producto -->
                            <td><?= $product['Nombre'] ?></td>
                            <!-- Muestra la descripción del producto -->
                            <td><?= $product['Descripcion'] ?></td>
                            <!-- Muestra el precio del producto -->
                            <td><?= $product['Precio'] ?></td>
                            <!-- Muestra el stock disponible del producto -->
                            <td><?= $product['Stock_Disponible'] ?></td>
                            <!-- Muestra el stock mínimo del producto -->
                            <td><?= $product['Stock_Minimo'] ?></td>
                            <!-- Muestra el nombre del proveedor en lugar del ID -->
                            <td><?= $product['Proveedor'] ?></td> <!-- Cambiado de ID_Proveedor a Proveedor -->
                            <!-- Muestra el nombre de la categoría en lugar del ID -->
                            <td><?= $product['Categoria'] ?></td> <!-- Cambiado de ID_Categoria a Categoria -->
                            <td>
                                <!-- Enlace para editar el producto, pasando el ID como parámetro -->
                                <a href="index.php?action=edit_product&id=<?= $product['ID_Producto'] ?>" class="btn btn-info">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <!-- Enlace para eliminar el producto, con confirmación antes de proceder -->
                                <a href="index.php?action=delete_product&id=<?= $product['ID_Producto'] ?>"
                                    onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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