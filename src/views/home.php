<?php ob_start(); ?>

<!-- HERO -->
<section class="fc-hero d-flex align-items-center" id="hero">
    <canvas id="codeCanvas" class="fc-canvas"></canvas>
    <div class="container position-relative z-1">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-7 pt-5">
                <div class="fc-eyebrow mb-3">
                    <span class="fc-dot"></span> Consultora de Desarrollo Web
                </div>
                <h1 class="fc-hero-title mb-4">
                    Construimos el<br>
                    <span class="fc-highlight">futuro digital</span><br>
                    de tu empresa.
                </h1>
                <p class="fc-hero-subtitle mb-5">
                    Desde sitios web corporativos hasta aplicaciones web complejas.
                    FénixCode diseña, desarrolla y lanza productos digitales que escalan.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/trabajos" class="fc-btn-primary">Ver nuestros trabajos <i class="bi bi-arrow-right ms-1"></i></a>
                    <a href="/contacto" class="fc-btn-ghost">Hablar con el equipo</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-center">
                <div class="fc-hero-card">
                    <div class="fc-code-block">
                        <div class="fc-code-line"><span class="fc-c-kw">const</span> <span class="fc-c-var">proyecto</span> = {</div>
                        <div class="fc-code-line">&nbsp;&nbsp;<span class="fc-c-key">cliente</span>: <span class="fc-c-str">"Tu empresa"</span>,</div>
                        <div class="fc-code-line">&nbsp;&nbsp;<span class="fc-c-key">tecnología</span>: <span class="fc-c-str">"PHP + Slim"</span>,</div>
                        <div class="fc-code-line">&nbsp;&nbsp;<span class="fc-c-key">diseño</span>: <span class="fc-c-str">"Bootstrap 5"</span>,</div>
                        <div class="fc-code-line">&nbsp;&nbsp;<span class="fc-c-key">resultado</span>: <span class="fc-c-str">"🚀 Lanzado"</span></div>
                        <div class="fc-code-line">};</div>
                        <div class="fc-code-cursor"></div>
                    </div>
                    <div class="fc-card-badge">
                        <i class="bi bi-check-circle-fill text-success me-1"></i> Deploy exitoso
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fc-hero-scroll">
        <a href="#servicios-preview"><i class="bi bi-chevron-down"></i></a>
    </div>
</section>

<!-- STATS -->
<section class="fc-stats-bar py-4">
    <div class="container">
        <div class="row g-3 text-center">
            <div class="col-6 col-md-3">
                <div class="fc-stat-item">
                    <span class="fc-stat-num" data-target="12">0</span>
                    <span class="fc-stat-label">Proyectos entregados</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fc-stat-item">
                    <span class="fc-stat-num" data-target="4">0</span>
                    <span class="fc-stat-label">Desarrolladores</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fc-stat-item">
                    <span class="fc-stat-num" data-target="100">0</span><span class="fc-stat-num">%</span>
                    <span class="fc-stat-label">Clientes satisfechos</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fc-stat-item">
                    <span class="fc-stat-num" data-target="2">0</span>
                    <span class="fc-stat-label">Años de experiencia</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICIOS PREVIEW -->
<section class="fc-section py-6" id="servicios-preview">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="fc-section-eyebrow mb-2">Lo que hacemos</div>
                <h2 class="fc-section-title">Servicios diseñados<br>para crecer con vos</h2>
            </div>
            <div class="col-lg-5 offset-lg-1 d-flex align-items-end">
                <p class="fc-section-desc">Combinamos diseño profesional con tecnología robusta para entregar productos digitales que funcionan de verdad.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="fc-service-card h-100">
                    <div class="fc-service-icon mb-3"><i class="bi bi-globe2"></i></div>
                    <h5 class="fc-service-title">Sitios Web</h5>
                    <p class="fc-service-desc">Diseño y desarrollo de sitios corporativos, landing pages y portfolios que convierten visitantes en clientes.</p>
                    <a href="/servicios" class="fc-link-arrow">Ver más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-service-card h-100 fc-service-featured">
                    <div class="fc-service-icon mb-3"><i class="bi bi-app-indicator"></i></div>
                    <h5 class="fc-service-title">Apps Web</h5>
                    <p class="fc-service-desc">Aplicaciones web a medida con paneles de administración, autenticación y lógica de negocio compleja.</p>
                    <a href="/servicios" class="fc-link-arrow">Ver más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-service-card h-100">
                    <div class="fc-service-icon mb-3"><i class="bi bi-bag-check"></i></div>
                    <h5 class="fc-service-title">E-Commerce</h5>
                    <p class="fc-service-desc">Tiendas online con catálogo de productos, carrito de compras, checkout y gestión de pedidos integrada.</p>
                    <a href="/servicios" class="fc-link-arrow">Ver más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-service-card h-100">
                    <div class="fc-service-icon mb-3"><i class="bi bi-palette2"></i></div>
                    <h5 class="fc-service-title">UX/UI Design</h5>
                    <p class="fc-service-desc">Interfaces pensadas para el usuario. Wireframes, prototipos y diseño visual que comunica y retiene.</p>
                    <a href="/servicios" class="fc-link-arrow">Ver más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESO -->
