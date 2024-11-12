<?php
// Se incluye el modelo de productos que contiene la lógica de acceso a datos para los productos
require_once 'models/ProductModel.php';

// Definición de la clase ProductController que maneja las operaciones relacionadas con los productos
class ProductController
{
    // Propiedad para almacenar la instancia del modelo de proveedores
    private $productModel;

    // Constructor que inicializa el modelo de producto con la conexión PDO
    public function __construct($pdo)
    {
        $this->productModel = new Product($pdo);
    }

    // Método para agregar un nuevo producto
    public function add()
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
            $data = [
                'Nombre' => $_POST['Nombre'],
                'Descripcion' => $_POST['Descripcion'],
                'Precio' => $_POST['Precio'],
                'Stock_Disponible' => $_POST['Stock_Disponible'],
                'Stock_Minimo' => $_POST['Stock_Minimo'],
                'ID_Proveedor' => $_POST['ID_Proveedor'],
                'ID_Categoria' => $_POST['ID_Categoria'],
            ];
            // Llama al método addProduct del modelo para agregar el producto
            $this->productModel->addProduct($data);
            // Redirige a la lista de productos después de agregar
            header('Location: index.php?action=list_products');
        } else {
            // Obtiene los proveedores y categorías desde el modelo
            $suppliers = $this->productModel->getAllSuppliers();
            $categories = $this->productModel->getAllCategories();

            // Muestra la vista para agregar un nuevo producto si no es un POST
            include 'views/add_product.php';
        }
    }

    // Método para editar un producto existente
    public function edit($id)
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
            $data = [
                'Nombre' => $_POST['Nombre'],
                'Descripcion' => $_POST['Descripcion'],
                'Precio' => $_POST['Precio'],
                'Stock_Disponible' => $_POST['Stock_Disponible'],
                'Stock_Minimo' => $_POST['Stock_Minimo'],
                'ID_Proveedor' => $_POST['ID_Proveedor'],
                'ID_Categoria' => $_POST['ID_Categoria'],
            ];
            // Llama al método updateProduct del modelo para actualizar el producto
            $this->productModel->updateProduct($id, $data);
            // Redirige a la lista de productos después de editar
            header('Location: index.php?action=list_products');
        } else {
            // Obtiene el producto por su ID
            $product = $this->productModel->getProductById($id);

            // Obtiene la lista de proveedores y categorías para el formulario
            $suppliers = $this->productModel->getAllSuppliers();  // Asegúrate de tener este método en tu modelo
            $categories = $this->productModel->getAllCategories(); // Asegúrate de tener este método en tu modelo

            include 'views/edit_product.php';  // Incluye la vista de edición
        }
    }


    // Método para eliminar un producto por su ID
    public function delete($id)
    {
        // Llama al método deleteProduct del modelo para eliminar el proveedor
        $this->productModel->deleteProduct($id);
        // Redirige a la lista de productos después de eliminar
        header('Location: index.php?action=list_products');
    }

    // Método para listar todos los productos
    public function list()
    {
        // Obtiene todos los proveedores y muestra la vista correspondiente
        $products = $this->productModel->getAllProducts();
        include 'views/list_products.php';
    }
}
