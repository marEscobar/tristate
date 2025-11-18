<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galería de Fotos - {{ config('app.name', 'Laravel') }}</title>
        
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
                    <li><a href="{{ url('/gallery') }}">Galería</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- Sección de Galería -->
            <section class="gallery-section">
                <div class="container">
                    <div class="section-header">
                        <h1 class="section-title">Galería de Fotos</h1>
                        <p class="section-subtitle">Explora nuestra colección de imágenes y proyectos destacados</p>
                    </div>

                    <!-- Filtros de Categorías -->
                    <div class="gallery-filters">
                        <button class="filter-btn active" data-filter="all">Todas</button>
                        <button class="filter-btn" data-filter="nature">Naturaleza</button>
                        <button class="filter-btn" data-filter="urban">Urbano</button>
                        <button class="filter-btn" data-filter="abstract">Abstracto</button>
                        <button class="filter-btn" data-filter="people">Personas</button>
                    </div>

                    <!-- Grid de Galería -->
                    <div class="gallery-grid" id="galleryGrid">
                        <!-- Imagen 1 - Naturaleza -->
                        <div class="gallery-item" data-category="nature">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                    <div class="image-placeholder">🌲</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Montañas Verdes</h3>
                                    <p>Paisaje natural</p>
                                    <button class="view-btn" data-image="1">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 2 - Urbano -->
                        <div class="gallery-item" data-category="urban">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                    <div class="image-placeholder">🏙️</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Ciudad Moderna</h3>
                                    <p>Arquitectura urbana</p>
                                    <button class="view-btn" data-image="2">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 3 - Abstracto -->
                        <div class="gallery-item" data-category="abstract">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                    <div class="image-placeholder">🎨</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Arte Abstracto</h3>
                                    <p>Composición creativa</p>
                                    <button class="view-btn" data-image="3">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 4 - Personas -->
                        <div class="gallery-item" data-category="people">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                    <div class="image-placeholder">👥</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Retrato Grupal</h3>
                                    <p>Fotografía de personas</p>
                                    <button class="view-btn" data-image="4">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 5 - Naturaleza -->
                        <div class="gallery-item" data-category="nature">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                                    <div class="image-placeholder">🌊</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Océano Azul</h3>
                                    <p>Paisaje marino</p>
                                    <button class="view-btn" data-image="5">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 6 - Urbano -->
                        <div class="gallery-item" data-category="urban">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <div class="image-placeholder">🌆</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Skyline Nocturno</h3>
                                    <p>Ciudad de noche</p>
                                    <button class="view-btn" data-image="6">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 7 - Abstracto -->
                        <div class="gallery-item" data-category="abstract">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);">
                                    <div class="image-placeholder">✨</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Formas Geométricas</h3>
                                    <p>Diseño abstracto</p>
                                    <button class="view-btn" data-image="7">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 8 - Personas -->
                        <div class="gallery-item" data-category="people">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <div class="image-placeholder">📸</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Momentos Especiales</h3>
                                    <p>Fotografía documental</p>
                                    <button class="view-btn" data-image="8">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 9 - Naturaleza -->
                        <div class="gallery-item" data-category="nature">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #ff6e7f 0%, #bfe9ff 100%);">
                                    <div class="image-placeholder">🌅</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Amanecer Dorado</h3>
                                    <p>Paisaje al amanecer</p>
                                    <button class="view-btn" data-image="9">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 10 - Urbano -->
                        <div class="gallery-item" data-category="urban">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #c471ed 0%, #f64f59 100%);">
                                    <div class="image-placeholder">🏗️</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Arquitectura Moderna</h3>
                                    <p>Edificios contemporáneos</p>
                                    <button class="view-btn" data-image="10">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 11 - Abstracto -->
                        <div class="gallery-item" data-category="abstract">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #12c2e9 0%, #c471ed 100%);">
                                    <div class="image-placeholder">🌀</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Patrones Dinámicos</h3>
                                    <p>Arte digital</p>
                                    <button class="view-btn" data-image="11">Ver Imagen</button>
                                </div>
                            </div>
                        </div>

                        <!-- Imagen 12 - Personas -->
                        <div class="gallery-item" data-category="people">
                            <div class="gallery-image-wrapper">
                                <div class="gallery-image" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <div class="image-placeholder">🎭</div>
                                </div>
                                <div class="gallery-overlay">
                                    <h3>Expresión Artística</h3>
                                    <p>Retrato artístico</p>
                                    <button class="view-btn" data-image="12">Ver Imagen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Lightbox Modal -->
        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" id="lightboxClose" aria-label="Cerrar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </button>
            <button class="lightbox-prev" id="lightboxPrev" aria-label="Imagen anterior">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
            <button class="lightbox-next" id="lightboxNext" aria-label="Imagen siguiente">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </button>
            <div class="lightbox-content">
                <div class="lightbox-image" id="lightboxImage"></div>
                <div class="lightbox-info">
                    <h3 id="lightboxTitle"></h3>
                    <p id="lightboxDescription"></p>
                    <span class="lightbox-counter" id="lightboxCounter"></span>
                </div>
            </div>
        </div>

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

