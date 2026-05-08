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
        <li>
            <a href="#" class="activo" data-page="home">
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="#" data-page="reportes">
                <i class="fa-solid fa-clipboard-list"></i>
                <span>Reportes</span>
            </a>
        </li>
        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>