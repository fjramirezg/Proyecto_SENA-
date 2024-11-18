<?php
class HomeModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getVentasData() {
        $result = $this->conn->query("SELECT COUNT(*) AS total_ventas, SUM(Total) AS ingresos FROM venta");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getProductosVendidosData() {
        $result = $this->conn->query("SELECT SUM(Cantidad) AS productos_vendidos FROM detallesventa");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getClientesData() {
        $result = $this->conn->query("SELECT COUNT(*) AS total_clientes FROM cliente");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getCategoriasData() {
        $result = $this->conn->query("SELECT COUNT(*) AS total_categorias FROM categoriaproducto");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getProductosData() {
        $result = $this->conn->query("SELECT SUM(Stock_Disponible) AS total_productos FROM producto");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getBajoStockData() {
        $result = $this->conn->query("SELECT COUNT(*) AS productos_bajo_stock FROM producto WHERE Stock_Disponible < Stock_Minimo");
        return $result->fetch(PDO::FETCH_ASSOC); // Cambiado a fetch(PDO::FETCH_ASSOC)
    }

    public function getProveedoresData() {
        $result = $this->conn->query("SELECT Nombre FROM proveedor LIMIT 6");
        return $result->fetchAll(PDO::FETCH_ASSOC); // Cambiado a fetchAll(PDO::FETCH_ASSOC)
    }

    public function getProductosTopData() {
        $result = $this->conn->query("
            SELECT p.Nombre, SUM(d.Cantidad) AS Total_Vendido, p.Stock_Disponible, p.Precio
            FROM producto p
            JOIN detallesventa d ON p.ID_Producto = d.ID_Producto
            GROUP BY p.ID_Producto
            ORDER BY Total_Vendido DESC
            LIMIT 3
        ");
        return $result->fetchAll(PDO::FETCH_ASSOC); // Cambiado a fetchAll(PDO::FETCH_ASSOC)
    }

    public function getBajoStockListData() {
        $result = $this->conn->query("SELECT Nombre, Stock_Disponible FROM producto WHERE Stock_Disponible < Stock_Minimo LIMIT 4");
        return $result->fetchAll(PDO::FETCH_ASSOC); // Cambiado a fetchAll(PDO::FETCH_ASSOC)
    }
}
