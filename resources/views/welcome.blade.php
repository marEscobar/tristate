<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/modern.css') }}">
    </head>
    <body>
        <header>
            <nav class="container">
                <a href="#" class="logo">{{ config('app.name', 'Laravel') }}</a>
                <ul class="nav-links">
            @if (Route::has('login'))
                    @auth
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                        @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @endif
                    @endauth
                    @endif
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                </nav>
        </header>

        <!-- Hero Section con diseño asimétrico -->
        <section class="hero-alt" id="inicio">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <span class="hero-badge">Bienvenido</span>
                        <h1>Innovación Digital <span class="highlight">Sin Límites</span></h1>
                        <p class="hero-description">Transformamos ideas en experiencias digitales excepcionales. Diseñamos soluciones que inspiran, conectan y generan resultados.</p>
                        <div class="hero-buttons">
                            <a href="#servicios" class="btn btn-primary">Descubrir Más</a>
                            <a href="#contacto" class="btn btn-outline">Contactar</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Proyectos</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">98%</div>
                                <div class="stat-label">Satisfacción</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Soporte</div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-visual">
                        <div class="visual-card card-1">
                            <div class="card-icon">✨</div>
                            <h4>Diseño Premium</h4>
                        </div>
                        <div class="visual-card card-2">
                            <div class="card-icon">⚡</div>
                            <h4>Rendimiento</h4>
                        </div>
                        <div class="visual-card card-3">
                            <div class="card-icon">🎯</div>
                            <h4>Resultados</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Servicios con diseño en zigzag -->
        <section class="services-alt" id="servicios">
            <div class="container">
                <div class="section-header">
                    <span class="section-badge">Nuestros Servicios</span>
                    <h2 class="section-title">Soluciones que Impulsan tu Negocio</h2>
                    <p class="section-subtitle">Ofrecemos un conjunto completo de servicios diseñados para llevar tu presencia digital al siguiente nivel</p>
                </div>
                
                <div class="services-list">
                    <div class="service-item service-left">
                        <div class="service-number">01</div>
                        <div class="service-content">
                            <h3>Diseño de Experiencia</h3>
                            <p>Creamos interfaces intuitivas y atractivas que deleitan a los usuarios y convierten visitantes en clientes. Cada detalle está pensado para maximizar la interacción.</p>
                            <ul class="service-features">
                                <li>✓ Diseño UI/UX</li>
                                <li>✓ Prototipado</li>
                                <li>✓ Testing de Usabilidad</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-item service-right">
                        <div class="service-number">02</div>
                        <div class="service-content">
                            <h3>Desarrollo Tecnológico</h3>
                            <p>Construimos aplicaciones web y móviles robustas, escalables y de alto rendimiento utilizando las tecnologías más modernas del mercado.</p>
                            <ul class="service-features">
                                <li>✓ Desarrollo Full Stack</li>
                                <li>✓ Aplicaciones Móviles</li>
                                <li>✓ Integración de APIs</li>
                    </ul>
                        </div>
                    </div>

                    <div class="service-item service-left">
                        <div class="service-number">03</div>
                        <div class="service-content">
                            <h3>Marketing Digital</h3>
                            <p>Estrategias de marketing digital que aumentan tu visibilidad, generan leads calificados y mejoran tu retorno de inversión de manera medible.</p>
                            <ul class="service-features">
                                <li>✓ SEO & SEM</li>
                                <li>✓ Redes Sociales</li>
                                <li>✓ Email Marketing</li>
                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Testimonios -->
        <section class="testimonials">
            <div class="container">
                <div class="section-header">
                    <span class="section-badge">Testimonios</span>
                    <h2 class="section-title">Lo que Dicen Nuestros Clientes</h2>
                </div>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">"</div>
                        <p class="testimonial-text">Excelente trabajo y profesionalismo. El equipo superó nuestras expectativas en cada etapa del proyecto.</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MC</div>
                            <div class="author-info">
                                <div class="author-name">María González</div>
                                <div class="author-role">CEO, TechSolutions</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-quote">"</div>
                        <p class="testimonial-text">La mejor inversión que hemos hecho. Nuestro sitio web ahora refleja perfectamente nuestra marca.</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">JC</div>
                            <div class="author-info">
                                <div class="author-name">Juan Pérez</div>
                                <div class="author-role">Director, InnovateCo</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-quote">"</div>
                        <p class="testimonial-text">Proceso fluido y resultados excepcionales. Definitivamente trabajaremos juntos nuevamente.</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">AL</div>
                            <div class="author-info">
                                <div class="author-name">Ana López</div>
                                <div class="author-role">Fundadora, DesignStudio</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section mejorado -->
        <section class="cta-alt">
            <div class="container">
                <div class="cta-content">
                    <h2>¿Listo para Transformar tu Negocio?</h2>
                    <p>Únete a cientos de empresas que ya confían en nosotros para llevar su presencia digital al siguiente nivel</p>
                    <div class="cta-buttons">
                        <a href="#contacto" class="btn btn-cta-primary">Comenzar Ahora</a>
                        <a href="#servicios" class="btn btn-cta-secondary">Ver Servicios</a>
                    </div>
                </div>
        </div>
        </section>

        <!-- Footer mejorado -->
        <footer id="contacto">
            <div class="container">
                <div class="footer-main">
                    <div class="footer-brand">
                        <h3 class="footer-logo">{{ config('app.name', 'Laravel') }}</h3>
                        <p>Creando experiencias digitales excepcionales desde 2020. Transformamos ideas en realidad.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">Facebook</a>
                            <a href="#" class="social-link">Twitter</a>
                            <a href="#" class="social-link">Instagram</a>
                            <a href="#" class="social-link">LinkedIn</a>
                        </div>
                    </div>
                    <div class="footer-links">
                        <div class="footer-column">
                            <h4>Navegación</h4>
                            <a href="#inicio">Inicio</a>
                            <a href="#servicios">Servicios</a>
                            <a href="#sobre">Sobre Nosotros</a>
                            <a href="#contacto">Contacto</a>
                        </div>
                        <div class="footer-column">
                            <h4>Servicios</h4>
                            <a href="#">Diseño Web</a>
                            <a href="#">Desarrollo</a>
                            <a href="#">Marketing</a>
                            <a href="#">Consultoría</a>
                        </div>
                        <div class="footer-column">
                            <h4>Contacto</h4>
                            <a href="mailto:info@ejemplo.com">info@ejemplo.com</a>
                            <a href="tel:+1234567890">+1 (234) 567-890</a>
                            <p>Lun - Vie: 9:00 - 18:00</p>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
