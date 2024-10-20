<?php
require_once 'models/HomeModel.php';

class HomeController {
    private $homeModel;

    public function __construct($conn) {
        $this->homeModel = new HomeModel($conn);
    }

    public function index() {
        $data = [
            'ventasData' => $this->homeModel->getVentasData(),
            'productosVendidosData' => $this->homeModel->getProductosVendidosData(),
            'clientesData' => $this->homeModel->getClientesData(),
            'categoriasData' => $this->homeModel->getCategoriasData(),
            'productosData' => $this->homeModel->getProductosData(),
            'bajoStockData' => $this->homeModel->getBajoStockData(),
            'proveedoresData' => $this->homeModel->getProveedoresData(),
            'resultProductosTopData' => $this->homeModel->getProductosTopData(),
            'resultBajoStocklistData' => $this->homeModel->getBajoStockListData(),
        ];

        // Incluir la vista
        include 'views/home.php'; // Asegúrate de que la ruta es correcta
    }
}

