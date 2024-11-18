<!DOCTYPE html>
<html lang="es">

<head>
    <title>Edit Supplier</title>

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

    <h1>Edit Supplier</h1>

    <form method="POST" action="">


        <div class="form-group">
            <input type="text" name="Nombre" class="form-control" value="<?= $supplier['Nombre'] ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="Producto" class="form-control" value="<?= $supplier['Producto'] ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="Telefono" class="form-control" value="<?= $supplier['Telefono'] ?>" required>
        </div>

        <div class="form-group">
            <input type="email" name="Email" class="form-control" value="<?= $supplier['Email'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Update Supplier
        </button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-vjEe10nKc4Jw6Ppbji36fM1B96smX4edYo2LMRZGgOHgsNftj3KN1Svax0y8nbTz" crossorigin="anonymous"></script>
</body>

</html>
