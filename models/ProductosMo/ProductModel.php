<?php
// Se incluye el modelo de productos que contiene la lógica de acceso a datos para los productos
require_once 'config/database.php';


// Definición de la clase ProductController que maneja las operaciones relacionadas con los productos
class Product
{
    // Propiedad para almacenar la instancia del modelo de productos
    private $pdo;

    // Constructor que inicializa el modelo de productos con la conexión PDO
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para agregar un nuevo producto
    public function addProduct($data)
    {
        // Consulta SQL para insertar un nuevo producto en la tabla Product
        $sql = "INSERT INTO producto (Nombre, Descripcion, Precio, Stock_Disponible, Stock_Minimo, ID_Proveedor, ID_Categoria)
        VALUES (:Nombre, :Descripcion, :Precio, :Stock_Disponible, :Stock_Minimo, :ID_Proveedor, :ID_Categoria)";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con los datos proporcionados y retorna el resultado
        return $stmt->execute($data);
    }

    // Método para obtener todos los proveedores de la base de datos
    public function getAllProducts()
    {
        // Consulta SQL para seleccionar todos los productos de la tabla producto
        $sql = "
        SELECT p.ID_Producto, p.Nombre, p.Descripcion, p.Precio, p.Stock_Disponible, p.Stock_Minimo, pr.Nombre AS Proveedor, ca.Nombre AS Categoria
        FROM producto p
        LEFT JOIN proveedor pr ON p.ID_Proveedor = pr.ID_Proveedor
        LEFT JOIN categoriaproducto ca ON p.ID_Categoria = ca.ID_Categoria";
        // Ejecuta la consulta y retorna todos los resultados como un array asociativo
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un proveedor específico por su ID
    public function getProductById($id)
    {
        // Consulta SQL para seleccionar un proveedor basado en su ID
        $sql = "SELECT * FROM producto WHERE ID_Producto = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta con el ID proporcionado y retorna el resultado como un array asociativo
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un producto existente en la base de datos
    public function updateProduct($id, $data)
    {
        // Consulta SQL para actualizar el producto
        $sql = "UPDATE producto
            SET Nombre = :Nombre, 
                Descripcion = :Descripcion, 
                Precio = :Precio, 
                Stock_Disponible = :Stock_Disponible, 
                Stock_Minimo = :Stock_Minimo, 
                ID_Proveedor = :ID_Proveedor, 
                ID_Categoria = :ID_Categoria
            WHERE ID_Producto = :id";

        // Añade el ID del producto a los datos a actualizar
        $data['id'] = $id;  // Este paso es importante, asegúrate de agregar el ID aquí

        // Prepara y ejecuta la consulta
        $stmt = $this->pdo->prepare($sql);

        // Ejecuta la consulta con los datos proporcionados
        return $stmt->execute($data);
    }



    // Método para eliminar un producto de la base de datos
    public function deleteProduct($id)
    {
        // Consulta SQL para eliminar un producto basado en su ID
        $sql = "DELETE FROM producto WHERE ID_Producto = :id";
        // Prepara la consulta SQL
        $stmt = $this->pdo->prepare($sql);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute(['id' => $id]);
    }

    // Método para obtener todos los proveedores
    public function getAllSuppliers()
    {
        $sql = "SELECT * FROM proveedor";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener todas las categorías
    public function getAllCategories()
    {
        $sql = "SELECT * FROM categoriaproducto";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
