<?php
// Se incluye el modelo de proveedores que contiene la lógica de acceso a datos para los proveedores
require_once 'models/SupplierModel.php';

// Definición de la clase SupplierController que maneja las operaciones relacionadas con los proveedores
class SupplierController
{
    // Propiedad para almacenar la instancia del modelo de proveedores
    private $supplierModel;

    // Constructor que inicializa el modelo de proveedores con la conexión PDO
    public function __construct($pdo)
    {
        $this->supplierModel = new Supplier($pdo);
    }

    // Método para agregar un nuevo proveedor
    public function add()
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
            $data = [
                'Nombre' => $_POST['Nombre'],
                'Producto' => $_POST['Producto'],
                'Telefono' => $_POST['Telefono'],
                'Email' => $_POST['Email'],
            ];
            // Llama al método addSupplier del modelo para agregar el proveedor
            $this->supplierModel->addSupplier($data);
            // Redirige a la lista de proveedores después de agregar
            header('Location: index.php?action=list_suppliers');
        } else {
            // Muestra la vista para agregar un nuevo proveedor si no es un POST
            include 'views/add_supplier.php';
        }
    }

    // Método para editar un proveedor existente
    public function edit($id)
    {
        // Verifica si la solicitud es un POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recopila los datos del formulario en un array
            $data = [
              'Nombre' => $_POST['Nombre'],
              'Producto' => $_POST['Producto'],
              'Telefono' => $_POST['Telefono'],
              'Email' => $_POST['Email'],
            ];
            // Llama al método updateSupplier del modelo para actualizar el proveedor
            $this->supplierModel->updateSupplier($id, $data);
            // Redirige a la lista de proveedores después de editar
            header('Location: index.php?action=list_suppliers');
        } else {
            // Obtiene el proveedor por su ID y muestra la vista de edición si no es un POST
            $supplier = $this->supplierModel->getSupplierById($id);
            include 'views/edit_supplier.php';
        }
    }

    // Método para eliminar un proveedor por su ID
    public function delete($id)
    {
        // Llama al método deleteSupplier del modelo para eliminar el proveedor
        $this->supplierModel->deleteSupplier($id);
        // Redirige a la lista de proveedores después de eliminar
        header('Location: index.php?action=list_suppliers');
    }

    // Método para listar todos los proveedores
    public function list()
    {
        // Obtiene todos los proveedores y muestra la vista correspondiente
        $suppliers = $this->supplierModel->getAllSuppliers();
        include 'views/list_suppliers.php';
    }
}
