// JavaScript principal para la aplicación
// Este archivo contiene toda la funcionalidad JavaScript

// Esperar a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar funcionalidades
    initSmoothScroll();
    initAnimations();
    initCarousel();
    initGallery();
    initContactForm();
});

// Función para scroll suave en los enlaces de navegación
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Solo aplicar si no es un hash vacío
            if (href !== '#') {
                e.preventDefault();
                
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}

// Función para inicializar animaciones
function initAnimations() {
    // Observador para animaciones al hacer scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observar elementos con clase 'animate-on-scroll'
    const animateElements = document.querySelectorAll('.feature-card, .testimonial-card, .service-item');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// ============================================
// FUNCIONALIDAD DEL CARRUSEL
// ============================================

function initCarousel() {
    const carouselTrack = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.indicator');
    const slides = document.querySelectorAll('.carousel-slide');
    
    // Si no existe el carrusel, salir
    if (!carouselTrack) return;
    
    let currentSlide = 0;
    let autoPlayInterval = null;
    const autoPlayDelay = 5000; // 5 segundos
    
    // Función para mostrar un slide específico
    function showSlide(index) {
        // Remover clase active de todos los slides
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (indicators[i]) {
                indicators[i].classList.remove('active');
            }
        });
        
        // Agregar clase active al slide actual
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (indicators[index]) {
            indicators[index].classList.add('active');
        }
        
        currentSlide = index;
        
        // Actualizar estado de los botones
        updateButtons();
    }
    
    // Función para ir al slide siguiente
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    // Función para ir al slide anterior
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }
    
    // Función para actualizar el estado de los botones
    function updateButtons() {
        // Los botones siempre están habilitados porque el carrusel es circular
        if (prevBtn) prevBtn.disabled = false;
        if (nextBtn) nextBtn.disabled = false;
    }
    
    // Función para iniciar la reproducción automática
    function startAutoPlay() {
        stopAutoPlay(); // Asegurarse de que no hay otro intervalo activo
        autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
    }
    
    // Función para detener la reproducción automática
    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }
    
    // Event listeners para los botones
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            nextSlide();
            startAutoPlay(); // Reiniciar el autoplay después de la interacción manual
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            prevSlide();
            startAutoPlay(); // Reiniciar el autoplay después de la interacción manual
        });
    }
    
    // Event listeners para los indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            showSlide(index);
            startAutoPlay(); // Reiniciar el autoplay después de la interacción manual
        });
    });
    
    // Navegación con teclado
    document.addEventListener('keydown', function(e) {
        // Solo si el carrusel está en la página
        if (!carouselTrack) return;
        
        if (e.key === 'ArrowLeft') {
            prevSlide();
            startAutoPlay();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            startAutoPlay();
        }
    });
    
    // Pausar autoplay al pasar el mouse sobre el carrusel
    const carouselWrapper = carouselTrack.closest('.carousel-wrapper');
    if (carouselWrapper) {
        carouselWrapper.addEventListener('mouseenter', stopAutoPlay);
        carouselWrapper.addEventListener('mouseleave', startAutoPlay);
    }
    
    // Pausar autoplay cuando la pestaña no está visible (Page Visibility API)
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });
    
    // Inicializar el carrusel
    showSlide(0);
    startAutoPlay();
    
    // Limpiar intervalo cuando se sale de la página
    window.addEventListener('beforeunload', stopAutoPlay);
}

// ============================================
// FUNCIONALIDAD DE LA GALERÍA
// ============================================

