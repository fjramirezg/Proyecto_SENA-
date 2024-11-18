<!DOCTYPE html>
<html lang="es">

<head>
    <title>Editar Productos</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <style>
        h1 {
            text-align: center;
            font-weight: bold;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
        }

        input,
        textarea {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="container">

    <h1>Editar Producto</h1>

    <form method="POST" action="">
        <div class="form-group">
            <input type="text" name="Nombre" class="form-control" value="<?= $product['Nombre'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" name="Descripcion" class="form-control" value="<?= $product['Descripcion'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" name="Precio" class="form-control" value="<?= $product['Precio'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" name="Stock_Disponible" class="form-control" value="<?= $product['Stock_Disponible'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" name="Stock_Minimo" class="form-control" value="<?= $product['Stock_Minimo'] ?>" required>
        </div>
        <div class="form-group">
            <label for="ID_Proveedor">Proveedor</label>
            <select name="ID_Proveedor" class="form-control" required>
                <?php foreach ($suppliers as $supplier): ?>
                    <option value="<?= $supplier['ID_Proveedor']; ?>" <?= ($product['ID_Proveedor'] == $supplier['ID_Proveedor']) ? 'selected' : ''; ?>>
                        <?= $supplier['Nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ID_Categoria">Categoría</label>
            <select name="ID_Categoria" class="form-control" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['ID_Categoria']; ?>" <?= ($product['ID_Categoria'] == $category['ID_Categoria']) ? 'selected' : ''; ?>>
                        <?= $category['Nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Actualizar Producto
        </button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-vjEe10nKc4Jw6Ppbji36fM1B96smX4edYo2LMRZGgOHgsNftj3KN1Svax0y8nbTz" crossorigin="anonymous"></script>
</body>

</html>