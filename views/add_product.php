<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Agregar Producto</title>

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
    <h1>Agregar Producto</h1>

    <!-- Formulario para agregar un nuevo producto -->
    <form method="POST" action="">

        <!-- Campo para el nombre del producto que ofrece -->
        <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
        </div>

        <!-- Campo para la descripcion  del producto -->
        <div class="form-group">
            <input type="text" name="Descripcion" class="form-control" placeholder="Descripcion" required>
        </div>
        <div class="form-group">
            <input type="text" name="Precio" class="form-control" placeholder="Precio" required>
        </div>
        <div class="form-group">
            <input type="text" name="Stock_Disponible" class="form-control" placeholder="Stock_Disponible" required>
        </div>
        <div class="form-group">
            <input type="text" name="Stock_Minimo" class="form-control" placeholder="Stock_Minimo" required>
        </div>
        <div class="form-group">
            <label for="ID_Proveedor">Proveedor:</label>
            <select name="ID_Proveedor" class="form-control" required>
                <option value="">Selecciona un proveedor</option>
                <!-- Aquí deberías generar dinámicamente las opciones de proveedores -->
                <?php foreach ($suppliers as $supplier): ?>
                    <option value="<?= $supplier['ID_Proveedor'] ?>"><?= $supplier['Nombre'] ?></option>
                <?php endforeach; ?>
            </select>
            <!-- Campo para seleccionar la categoría -->
            <div class="form-group">
                <label for="ID_Categoria">Categoría:</label>
                <select name="ID_Categoria" class="form-control" required>
                    <option value="">Selecciona una categoría</option>
                    <!-- Aquí deberías generar dinámicamente las opciones de categorías -->
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['ID_Categoria'] ?>"><?= $category['Nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Add Product
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