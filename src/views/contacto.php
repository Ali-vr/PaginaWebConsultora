<?php ob_start();
$formData = $formData ?? [];
?>

<!-- PAGE HEADER -->
<section class="fc-page-header">
    <div class="container">
        <div class="row align-items-center py-5 mt-5">
            <div class="col-lg-7">
                <div class="fc-eyebrow mb-3"><span class="fc-dot"></span> Contacto</div>
                <h1 class="fc-hero-title mb-3">Hablemos de<br>tu proyecto.</h1>
                <p class="fc-hero-subtitle">Respondemos dentro de las 24 horas hábiles. Nos encanta escuchar ideas nuevas.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTO MAIN -->
<section class="fc-section py-6">
    <div class="container">
        <div class="row g-5">

            <!-- INFO -->
            <div class="col-lg-4">
                <div class="fc-contact-info">
                    <h4 class="fc-contact-info-title mb-4">Información de contacto</h4>

                    <div class="fc-contact-item mb-4">
                        <div class="fc-contact-icon"><i class="bi bi-envelope"></i></div>
                        <div>
                            <div class="fc-contact-label">Email</div>
                            <a href="mailto:hola@fenixcode.dev" class="fc-contact-value">hola@fenixcode.dev</a>
                        </div>
                    </div>

                    <div class="fc-contact-item mb-4">
                        <div class="fc-contact-icon"><i class="bi bi-geo-alt"></i></div>
                        <div>
                            <div class="fc-contact-label">Ubicación</div>
                            <div class="fc-contact-value">Berazategui, Buenos Aires<br>Argentina</div>
                        </div>
                    </div>

                    <div class="fc-contact-item mb-4">
                        <div class="fc-contact-icon"><i class="bi bi-clock"></i></div>
                        <div>
                            <div class="fc-contact-label">Respuesta</div>
                            <div class="fc-contact-value">Menos de 24 horas</div>
                        </div>
                    </div>

                    <div class="fc-contact-item mb-5">
                        <div class="fc-contact-icon"><i class="bi bi-github"></i></div>
                        <div>
                            <div class="fc-contact-label">GitHub</div>
                            <a href="https://github.com/Ali-vr" target="_blank" class="fc-contact-value">github.com/Ali-vr</a>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="https://github.com/Ali-vr" target="_blank" class="fc-social-link"><i class="bi bi-github"></i></a>
                        <a href="#" class="fc-social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="fc-social-link"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO -->
            <div class="col-lg-8">
                <div class="fc-form-card p-4 p-md-5">

                    <?php if ($mensaje ?? null): ?>
                    <div class="fc-alert fc-alert-success mb-4">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <?= htmlspecialchars($mensaje) ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($error ?? null): ?>
                    <div class="fc-alert fc-alert-error mb-4">
                        <i class="bi bi-exclamation-circle-fill me-2"></i>
                        <?= htmlspecialchars($error) ?>
                    </div>
                    <?php endif; ?>

                    <h4 class="fc-form-title mb-1">Envianos un mensaje</h4>
                    <p class="fc-form-subtitle mb-4">Completá el formulario y nos ponemos en contacto.</p>

                    <form action="/contacto" method="POST" novalidate id="contactForm">

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="fc-label" for="nombre">Nombre completo *</label>
                                <input type="text" class="fc-input" id="nombre" name="nombre" placeholder="Tu nombre" value="<?= htmlspecialchars($formData['nombre'] ?? '') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="fc-label" for="email">Email *</label>
                                <input type="email" class="fc-input" id="email" name="email" placeholder="vos@email.com" value="<?= htmlspecialchars($formData['email'] ?? '') ?>" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="fc-label" for="asunto">Asunto *</label>
                            <select class="fc-input fc-select" id="asunto" name="asunto" required>
                                <option value="">Seleccioná un servicio...</option>
                                <option value="Sitio Web" <?= ($formData['asunto'] ?? '') === 'Sitio Web' ? 'selected' : '' ?>>Sitio Web</option>
                                <option value="App Web" <?= ($formData['asunto'] ?? '') === 'App Web' ? 'selected' : '' ?>>Aplicación Web</option>
                                <option value="E-Commerce" <?= ($formData['asunto'] ?? '') === 'E-Commerce' ? 'selected' : '' ?>>E-Commerce</option>
                                <option value="Diseño UX/UI" <?= ($formData['asunto'] ?? '') === 'Diseño UX/UI' ? 'selected' : '' ?>>Diseño UX/UI</option>
                                <option value="Consultoría" <?= ($formData['asunto'] ?? '') === 'Consultoría' ? 'selected' : '' ?>>Consultoría</option>
                                <option value="Otro" <?= ($formData['asunto'] ?? '') === 'Otro' ? 'selected' : '' ?>>Otro</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="fc-label" for="mensaje">Mensaje *</label>
                            <textarea class="fc-input fc-textarea" id="mensaje" name="mensaje" rows="5" placeholder="Contanos tu proyecto: ¿qué necesitás, cuál es tu plazo, algún detalle importante?" required><?= htmlspecialchars($formData['mensaje'] ?? '') ?></textarea>
                        </div>

                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <button type="submit" class="fc-btn-primary">
                                Enviar mensaje <i class="bi bi-send ms-1"></i>
                            </button>
                            <span class="fc-form-note">* Campos obligatorios</span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="fc-section fc-process-section py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <div class="fc-section-eyebrow mb-2">Preguntas frecuentes</div>
                    <h2 class="fc-section-title">Dudas comunes</h2>
                </div>
                <div class="accordion fc-accordion" id="faqAccordion">
                    <div class="accordion-item fc-accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fc-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Cuánto tarda un proyecto web?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fc-accordion-body">
                                Depende del alcance. Un sitio web institucional puede estar listo en 2 a 3 semanas. Una aplicación web con funcionalidades complejas puede llevar entre 4 y 8 semanas. En el primer contacto te damos un estimado más preciso.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fc-accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fc-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Trabajan con clientes de cualquier rubro?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fc-accordion-body">
                                Sí. Hemos trabajado con artesanos, comercios locales, servicios profesionales y emprendimientos tech. Si tu negocio necesita presencia digital, podemos ayudarte.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fc-accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fc-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Qué necesito para empezar?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fc-accordion-body">
                                Solo necesitás una idea y ganas de avanzar. Nosotros te guiamos en el proceso de definir objetivos, funcionalidades y diseño. Si ya tenés materiales (logo, textos, imágenes), mejor, pero no es indispensable.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fc-accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fc-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                ¿Ofrecen soporte después del lanzamiento?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fc-accordion-body">
                                Sí. Incluimos un período de soporte post-lanzamiento para ajustes y corrección de bugs. También podemos acordar un plan de mantenimiento mensual para actualizaciones continuas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
