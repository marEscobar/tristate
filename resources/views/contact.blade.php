<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contáctenos - {{ config('app.name', 'Laravel') }}</title>
        
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
                    <li><a href="{{ url('/contact') }}">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- Sección de Contacto -->
            <section class="contact-section">
                <div class="container">
                    <div class="section-header">
                        <h1 class="section-title">Contáctenos</h1>
                        <p class="section-subtitle">Estamos aquí para ayudarte. Envíanos un mensaje y te responderemos lo antes posible.</p>
                    </div>

                    <div class="contact-wrapper">
                        <!-- Información de Contacto -->
                        <div class="contact-info">
                            <h2>Información de Contacto</h2>
                            <p>Puedes contactarnos a través de cualquiera de estos medios. Estamos disponibles para responder tus consultas.</p>
                            
                            <div class="contact-items">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Email</h3>
                                        <p>info@ejemplo.com</p>
                                        <p>soporte@ejemplo.com</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Teléfono</h3>
                                        <p>+1 (234) 567-890</p>
                                        <p>+1 (234) 567-891</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                            <circle cx="12" cy="10" r="3"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Dirección</h3>
                                        <p>123 Calle Principal</p>
                                        <p>Ciudad, Estado 12345</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12 6 12 12 16 14"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Horario</h3>
                                        <p>Lun - Vie: 9:00 AM - 6:00 PM</p>
                                        <p>Sáb: 10:00 AM - 2:00 PM</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Redes Sociales -->
                            <div class="social-media">
                                <h3>Síguenos</h3>
                                <div class="social-links">
                                    <a href="#" class="social-link" aria-label="Facebook">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="Twitter">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="Instagram">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" fill="white"/>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="social-link" aria-label="LinkedIn">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                            <circle cx="4" cy="4" r="2"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Formulario de Contacto -->
                        <div class="contact-form-wrapper">
                            <h2>Envíanos un Mensaje</h2>
                            <form class="contact-form" id="contactForm">
                                <div class="form-group">
                                    <label for="name">Nombre Completo *</label>
                                    <input type="text" id="name" name="name" required>
                                    <span class="error-message" id="nameError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="email">Correo Electrónico *</label>
                                    <input type="email" id="email" name="email" required>
                                    <span class="error-message" id="emailError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Teléfono</label>
                                    <input type="tel" id="phone" name="phone">
                                    <span class="error-message" id="phoneError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Asunto *</label>
                                    <select id="subject" name="subject" required>
                                        <option value="">Selecciona un asunto</option>
                                        <option value="general">Consulta General</option>
                                        <option value="support">Soporte Técnico</option>
                                        <option value="sales">Ventas</option>
                                        <option value="partnership">Colaboración</option>
                                        <option value="other">Otro</option>
                                    </select>
                                    <span class="error-message" id="subjectError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="message">Mensaje *</label>
                                    <textarea id="message" name="message" rows="6" required></textarea>
                                    <span class="error-message" id="messageError"></span>
                                </div>

                                <div class="form-group checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" id="privacy" name="privacy" required>
                                        <span>Acepto la <a href="#" target="_blank">política de privacidad</a> y el tratamiento de mis datos personales *</span>
                                    </label>
                                    <span class="error-message" id="privacyError"></span>
                                </div>

                                <button type="submit" class="submit-btn">
                                    <span class="btn-text">Enviar Mensaje</span>
                                    <span class="btn-loader" style="display: none;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 12a9 9 0 11-6.219-8.56"/>
                                        </svg>
                                    </span>
                                </button>

                                <div class="form-message" id="formMessage"></div>
                            </form>
                        </div>
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

