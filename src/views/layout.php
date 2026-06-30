<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'FénixCode') ?></title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/fenixcode.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fc-navbar fixed-top">
    <div class="container">
        <a class="navbar-brand fc-brand" href="/">
            <span class="fc-logo-f">F</span>énixCode
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'servicios' ? 'active' : '' ?>" href="/servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'trabajos' ? 'active' : '' ?>" href="/trabajos">Trabajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'equipo' ? 'active' : '' ?>" href="/equipo">Equipo</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn fc-btn-nav <?= ($activePage ?? '') === 'contacto' ? 'active' : '' ?>" href="/contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENIDO PRINCIPAL -->
<main>
    <?= $content ?? '' ?>
</main>

<!-- FOOTER -->
<footer class="fc-footer py-5 mt-0">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-4">
                <div class="fc-brand fs-4 mb-2">
                    <span class="fc-logo-f">F</span>énixCode
                </div>
                <p class="fc-footer-text">Transformamos ideas en experiencias digitales que crecen con tu negocio.</p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="fc-social-link"><i class="bi bi-github"></i></a>
                    <a href="#" class="fc-social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="fc-social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="fc-social-link"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2 offset-lg-2">
                <h6 class="fc-footer-heading mb-3">Navegación</h6>
                <ul class="list-unstyled fc-footer-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/servicios">Servicios</a></li>
                    <li><a href="/trabajos">Trabajos</a></li>
                    <li><a href="/equipo">Equipo</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fc-footer-heading mb-3">Servicios</h6>
                <ul class="list-unstyled fc-footer-links">
                    <li><a href="/servicios">Sitios Web</a></li>
                    <li><a href="/servicios">Apps Web</a></li>
                    <li><a href="/servicios">E-Commerce</a></li>
                    <li><a href="/servicios">UX/UI</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h6 class="fc-footer-heading mb-3">Contacto</h6>
                <ul class="list-unstyled fc-footer-links">
                    <li><i class="bi bi-envelope me-2"></i>hola@fenixcode.dev</li>
                    <li><i class="bi bi-geo-alt me-2"></i>Berazategui, Bs.As.</li>
                </ul>
            </div>
        </div>
        <hr class="fc-footer-divider mt-4 mb-3">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="fc-footer-text mb-0 small">© 2026 FénixCode. Todos los derechos reservados.</p>
            <p class="fc-footer-text mb-0 small">Hecho con <i class="bi bi-fire text-warning"></i> en Argentina</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="/js/fenixcode.js"></script>
</body>
</html>
