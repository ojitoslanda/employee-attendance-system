<!--El archivo .htacces tiene este linea RewriteRule ^(.+)$ app/index.php?url=$1 [QSA,L] -->
<!--Detectamos en qué pagina estamos para marcar el link activo del siderbar(inicio,producto,...)-->
<?php
$rutaActual = explode('/', trim($_GET['url'] ?? 'dashboard', '/'))[0] ?: 'dashboard';
?>

<!-- TOPBAR (solo visible en móvil) -->
<div class="topbar">
    <div class="title-business">
        <span><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></span>
    </div>
    <div class="btn-menu">
        <button class="hamburger" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<!-- OVERLAY -->
<div class="overlay"></div>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo"><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></div>
    <ul>
        <!-- ================ START DASHBOARD ================ -->
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard"
                class="<?php echo $rutaActual === 'dashboard' ? 'activo' : ''; ?>">
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </a>
        </li>
        <!-- ================ END DASHBOARD ================ -->

        <!-- ================ START EMPLEADOS ================ -->
        <!-- 
        Se agrega la clase "show" dinámicamente cuando la ruta actual es "empleados".
        Esto permite mantener abierto el menú desplegable (dropdown) de empleados
        para indicar visualmente en qué sección se encuentra el usuario.
        Si la ruta no coincide, solo se aplica la clase normal "dropdown".
        <li class="<?php //echo $rutaActual === 'empleados' ? 'dropdown show' : 'dropdown'; ?>">
        -->
        <li class="<?php echo $rutaActual === 'empleados' ? 'dropdown show' : 'dropdown'; ?>" class="dropdown">
            <a href="#" class="dropbtn" class="<?php echo $rutaActual === 'empleados' ? 'activo' : ''; ?>">
                <i class="fa-solid fa-clipboard-list"></i>
                <span>Empleados</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </a>
            <div class="dropdown-content">
                <a href="<?php echo BASE_URL; ?>/empleados"
                    class="<?php echo $rutaActual === 'empleados' ? 'activo' : ''; ?>">
                    <i class="fa-solid fa-users"></i>
                    Reporte
                </a>
                <a href="#">
                    <i class="fa-solid fa-edit"></i>
                    Registrar
                </a>
            </div>
        </li>
        <!-- ================ END EMPLEADOS ================ -->

        <!-- ================ START USUARIOS ================ -->
        <li>
            <a href="#" class="<?php echo $rutaActual === 'usuario' ? 'activo' : ''; ?>">
                <i class="fa-solid fa-user"></i>
                <span>Usuarios</span>
            </a>
        </li>
        <!-- ================ END USUARIOS ================ -->
        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>


<script src="<?php echo BASE_URL; ?>/public/js/dropdown.js"></script>