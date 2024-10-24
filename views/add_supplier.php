<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Título de la página que se mostrará en la pestaña del navegador -->
    <title>Add Supplier</title>

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
    <h1>Add Supplier</h1>

    <!-- Formulario para agregar un nuevo proveedor -->
    <form method="POST" action="">
        <!-- Campo para el nombre del proveedor -->
        <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre del Proveedor" required>
        </div>

        <!-- Campo para el producto que ofrece -->
        <div class="form-group">
            <input type="text" name="Producto" class="form-control" placeholder="Producto" required>
        </div>

        <!-- Campo para el teléfono del proveedor -->
        <div class="form-group">
            <input type="tel" name="Telefono" class="form-control" placeholder="Teléfono" required>
        </div>

        <!-- Campo para el correo electrónico del proveedor -->
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Email" required>
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Add Supplier
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
