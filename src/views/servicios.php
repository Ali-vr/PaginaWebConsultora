<?php ob_start(); ?>

<!-- PAGE HEADER -->
<section class="fc-page-header">
    <div class="container">
        <div class="row align-items-center py-5 mt-5">
            <div class="col-lg-8">
                <div class="fc-eyebrow mb-3"><span class="fc-dot"></span> Servicios</div>
                <h1 class="fc-hero-title mb-3">Todo lo que necesitás<br>para estar en la web.</h1>
                <p class="fc-hero-subtitle">Desarrollamos soluciones digitales completas, desde el diseño hasta el deploy. Tecnología real para negocios reales.</p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICIOS PRINCIPALES -->
<section class="fc-section py-6">
    <div class="container">
        <div class="row g-5">

            <!-- Sitios Web -->
            <div class="col-lg-6">
                <div class="fc-service-detail-card h-100">
                    <div class="fc-service-detail-header">
                        <div class="fc-service-icon-lg"><i class="bi bi-globe2"></i></div>
                        <div>
                            <h3 class="fc-service-detail-title">Sitios Web</h3>
                            <span class="fc-service-tag">Corporativo · Institucional · Landing</span>
                        </div>
                    </div>
                    <p class="fc-service-detail-desc">Diseñamos y desarrollamos sitios web que representan tu marca con profesionalismo. Rápidos, seguros y optimizados para SEO desde el primer día.</p>
                    <ul class="fc-feature-list">
                        <li><i class="bi bi-check2"></i> Diseño responsive para todos los dispositivos</li>
                        <li><i class="bi bi-check2"></i> Optimización SEO técnica y de contenido</li>
                        <li><i class="bi bi-check2"></i> Formularios de contacto y llamadas a la acción</li>
                        <li><i class="bi bi-check2"></i> Integración con Google Analytics y Maps</li>
                        <li><i class="bi bi-check2"></i> Panel para actualizar contenido sin código</li>
                    </ul>
                </div>
            </div>

            <!-- Apps Web -->
            <div class="col-lg-6">
                <div class="fc-service-detail-card fc-service-detail-featured h-100">
                    <div class="fc-service-detail-header">
                        <div class="fc-service-icon-lg"><i class="bi bi-app-indicator"></i></div>
                        <div>
                            <h3 class="fc-service-detail-title">Aplicaciones Web</h3>
                            <span class="fc-service-tag">SaaS · Sistemas · Portales</span>
                        </div>
                    </div>
                    <p class="fc-service-detail-desc">Construimos aplicaciones web a medida con lógica de negocio compleja. Desde sistemas de gestión hasta plataformas SaaS con múltiples roles de usuario.</p>
                    <ul class="fc-feature-list">
                        <li><i class="bi bi-check2"></i> Autenticación y roles de usuario</li>
                        <li><i class="bi bi-check2"></i> CRUD completo con base de datos MySQL</li>
                        <li><i class="bi bi-check2"></i> APIs REST para integraciones externas</li>
                        <li><i class="bi bi-check2"></i> Dashboard con métricas en tiempo real</li>
                        <li><i class="bi bi-check2"></i> Arquitectura escalable con Slim Framework</li>
                    </ul>
                </div>
            </div>

            <!-- E-Commerce -->
            <div class="col-lg-6">
                <div class="fc-service-detail-card h-100">
                    <div class="fc-service-detail-header">
                        <div class="fc-service-icon-lg"><i class="bi bi-bag-check"></i></div>
                        <div>
                            <h3 class="fc-service-detail-title">E-Commerce</h3>
                            <span class="fc-service-tag">Tiendas · Catálogos · Ventas</span>
                        </div>
                    </div>
                    <p class="fc-service-detail-desc">Tiendas online que venden. Implementamos todo el flujo de compra: catálogo, carrito, checkout y gestión de pedidos con panel administrativo.</p>
                    <ul class="fc-feature-list">
                        <li><i class="bi bi-check2"></i> Catálogo dinámico con categorías y filtros</li>
                        <li><i class="bi bi-check2"></i> Carrito persistente y checkout en pasos</li>
                        <li><i class="bi bi-check2"></i> Gestión de stock e inventario</li>
                        <li><i class="bi bi-check2"></i> Panel de pedidos y estadísticas de venta</li>
                        <li><i class="bi bi-check2"></i> Integración con medios de pago</li>
                    </ul>
                </div>
            </div>

            <!-- UX/UI -->
            <div class="col-lg-6">
                <div class="fc-service-detail-card h-100">
                    <div class="fc-service-detail-header">
                        <div class="fc-service-icon-lg"><i class="bi bi-palette2"></i></div>
                        <div>
                            <h3 class="fc-service-detail-title">Diseño UX/UI</h3>
                            <span class="fc-service-tag">Wireframes · Prototipos · Identidad</span>
                        </div>
                    </div>
                    <p class="fc-service-detail-desc">El mejor código del mundo falla si la experiencia de usuario es pobre. Diseñamos interfaces que guían, retienen y convierten.</p>
                    <ul class="fc-feature-list">
                        <li><i class="bi bi-check2"></i> Investigación de usuarios y competencia</li>
                        <li><i class="bi bi-check2"></i> Wireframes y arquitectura de información</li>
                        <li><i class="bi bi-check2"></i> Prototipos interactivos en Figma</li>
                        <li><i class="bi bi-check2"></i> Sistema de diseño y guías de estilo</li>
                        <li><i class="bi bi-check2"></i> Testing de usabilidad e iteración</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TECNOLOGÍAS -->
