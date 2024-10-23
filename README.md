# Inventario Papelería Benetton

## Descripción

El **Inventario Papelería Benetton** es un sistema web diseñado para gestionar el inventario de productos de una papelería. Permite a los usuarios realizar un seguimiento de los productos disponibles, gestionar el stock, registrar entradas y salidas, y generar reportes de inventario. Está desarrollado siguiendo la arquitectura MVC (Modelo-Vista-Controlador) con PHP y MySQL.

## Características

- **Gestión de productos**: Agregar, editar y eliminar productos del inventario.
- **Control de stock**: Registro de entradas y salidas de productos.
- **Reportes**: Generación de reportes de inventario para análisis de productos y ventas.
- **Gestión de usuarios**: Sistema de autenticación para gestionar el acceso a la plataforma (login y roles de usuario).
- **Interfaz amigable**: Diseñado para ser fácil de usar con una interfaz simple e intuitiva.

## Requisitos del sistema

- Servidor web con PHP 7.4 o superior.
- Base de datos MySQL 5.7 o superior.
- Servidor Apache o Nginx.
- Composer (para gestión de dependencias de PHP).

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto localmente:

1. Clona este repositorio en tu máquina local:
    ```bash
    git clone https://github.com/tuusuario/inventario-papeleria-benetton.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd inventario-papeleria-benetton
    ```

3. Instala las dependencias utilizando Composer:
    ```bash
    composer install
    ```

4. Crea una base de datos en MySQL y actualiza el archivo de configuración `.env` con los datos de acceso a la base de datos:
    ```bash
    DB_HOST=localhost
    DB_NAME=nombre_base_de_datos
    DB_USER=usuario
    DB_PASS=contraseña
    ```

5. Importa el archivo `database.sql` para crear las tablas necesarias:
    ```bash
    mysql -u usuario -p nombre_base_de_datos < database.sql
    ```

6. Inicia el servidor local:
    ```bash
    php -S localhost:8000
    ```

7. Abre tu navegador web y navega a `http://localhost:8000`.

## Uso

1. Inicia sesión en la plataforma utilizando las credenciales proporcionadas por el administrador.
2. Agrega o edita productos en el inventario.
3. Gestiona el stock de productos registrando entradas o salidas.
4. Genera reportes para ver el estado del inventario y analizar ventas.

## Contribuciones

Las contribuciones son bienvenidas. Para contribuir, por favor sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza los cambios necesarios y realiza commits descriptivos.
4. Envía una solicitud de Pull Request (PR).

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).

