<!-- sidebar.php -->
<nav class="sidebar">
    <a href="#" class="logo">Bienvenido</a>
    <div class="menu-content">
        <ul class="menu-items">
            <div class="menu-title"><?php echo $_SESSION['user_name']; ?></div>
            <li class="item">
                <div class="submenu-item">
                    <span class="bi bi-house-gear"> Opciones</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Volver
                    </div>
                    <li class="item"><a href="index.php?action=list_products">Productos</a></li>
                    <li class="item"><a href="index.php?action=list_suppliers">Proveedores</a></li>
                    <li class="item"><a href="index.php?action=list">Ordenes</a></li>
                </ul>
            </li>
            <li class="item">
                <div class="submenu-item">
                    <span class="bi bi-nut"> Configuración</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Volver
                    </div>
                    <li class="item"><a href="#">Cambiar Contraseña</a></li>
                    <li class="item"><a href="#">Editar Usuario</a></li>
                    <li class="item"><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li class="item"><a href="#" class="bi bi-box-arrow-right"> Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>
