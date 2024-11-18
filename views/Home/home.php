<?php
session_start();
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu for Admin Dashboard | CodingNepal</title>

    <link rel="stylesheet" href="../../Assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <?php include(__DIR__ . '/../includ/sidebar.php'); ?>
    <?php include(__DIR__ . '/../includ/navbar.php'); ?>



    <main class="main">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resumen de Ventas</h5>
                            <div class="row">
                                <div class="col-md-3 col-6 text-center">
                                    <div class="display-4 mb-2">📊</div>
                                    <p class="mb-0 h4"><?php echo $data['ventasData']['total_ventas']; ?></p>
                                    <small>Total Ventas</small>
                                </div>
                                <div class="col-md-3 col-6 text-center">
                                    <div class="display-4 mb-2">📦</div>
                                    <p class="mb-0 h4"><?php echo $data['productosVendidosData']['productos_vendidos']; ?></p>
                                    <small>Productos Vendidos</small>
                                </div>
                                <div class="col-md-3 col-6 text-center">
                                    <div class="display-4 mb-2">👥</div>
                                    <p class="mb-0 h4"><?php echo $data['clientesData']['total_clientes']; ?></p>
                                    <small>Clientes Atendidos</small>
                                </div>
                                <div class="col-md-3 col-6 text-center">
                                    <div class="display-4 mb-2">🏷️</div>
                                    <p class="mb-0 h4"><?php echo $data['categoriasData']['total_categorias']; ?></p>
                                    <small>Categorías</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resumen de Inventario</h5>
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="display-4 mb-2">📦</div>
                                    <p class="mb-0 h4"><?php echo $data['productosData']['total_productos']; ?></p>
                                    <small>Stock Total</small>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="display-4 mb-2">⚠️</div>
                                    <p class="mb-0 h4"><?php echo $data['bajoStockData']['productos_bajo_stock']; ?></p>
                                    <small>Productos Bajo Stock</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gráfico de Ventas</h5>
                            <canvas id="ventasChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Proveedores</h5>
                            <ul class="list-group">
                                <?php foreach ($data['proveedoresData'] as $proveedor): ?>
                                    <li class="list-group-item"><?php echo htmlspecialchars($proveedor['Nombre']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Productos Más Vendidos</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad Vendida</th>
                                            <th>Stock Disponible</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['resultProductosTopData'] as $product): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($product['Nombre']); ?></td>
                                                <td><?php echo htmlspecialchars($product['Total_Vendido']); ?></td>
                                                <td><?php echo htmlspecialchars($product['Stock_Disponible']); ?></td>
                                                <td><?php echo htmlspecialchars($product['Precio']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stock Bajo</h5>
                            <ul class="list-group">
                                <?php foreach ($data['resultBajoStocklistData'] as $productoBajoList): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <?php echo htmlspecialchars($productoBajoList['Nombre']); ?>
                                        <span class="badge bg-danger rounded-pill"><?php echo htmlspecialchars($productoBajoList['Stock_Disponible']); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../../Assets/js/script.js"></script>

    <script>
        // ejemplo de grafico
        const ctx = document.getElementById('ventasChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Ventas por Mes',
                    data: [50, 65, 80, 70, 85, 75],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>