function initGallery() {
    const galleryGrid = document.getElementById('galleryGrid');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const viewButtons = document.querySelectorAll('.view-btn');
    const lightbox = document.getElementById('lightbox');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDescription = document.getElementById('lightboxDescription');
    const lightboxCounter = document.getElementById('lightboxCounter');
    
    // Si no existe la galería, salir
    if (!galleryGrid) return;
    
    let currentImageIndex = 0;
    let visibleItems = Array.from(galleryItems);
    
    // Datos de las imágenes para el lightbox
    const imageData = [
        { title: 'Montañas Verdes', description: 'Paisaje natural', icon: '🌲', gradient: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' },
        { title: 'Ciudad Moderna', description: 'Arquitectura urbana', icon: '🏙️', gradient: 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' },
        { title: 'Arte Abstracto', description: 'Composición creativa', icon: '🎨', gradient: 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' },
        { title: 'Retrato Grupal', description: 'Fotografía de personas', icon: '👥', gradient: 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)' },
        { title: 'Océano Azul', description: 'Paisaje marino', icon: '🌊', gradient: 'linear-gradient(135deg, #30cfd0 0%, #330867 100%)' },
        { title: 'Skyline Nocturno', description: 'Ciudad de noche', icon: '🌆', gradient: 'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)' },
        { title: 'Formas Geométricas', description: 'Diseño abstracto', icon: '✨', gradient: 'linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%)' },
        { title: 'Momentos Especiales', description: 'Fotografía documental', icon: '📸', gradient: 'linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%)' },
        { title: 'Amanecer Dorado', description: 'Paisaje al amanecer', icon: '🌅', gradient: 'linear-gradient(135deg, #ff6e7f 0%, #bfe9ff 100%)' },
        { title: 'Arquitectura Moderna', description: 'Edificios contemporáneos', icon: '🏗️', gradient: 'linear-gradient(135deg, #c471ed 0%, #f64f59 100%)' },
        { title: 'Patrones Dinámicos', description: 'Arte digital', icon: '🌀', gradient: 'linear-gradient(135deg, #12c2e9 0%, #c471ed 100%)' },
        { title: 'Expresión Artística', description: 'Retrato artístico', icon: '🎭', gradient: 'linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%)' }
    ];
    
    // Función para filtrar imágenes por categoría
    function filterGallery(category) {
        galleryItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            
            if (category === 'all' || itemCategory === category) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
        
        // Actualizar lista de items visibles
        visibleItems = Array.from(galleryItems).filter(item => !item.classList.contains('hidden'));
    }
    
    // Event listeners para los botones de filtro
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            // Filtrar galería
            const filter = this.getAttribute('data-filter');
            filterGallery(filter);
        });
    });
    
    // Función para abrir el lightbox
    function openLightbox(index) {
        currentImageIndex = index;
        updateLightbox();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevenir scroll del body
    }
    
    // Función para cerrar el lightbox
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = ''; // Restaurar scroll del body
    }
    
    // Función para actualizar el contenido del lightbox
    function updateLightbox() {
        const imageIndex = visibleItems[currentImageIndex];
        const itemIndex = Array.from(galleryItems).indexOf(imageIndex);
        const data = imageData[itemIndex];
        
        if (data) {
            lightboxImage.style.background = data.gradient;
            lightboxImage.innerHTML = `<div class="image-placeholder">${data.icon}</div>`;
            lightboxTitle.textContent = data.title;
            lightboxDescription.textContent = data.description;
            lightboxCounter.textContent = `${currentImageIndex + 1} / ${visibleItems.length}`;
        }
    }
    
    // Función para ir a la imagen siguiente
    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % visibleItems.length;
        updateLightbox();
    }
    
    // Función para ir a la imagen anterior
    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + visibleItems.length) % visibleItems.length;
        updateLightbox();
    }
    
    // Event listeners para los botones de ver imagen
    viewButtons.forEach((button, index) => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const item = this.closest('.gallery-item');
            const visibleIndex = visibleItems.indexOf(item);
            if (visibleIndex !== -1) {
                openLightbox(visibleIndex);
            }
        });
    });
    
    // Event listeners para hacer clic en la imagen completa
    galleryItems.forEach((item, index) => {
        const wrapper = item.querySelector('.gallery-image-wrapper');
        if (wrapper) {
            wrapper.addEventListener('click', function() {
                const visibleIndex = visibleItems.indexOf(item);
                if (visibleIndex !== -1) {
                    openLightbox(visibleIndex);
                }
            });
        }
    });
    
    // Event listeners para el lightbox
    if (lightboxClose) {
        lightboxClose.addEventListener('click', closeLightbox);
    }
    
    if (lightboxPrev) {
        lightboxPrev.addEventListener('click', prevImage);
    }
    
    if (lightboxNext) {
        lightboxNext.addEventListener('click', nextImage);
    }
    
    // Cerrar lightbox al hacer clic fuera del contenido
    if (lightbox) {
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
    }
    
    // Navegación con teclado
    document.addEventListener('keydown', function(e) {
        if (!lightbox || !lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            prevImage();
        } else if (e.key === 'ArrowRight') {
            nextImage();
        }
    });
    
    // Inicializar lista de items visibles
    visibleItems = Array.from(galleryItems);
}

// ============================================
// FUNCIONALIDAD DEL FORMULARIO DE CONTACTO
// ============================================

