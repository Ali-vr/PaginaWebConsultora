<?php ob_start();

$equipo = [
    [
        'nombre'   => 'Ali Rodríguez',
        'rol'      => 'Líder de Proyecto & Dev Full Stack',
        'desc'     => 'Responsable de arquitectura y coordinación. Especializada en PHP con Slim Framework, diseño de bases de datos y gestión ágil con Scrum.',
        'skills'   => ['PHP', 'Slim', 'MySQL', 'Scrum'],
        'github'   => 'Ali-vr',
        'linkedin' => '#',
        'inicial'  => 'A',
        'color'    => '#FF6B35',
    ],
    [
        'nombre'   => 'Integrante Dos',
        'rol'      => 'Frontend Developer',
        'desc'     => 'Especialista en interfaces responsivas y experiencia de usuario. Domina Bootstrap 5, JavaScript y diseño accesible.',
        'skills'   => ['Bootstrap', 'JS', 'CSS', 'Figma'],
        'github'   => 'username',
        'linkedin' => '#',
        'inicial'  => 'D',
        'color'    => '#4F8EF7',
    ],
    [
        'nombre'   => 'Integrante Tres',
        'rol'      => 'Backend Developer',
        'desc'     => 'Desarrollador backend con foco en APIs REST, optimización de consultas SQL y seguridad en aplicaciones web PHP.',
        'skills'   => ['PHP', 'MySQL', 'REST', 'Git'],
        'github'   => 'username',
        'linkedin' => '#',
        'inicial'  => 'T',
        'color'    => '#A259FF',
    ],
    [
        'nombre'   => 'Integrante Cuatro',
        'rol'      => 'UX/UI Designer',
        'desc'     => 'Diseñador de experiencias digitales. Transforma requerimientos en interfaces limpias, funcionales y visualmente impactantes.',
        'skills'   => ['Figma', 'UX', 'Prototipado', 'CSS'],
        'github'   => 'username',
        'linkedin' => '#',
        'inicial'  => 'C',
        'color'    => '#0ECFB1',
    ],
];
?>

<!-- PAGE HEADER -->
<section class="fc-page-header">
    <div class="container">
        <div class="row align-items-center py-5 mt-5">
            <div class="col-lg-8">
                <div class="fc-eyebrow mb-3"><span class="fc-dot"></span> El equipo</div>
                <h1 class="fc-hero-title mb-3">Las personas detrás<br>del código.</h1>
                <p class="fc-hero-subtitle">Un equipo de cuatro desarrolladores estudiantes de la E.E.S.T. Nº4 de Berazategui, apasionados por construir productos digitales que importan.</p>
            </div>
        </div>
    </div>
</section>

<!-- EQUIPO -->
<section class="fc-section py-6">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($equipo as $miembro): ?>
            <div class="col-md-6 col-lg-3">
                <div class="fc-team-card h-100">
                    <div class="fc-team-avatar mb-4" style="--avatar-color: <?= $miembro['color'] ?>;">
                        <?= htmlspecialchars($miembro['inicial']) ?>
                    </div>
                    <h5 class="fc-team-name"><?= htmlspecialchars($miembro['nombre']) ?></h5>
                    <div class="fc-team-role mb-3"><?= htmlspecialchars($miembro['rol']) ?></div>
                    <p class="fc-team-desc mb-4"><?= htmlspecialchars($miembro['desc']) ?></p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <?php foreach ($miembro['skills'] as $skill): ?>
                        <span class="fc-skill-badge"><?= htmlspecialchars($skill) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-flex gap-3 mt-auto">
                        <a href="https://github.com/<?= htmlspecialchars($miembro['github']) ?>" target="_blank" class="fc-social-link" title="GitHub"><i class="bi bi-github"></i></a>
                        <a href="<?= htmlspecialchars($miembro['linkedin']) ?>" target="_blank" class="fc-social-link" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- METODOLOGÍA -->
<section class="fc-section fc-process-section py-6">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="fc-section-eyebrow mb-2">Cómo nos organizamos</div>
                <h2 class="fc-section-title mb-4">Trabajamos con<br>metodología Scrum</h2>
                <p class="fc-section-desc mb-4">Organizamos el trabajo en sprints semanales con reuniones diarias de sincronización. Cada miembro del equipo conoce el estado del proyecto en tiempo real.</p>
                <div class="fc-tools-row d-flex flex-wrap gap-3">
                    <span class="fc-tool-chip"><i class="bi bi-github me-1"></i>GitHub</span>
                    <span class="fc-tool-chip"><i class="bi bi-chat-dots me-1"></i>Discord</span>
                    <span class="fc-tool-chip"><i class="bi bi-figma me-1"></i>Figma</span>
                    <span class="fc-tool-chip"><i class="bi bi-code-slash me-1"></i>VS Code</span>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="fc-scrum-board">
                    <div class="fc-scrum-col">
                        <div class="fc-scrum-header">Backlog</div>
                        <div class="fc-scrum-card">US-01 · Landing page</div>
                        <div class="fc-scrum-card">US-02 · Formulario contacto</div>
                    </div>
                    <div class="fc-scrum-col">
                        <div class="fc-scrum-header">En progreso</div>
                        <div class="fc-scrum-card fc-scrum-active">US-05 · Panel admin</div>
                        <div class="fc-scrum-card fc-scrum-active">US-06 · Autenticación</div>
                    </div>
                    <div class="fc-scrum-col">
                        <div class="fc-scrum-header">Terminado</div>
                        <div class="fc-scrum-card fc-scrum-done">US-03 · Setup Slim ✓</div>
                        <div class="fc-scrum-card fc-scrum-done">US-04 · Base de datos ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="fc-cta-section py-6">
    <div class="container">
        <div class="fc-cta-card text-center">
            <h2 class="fc-section-title text-white mb-3">¿Querés trabajar<br>con nosotros?</h2>
            <p class="fc-cta-desc mb-5">Estamos abiertos a nuevos proyectos y colaboraciones. Escribinos y charlamos.</p>
            <a href="/contacto" class="fc-btn-primary fc-btn-lg">Contactar al equipo <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
