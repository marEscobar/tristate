<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Carrusel - {{ config('app.name', 'Laravel') }}</title>
        
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
                <a href="{{ url('/') }}" class="logo">{{ config('app.name', 'Laravel') }}</a>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/carousel') }}">Carrusel</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- Sección de Ejemplo de Carrusel -->
            <section class="carousel-section">
                <div class="container">
                    <div class="section-header">
                        <h1 class="section-title">Ejemplo de Carrusel</h1>
                        <p class="section-subtitle">Un carrusel moderno y responsivo con navegación automática y manual</p>
                    </div>

                    <!-- Carrusel Principal -->
                    <div class="carousel-container">
                        <div class="carousel-wrapper">
                            <div class="carousel-track" id="carouselTrack">
                                <!-- Slide 1 -->
                                <div class="carousel-slide active">
                                    <div class="slide-content">
                                        <div class="slide-image" style="background: linear-gradient(135deg, #00416b 0%, #00a859 100%);">
                                            <div class="slide-icon">🎨</div>
                                        </div>
                                        <div class="slide-text">
                                            <h2>Diseño Creativo</h2>
                                            <p>Soluciones de diseño innovadoras que capturan la esencia de tu marca y comunican tu mensaje de manera efectiva.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-slide">
                                    <div class="slide-content">
                                        <div class="slide-image" style="background: linear-gradient(135deg, #00a859 0%, #00416b 100%);">
                                            <div class="slide-icon">💻</div>
                                        </div>
                                        <div class="slide-text">
                                            <h2>Desarrollo Web</h2>
                                            <p>Sitios web modernos, responsivos y optimizados que ofrecen una experiencia de usuario excepcional en todos los dispositivos.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="carousel-slide">
                                    <div class="slide-content">
                                        <div class="slide-image" style="background: linear-gradient(135deg, #00416b 0%, #00a859 100%);">
                                            <div class="slide-icon">🚀</div>
                                        </div>
                                        <div class="slide-text">
                                            <h2>Optimización</h2>
                                            <p>Mejora el rendimiento y la velocidad de tu sitio web para ofrecer la mejor experiencia posible a tus visitantes.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="carousel-slide">
                                    <div class="slide-content">
                                        <div class="slide-image" style="background: linear-gradient(135deg, #00a859 0%, #00416b 100%);">
                                            <div class="slide-icon">📱</div>
                                        </div>
                                        <div class="slide-text">
                                            <h2>Aplicaciones Móviles</h2>
                                            <p>Desarrollamos aplicaciones móviles nativas e híbridas que ofrecen una experiencia fluida y atractiva para tus usuarios.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 5 -->
                                <div class="carousel-slide">
                                    <div class="slide-content">
                                        <div class="slide-image" style="background: linear-gradient(135deg, #00416b 0%, #00a859 100%);">
                                            <div class="slide-icon">🎯</div>
                                        </div>
                                        <div class="slide-text">
                                            <h2>Marketing Digital</h2>
                                            <p>Estrategias de marketing digital que aumentan tu visibilidad, generan leads calificados y mejoran tu ROI.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de Navegación -->
                            <button class="carousel-btn carousel-btn-prev" id="prevBtn" aria-label="Slide anterior">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M15 18l-6-6 6-6"/>
                                </svg>
                            </button>
                            <button class="carousel-btn carousel-btn-next" id="nextBtn" aria-label="Slide siguiente">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 18l6-6-6-6"/>
                                </svg>
                            </button>

                            <!-- Indicadores -->
                            <div class="carousel-indicators" id="carouselIndicators">
                                <button class="indicator active" data-slide="0" aria-label="Ir al slide 1"></button>
                                <button class="indicator" data-slide="1" aria-label="Ir al slide 2"></button>
                                <button class="indicator" data-slide="2" aria-label="Ir al slide 3"></button>
                                <button class="indicator" data-slide="3" aria-label="Ir al slide 4"></button>
                                <button class="indicator" data-slide="4" aria-label="Ir al slide 5"></button>
                            </div>
                        </div>
                    </div>

                    <!-- Información adicional -->
                    <div class="carousel-info">
                        <h3>Características del Carrusel</h3>
                        <ul>
                            <li>✓ Navegación automática cada 5 segundos</li>
                            <li>✓ Navegación manual con botones y teclado</li>
                            <li>✓ Indicadores visuales para cada slide</li>
                            <li>✓ Transiciones suaves y animadas</li>
                            <li>✓ Totalmente responsivo</li>
                            <li>✓ Pausa automática al pasar el mouse</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