function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    // Si no existe el formulario, salir
    if (!contactForm) return;
    
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const subjectInput = document.getElementById('subject');
    const messageInput = document.getElementById('message');
    const privacyInput = document.getElementById('privacy');
    const submitBtn = contactForm.querySelector('.submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    const formMessage = document.getElementById('formMessage');
    
    // Validación en tiempo real
    nameInput.addEventListener('blur', () => validateField(nameInput, 'nameError', 'El nombre es requerido'));
    emailInput.addEventListener('blur', () => validateEmail(emailInput));
    phoneInput.addEventListener('blur', () => validatePhone(phoneInput));
    subjectInput.addEventListener('change', () => validateField(subjectInput, 'subjectError', 'Por favor selecciona un asunto'));
    messageInput.addEventListener('blur', () => validateField(messageInput, 'messageError', 'El mensaje es requerido'));
    privacyInput.addEventListener('change', () => validatePrivacy(privacyInput));
    
    // Función para validar un campo requerido
    function validateField(field, errorId, errorMessage) {
        const errorElement = document.getElementById(errorId);
        
        if (!field.value.trim()) {
            showError(field, errorElement, errorMessage);
            return false;
        } else {
            hideError(field, errorElement);
            return true;
        }
    }
    
    // Función para validar email
    function validateEmail(field) {
        const errorElement = document.getElementById('emailError');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (!field.value.trim()) {
            showError(field, errorElement, 'El correo electrónico es requerido');
            return false;
        } else if (!emailRegex.test(field.value)) {
            showError(field, errorElement, 'Por favor ingresa un correo electrónico válido');
            return false;
        } else {
            hideError(field, errorElement);
            return true;
        }
    }
    
    // Función para validar teléfono (opcional pero debe ser válido si se ingresa)
    function validatePhone(field) {
        const errorElement = document.getElementById('phoneError');
        const phoneRegex = /^[\d\s\-\+\(\)]+$/;
        
        if (field.value.trim() && !phoneRegex.test(field.value)) {
            showError(field, errorElement, 'Por favor ingresa un teléfono válido');
            return false;
        } else {
            hideError(field, errorElement);
            return true;
        }
    }
    
    // Función para validar checkbox de privacidad
    function validatePrivacy(field) {
        const errorElement = document.getElementById('privacyError');
        
        if (!field.checked) {
            showError(field, errorElement, 'Debes aceptar la política de privacidad');
            return false;
        } else {
            hideError(field, errorElement);
            return true;
        }
    }
    
    // Función para mostrar error
    function showError(field, errorElement, message) {
        field.classList.add('error');
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.classList.add('show');
        }
    }
    
    // Función para ocultar error
    function hideError(field, errorElement) {
        field.classList.remove('error');
        if (errorElement) {
            errorElement.classList.remove('show');
        }
    }
    
    // Función para limpiar todos los errores
    function clearAllErrors() {
        const errorElements = document.querySelectorAll('.error-message');
        const errorFields = document.querySelectorAll('.form-group input.error, .form-group select.error, .form-group textarea.error');
        
        errorElements.forEach(el => el.classList.remove('show'));
        errorFields.forEach(field => field.classList.remove('error'));
    }
    
    // Función para mostrar mensaje de éxito/error
    function showMessage(message, type) {
        formMessage.textContent = message;
        formMessage.className = `form-message show ${type}`;
        
        // Ocultar mensaje después de 5 segundos
        setTimeout(() => {
            formMessage.classList.remove('show');
        }, 5000);
    }
    
    // Función para habilitar/deshabilitar botón de envío
    function setLoading(loading) {
        if (loading) {
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'block';
        } else {
            submitBtn.disabled = false;
            btnText.style.display = 'block';
            btnLoader.style.display = 'none';
        }
    }
    
    // Manejar envío del formulario
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Limpiar mensajes anteriores
        clearAllErrors();
        formMessage.classList.remove('show');
        
        // Validar todos los campos
        const isNameValid = validateField(nameInput, 'nameError', 'El nombre es requerido');
        const isEmailValid = validateEmail(emailInput);
        const isPhoneValid = validatePhone(phoneInput);
        const isSubjectValid = validateField(subjectInput, 'subjectError', 'Por favor selecciona un asunto');
        const isMessageValid = validateField(messageInput, 'messageError', 'El mensaje es requerido');
        const isPrivacyValid = validatePrivacy(privacyInput);
        
        // Si todos los campos son válidos
        if (isNameValid && isEmailValid && isPhoneValid && isSubjectValid && isMessageValid && isPrivacyValid) {
            // Simular envío del formulario
            setLoading(true);
            
            // Aquí normalmente harías una petición AJAX al servidor
            // Por ahora simulamos con un setTimeout
            setTimeout(() => {
                setLoading(false);
                
                // Mostrar mensaje de éxito
                showMessage('¡Mensaje enviado exitosamente! Te responderemos pronto.', 'success');
                
                // Limpiar formulario
                contactForm.reset();
                clearAllErrors();
                
                // Aquí podrías redirigir o hacer otra acción
                // window.location.href = '/gracias';
            }, 2000);
        } else {
            // Mostrar mensaje de error
            showMessage('Por favor completa todos los campos requeridos correctamente.', 'error');
            
            // Hacer scroll al primer campo con error
            const firstError = contactForm.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
        }
    });
}

// Exportar funciones si es necesario para módulos
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initSmoothScroll,
        initAnimations,
        initCarousel,
        initGallery,
        initContactForm
    };
}