<section class="fc-section fc-process-section py-6">
    <div class="container">
        <div class="text-center mb-5">
            <div class="fc-section-eyebrow mb-2">Cómo trabajamos</div>
            <h2 class="fc-section-title">Un proceso claro,<br>resultados predecibles</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="fc-process-step">
                    <div class="fc-process-num">01</div>
                    <h5 class="fc-process-title">Descubrimiento</h5>
                    <p class="fc-process-desc">Analizamos tus objetivos, usuarios y competencia para definir una estrategia digital sólida.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-process-step">
                    <div class="fc-process-num">02</div>
                    <h5 class="fc-process-title">Diseño</h5>
                    <p class="fc-process-desc">Creamos wireframes y prototipos visuales. Vos aprobás el diseño antes de que escribamos una línea de código.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-process-step">
                    <div class="fc-process-num">03</div>
                    <h5 class="fc-process-title">Desarrollo</h5>
                    <p class="fc-process-desc">Construimos con PHP, Slim Framework y Bootstrap 5. Código limpio, mantenible y documentado.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fc-process-step">
                    <div class="fc-process-num">04</div>
                    <h5 class="fc-process-title">Lanzamiento</h5>
                    <p class="fc-process-desc">Deploy, testing final y capacitación. Seguimos disponibles post-lanzamiento para soporte y mejoras.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRABAJOS PREVIEW -->
<section class="fc-section py-6">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3">
            <div>
                <div class="fc-section-eyebrow mb-2">Portafolio</div>
                <h2 class="fc-section-title">Proyectos que<br>hablan por nosotros</h2>
            </div>
            <a href="/trabajos" class="fc-btn-outline">Ver todos los trabajos</a>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="fc-project-card">
                    <div class="fc-project-img" style="background: linear-gradient(135deg, #1a1a2e, #16213e);">
                        <div class="fc-project-tech">
                            <span class="fc-tech-badge">PHP</span>
                            <span class="fc-tech-badge">Slim</span>
                            <span class="fc-tech-badge">MySQL</span>
                        </div>
                        <i class="bi bi-tree fc-project-icon"></i>
                    </div>
                    <div class="fc-project-info p-3">
                        <h6 class="fc-project-title">Hierro y Madera</h6>
                        <p class="fc-project-desc">E-commerce para artesano maderero con carrito, checkout en 3 pasos y panel admin.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="fc-project-card">
                    <div class="fc-project-img" style="background: linear-gradient(135deg, #0f3460, #533483);">
                        <div class="fc-project-tech">
                            <span class="fc-tech-badge">Bootstrap</span>
                            <span class="fc-tech-badge">JS</span>
                        </div>
                        <i class="bi bi-shop fc-project-icon"></i>
                    </div>
                    <div class="fc-project-info p-3">
                        <h6 class="fc-project-title">Landing Corporativa</h6>
                        <p class="fc-project-desc">Sitio institucional con secciones de servicios, equipo y formulario de contacto responsive.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="fc-project-card">
                    <div class="fc-project-img" style="background: linear-gradient(135deg, #1b4332, #2d6a4f);">
                        <div class="fc-project-tech">
                            <span class="fc-tech-badge">PHP</span>
                            <span class="fc-tech-badge">API REST</span>
                        </div>
                        <i class="bi bi-clipboard-data fc-project-icon"></i>
                    </div>
                    <div class="fc-project-info p-3">
                        <h6 class="fc-project-title">Panel de Gestión</h6>
                        <p class="fc-project-desc">Dashboard administrativo con CRUD completo, roles de usuario y exportación de reportes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="fc-cta-section py-6">
    <div class="container">
        <div class="fc-cta-card text-center">
            <div class="fc-section-eyebrow mb-3">¿Tenés un proyecto?</div>
            <h2 class="fc-section-title text-white mb-3">Transformemos tu idea<br>en realidad digital</h2>
            <p class="fc-cta-desc mb-5">Sin compromisos. Contanos tu proyecto y te respondemos en menos de 24 horas.</p>
            <a href="/contacto" class="fc-btn-primary fc-btn-lg">Iniciá tu proyecto <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
