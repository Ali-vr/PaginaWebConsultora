<?php ob_start();

$proyectos = [
    [
        'titulo'    => 'Hierro y Madera',
        'subtitulo' => 'E-Commerce · Artesanías',
        'desc'      => 'Tienda online para un artesano maderero con catálogo de productos, carrito de compras basado en sesiones, checkout en 3 pasos y panel de administración con CRUD completo.',
        'techs'     => ['PHP 8', 'Slim 4', 'Bootstrap 5', 'MySQL', 'Composer'],
        'color_a'   => '#1a1a2e',
        'color_b'   => '#16213e',
        'icon'      => 'bi-tree',
        'tipo'      => 'E-Commerce',
        'estado'    => 'Entregado',
        'link'      => 'https://github.com/Ali-vr',
    ],
    [
        'titulo'    => 'Landing Corporativa',
        'subtitulo' => 'Sitio Web · Institucional',
        'desc'      => 'Sitio institucional con navbar responsive, carrusel de servicios, sección de equipo, acordeón FAQ y formulario de contacto con validación frontend y backend.',
        'techs'     => ['Bootstrap 5', 'PHP', 'JS', 'CSS3'],
        'color_a'   => '#0f3460',
        'color_b'   => '#533483',
        'icon'      => 'bi-building',
        'tipo'      => 'Sitio Web',
        'estado'    => 'Entregado',
        'link'      => 'https://github.com/Ali-vr',
    ],
    [
        'titulo'    => 'Panel de Gestión',
        'subtitulo' => 'App Web · Dashboard',
        'desc'      => 'Sistema de administración con autenticación, roles de usuario diferenciados, CRUD de entidades y dashboard con gráficos de actividad.',
        'techs'     => ['PHP', 'Slim', 'MySQL', 'Chart.js', 'Bootstrap'],
        'color_a'   => '#1b4332',
        'color_b'   => '#2d6a4f',
        'icon'      => 'bi-clipboard-data',
        'tipo'      => 'App Web',
        'estado'    => 'En curso',
        'link'      => 'https://github.com/Ali-vr',
    ],
    [
        'titulo'    => 'Índice de Repositorios',
        'subtitulo' => 'Portfolio · GitHub Pages',
        'desc'      => 'Página índice de repositorios con estética retro gaming (Super Mario Bros 3). Mapa de mundos interactivo con zonas temáticas y personajes pixel art para cada proyecto.',
        'techs'     => ['HTML5', 'CSS3', 'JS', 'Pixel Art'],
        'color_a'   => '#3d1a4b',
        'color_b'   => '#6b2d87',
        'icon'      => 'bi-joystick',
        'tipo'      => 'Frontend',
        'estado'    => 'Entregado',
        'link'      => 'https://github.com/Ali-vr',
    ],
    [
        'titulo'    => 'FénixCode Website',
        'subtitulo' => 'Sitio Consultora · Este proyecto',
        'desc'      => 'El sitio web institucional de FénixCode. Desarrollado con Slim Framework, Bootstrap 5 y Composer. Presenta los servicios, equipo, portafolio y formulario de contacto.',
        'techs'     => ['PHP', 'Slim 4', 'Bootstrap 5', 'Composer'],
        'color_a'   => '#7c2d12',
        'color_b'   => '#c2410c',
        'icon'      => 'bi-fire',
        'tipo'      => 'Sitio Web',
        'estado'    => 'En curso',
        'link'      => 'https://github.com/Ali-vr/PaginaWebConsultora',
    ],
];
?>

<!-- PAGE HEADER -->
<section class="fc-page-header">
    <div class="container">
        <div class="row align-items-center py-5 mt-5">
            <div class="col-lg-8">
                <div class="fc-eyebrow mb-3"><span class="fc-dot"></span> Portafolio</div>
                <h1 class="fc-hero-title mb-3">Proyectos que<br>hablan solos.</h1>
                <p class="fc-hero-subtitle">Cada proyecto es la solución a un problema real. Acá están los que más nos enorgullecen.</p>
            </div>
        </div>
    </div>
</section>

<!-- FILTROS -->
<section class="fc-section pb-0 pt-4">
    <div class="container">
        <div class="d-flex gap-2 flex-wrap" id="filtros">
            <button class="fc-filter-btn active" data-filter="all">Todos</button>
            <button class="fc-filter-btn" data-filter="E-Commerce">E-Commerce</button>
            <button class="fc-filter-btn" data-filter="Sitio Web">Sitios Web</button>
            <button class="fc-filter-btn" data-filter="App Web">Apps Web</button>
            <button class="fc-filter-btn" data-filter="Frontend">Frontend</button>
        </div>
    </div>
</section>

<!-- PROYECTOS GRID -->
<section class="fc-section py-5">
    <div class="container">
        <div class="row g-4" id="proyectosGrid">
            <?php foreach ($proyectos as $p): ?>
            <div class="col-md-6 col-lg-4 fc-project-item" data-tipo="<?= htmlspecialchars($p['tipo']) ?>">
                <div class="fc-project-card-full h-100">
                    <div class="fc-project-img-full" style="background: linear-gradient(135deg, <?= $p['color_a'] ?>, <?= $p['color_b'] ?>);">
                        <div class="fc-project-tech-row">
                            <?php foreach ($p['techs'] as $tech): ?>
                            <span class="fc-tech-badge"><?= htmlspecialchars($tech) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <i class="bi <?= $p['icon'] ?> fc-project-icon-lg"></i>
                        <div class="fc-project-estado <?= $p['estado'] === 'Entregado' ? 'fc-estado-done' : 'fc-estado-wip' ?>">
                            <?= $p['estado'] === 'Entregado' ? '<i class="bi bi-check-circle-fill me-1"></i>' : '<i class="bi bi-circle-half me-1"></i>' ?>
                            <?= htmlspecialchars($p['estado']) ?>
                        </div>
                    </div>
                    <div class="fc-project-body p-4">
                        <div class="fc-project-tipo mb-1"><?= htmlspecialchars($p['subtitulo']) ?></div>
                        <h5 class="fc-project-name mb-2"><?= htmlspecialchars($p['titulo']) ?></h5>
                        <p class="fc-project-body-desc mb-4"><?= htmlspecialchars($p['desc']) ?></p>
                        <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" class="fc-link-arrow">Ver en GitHub <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="fc-cta-section py-6">
    <div class="container">
        <div class="fc-cta-card text-center">
            <div class="fc-section-eyebrow mb-3">¿Tenés un proyecto en mente?</div>
            <h2 class="fc-section-title text-white mb-3">El próximo caso<br>de éxito puede ser el tuyo.</h2>
            <p class="fc-cta-desc mb-5">Contanos tu idea y te mostramos cómo la haríamos realidad.</p>
            <a href="/contacto" class="fc-btn-primary fc-btn-lg">Empezar ahora <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
