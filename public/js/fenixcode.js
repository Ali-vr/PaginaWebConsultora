/* ================================================
   FENIXCODE — JavaScript
   Canvas particles · Counters · Filters · Scroll animations
   ================================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.querySelector('.fc-navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                navbar.style.background = 'rgba(13, 17, 23, 0.97)';
            } else {
                navbar.style.background = 'rgba(13, 17, 23, 0.85)';
            }
        });
    }

    // ===== CANVAS PARTICLES (HERO) =====
    const canvas = document.getElementById('codeCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];

        const symbols = ['{', '}', '<', '>', '/', '=', ';', '(', ')', 'fn', '=>', '&&', '||', '0', '1', 'php', 'sql', 'GET', 'POST'];

        function resize() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }

        function createParticle() {
            return {
                x: Math.random() * canvas.width,
                y: canvas.height + 20,
                speed: 0.4 + Math.random() * 0.8,
                opacity: 0.1 + Math.random() * 0.25,
                symbol: symbols[Math.floor(Math.random() * symbols.length)],
                size: 11 + Math.random() * 5,
                drift: (Math.random() - 0.5) * 0.3,
            };
        }

        function initParticles() {
            particles = [];
            for (let i = 0; i < 35; i++) {
                const p = createParticle();
                p.y = Math.random() * canvas.height;
                particles.push(p);
            }
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p, i) => {
                ctx.save();
                ctx.globalAlpha = p.opacity;
                ctx.fillStyle = '#FF6B35';
                ctx.font = `${p.size}px 'Courier New', monospace`;
                ctx.fillText(p.symbol, p.x, p.y);
                ctx.restore();

                p.y -= p.speed;
                p.x += p.drift;
                p.opacity = Math.max(0, p.opacity - 0.0002);

                if (p.y < -30 || p.opacity <= 0) {
                    particles[i] = createParticle();
                }
            });
            requestAnimationFrame(draw);
        }

        resize();
        initParticles();
        draw();
        window.addEventListener('resize', () => { resize(); initParticles(); });
    }

    // ===== COUNTER ANIMATION =====
    const counters = document.querySelectorAll('.fc-stat-num[data-target]');
    if (counters.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));

        function animateCounter(el) {
            const target = parseInt(el.dataset.target, 10);
            const duration = 1500;
            const start = performance.now();
            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const ease = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(ease * target);
                if (progress < 1) requestAnimationFrame(update);
                else el.textContent = target;
            }
            requestAnimationFrame(update);
        }
    }

    // ===== FADE IN ON SCROLL =====
    const fadeEls = document.querySelectorAll('.fc-service-card, .fc-process-step, .fc-team-card, .fc-project-card, .fc-project-card-full, .fc-service-detail-card, .fc-tech-card');
    fadeEls.forEach(el => el.classList.add('fc-fade-in'));

    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                fadeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    fadeEls.forEach(el => fadeObserver.observe(el));

    // ===== PROJECT FILTER (trabajos page) =====
    const filterBtns = document.querySelectorAll('.fc-filter-btn');
    const projectItems = document.querySelectorAll('.fc-project-item');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                projectItems.forEach(item => {
                    if (filter === 'all' || item.dataset.tipo === filter) {
                        item.style.display = '';
                        setTimeout(() => item.style.opacity = '1', 10);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => item.style.display = 'none', 250);
                    }
                });
            });
        });
    }

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ===== FORM VALIDATION (contacto) =====
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        const inputs = contactForm.querySelectorAll('.fc-input');
        inputs.forEach(input => {
            input.addEventListener('blur', () => validateField(input));
        });

        function validateField(field) {
            field.style.borderColor = '';
            if (field.hasAttribute('required') && !field.value.trim()) {
                field.style.borderColor = 'rgba(239,68,68,0.6)';
                return false;
            }
            if (field.type === 'email' && field.value.trim()) {
                const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value);
                if (!emailOk) { field.style.borderColor = 'rgba(239,68,68,0.6)'; return false; }
            }
            field.style.borderColor = 'rgba(74,222,128,0.4)';
            return true;
        }
    }

});