<section class="fc-section fc-tech-section py-6">
    <div class="container">
        <div class="text-center mb-5">
            <div class="fc-section-eyebrow mb-2">Stack técnico</div>
            <h2 class="fc-section-title">Las herramientas con las<br>que construimos</h2>
        </div>
        <div class="row g-3 justify-content-center">
            <?php
            $techs = [
                ['icon' => 'bi-filetype-php', 'name' => 'PHP 8.2', 'desc' => 'Backend robusto'],
                ['icon' => 'bi-lightning-charge', 'name' => 'Slim Framework', 'desc' => 'Routing ágil'],
                ['icon' => 'bi-bootstrap', 'name' => 'Bootstrap 5', 'desc' => 'UI responsive'],
                ['icon' => 'bi-database', 'name' => 'MySQL', 'desc' => 'Datos seguros'],
                ['icon' => 'bi-git', 'name' => 'Git & GitHub', 'desc' => 'Control de versiones'],
                ['icon' => 'bi-box', 'name' => 'Composer', 'desc' => 'Dependencias PHP'],
                ['icon' => 'bi-filetype-js', 'name' => 'JavaScript', 'desc' => 'Interactividad'],
                ['icon' => 'bi-figma', 'name' => 'Figma', 'desc' => 'Diseño y prototipos'],
            ];
            foreach ($techs as $tech): ?>
            <div class="col-6 col-md-3 col-lg-3">
                <div class="fc-tech-card text-center p-3">
                    <i class="bi <?= $tech['icon'] ?> fc-tech-icon d-block mb-2"></i>
                    <div class="fc-tech-name"><?= $tech['name'] ?></div>
                    <div class="fc-tech-desc"><?= $tech['desc'] ?></div>
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
            <div class="fc-section-eyebrow mb-3">¿Necesitás un servicio específico?</div>
            <h2 class="fc-section-title text-white mb-3">Cada proyecto es único.<br>Hablemos del tuyo.</h2>
            <p class="fc-cta-desc mb-5">Contanos qué necesitás y armamos una propuesta personalizada sin costo.</p>
            <a href="/contacto" class="fc-btn-primary fc-btn-lg">Solicitar presupuesto <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
