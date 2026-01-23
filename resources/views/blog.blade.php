<!DOCTYPE html>
<html class="scroll-smooth" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Custom</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <style type="text/tailwindcss">
        @layer base {
            html {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: "#003d64",
                            light: "#005285",
                            dark: "#002a45"
                        },
                        secondary: "#E5E7EB",
                        accent: "#D1D5DB",
                        "background-light": "#F9FAFB",
                        "background-dark": "#111827",
                        "text-light": "#F9FAFB",
                        "text-dark": "#1F2937",
                        "text-muted-light": "#6B7280",
                        "text-muted-dark": "#9CA3BA"
                    },
                    fontFamily: {
                        sans: ["Roboto", "sans-serif"],
                        display: ["Poppins", "sans-serif"]
                    },
                    borderRadius: {
                        DEFAULT: "0.375rem",
                        lg: "0.5rem"
                    },
                    transitionProperty: {
                        height: "height",
                        spacing: "margin, padding"
                    },
                    maxWidth: {
                        '6xl': '72rem', // 1152px - Valor actual explícito
                        '7xl': '80rem', // 1280px - Nuevo tamaño
                        '8xl': '88rem', // 1408px - Nuevo tamaño
                        '9xl': '96rem', // 1536px - Nuevo tamaño
                    }
                }
            }
        };
    </script>
    <style>
        .hero-bg {
            background-image: url({{ asset('img/7.jpg') }});
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.593);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .write-bg {
            background-image: url({{ asset('img/2.webp') }});
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .write-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 61, 100, 0.75);
            z-index: 1;
        }

        .write-content {
            position: relative;
            z-index: 2;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }

        /* Trazo blanco alrededor del texto negro */
        .text-outline-white {
            color: #000000;
            text-shadow:
                -1px -1px 0 #ffffff,
                1px -1px 0 #ffffff,
                -1px 1px 0 #ffffff,
                1px 1px 0 #ffffff;
        }
    </style>
</head>

<body class="font-sans bg-background-light dark:bg-background-dark text-text-dark dark:text-text-light antialiased">
    <!-- HEADER -->
    <header class="bg-white dark:bg-background-dark shadow-md sticky top-0 z-40 backdrop-blur-sm bg-white/95">
        <!-- Top bar -->
        <div class="border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-gray-50 to-white">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-col md:flex-row md:justify-between md:items-center gap-3 md:gap-0 text-xs sm:text-sm text-text-muted-light dark:text-text-muted-dark">
                <div class="flex flex-wrap items-center gap-4">
                    <div class="flex items-center space-x-2">
                        <div class="flex text-primary">
                            <span class="material-symbols-outlined text-xs sm:text-base">star</span>
                            <span class="material-symbols-outlined text-xs sm:text-base">star</span>
                            <span class="material-symbols-outlined text-xs sm:text-base">star</span>
                            <span class="material-symbols-outlined text-xs sm:text-base">star</span>
                            <span class="material-symbols-outlined text-xs sm:text-base">star</span>
                        </div>
                        <span class="font-medium text-text-dark dark:text-text-light">5.0</span>
                        <a class="underline hover:text-primary transition-colors duration-300"
                            href="{{ url('/reviews') }}">(4
                            Ratings)</a>
                    </div>
                    <div class="flex items-start space-x-2">
                        <span class="material-symbols-outlined text-primary text-base sm:text-xl">location_on</span>
                        <div class="leading-tight">
                            <p class="font-medium text-text-dark dark:text-text-light text-xs sm:text-sm">Visit Us</p>
                            <p class="text-xs sm:text-sm">333 Wyandanch Ave, West Babylon, NY</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between md:justify-end gap-4">
                    <a class="inline-flex items-center gap-2 px-4 sm:px-6 py-2.5 bg-gradient-to-r from-primary to-primary-light text-text-light font-bold rounded-lg hover:from-primary-light hover:to-primary transform hover:scale-105 transition-all duration-300 text-xs sm:text-sm shadow-md hover:shadow-lg text-center"
                        href="{{ url('/request-call-back') }}">
                        <span class="material-symbols-outlined text-sm">phone_in_talk</span>
                        Request Call Back
                    </a>
                    <a href="tel:7187050333" class="flex items-center gap-2 text-base sm:text-lg font-bold text-text-dark dark:text-text-light whitespace-nowrap hover:text-primary transition-colors duration-300">
                        <span class="material-symbols-outlined text-primary">call</span>
                        (718) 705-0333
                    </a>
                </div>
            </div>
        </div>

        <!-- Main nav: barra blanca letras azules -->
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-20">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img alt="TriState Signs &amp; Awnings logo" class="h-8 sm:h-10 w-auto"
                            src="{{ asset('img/logo.png') }}" />
                    </div>

                    <!-- Desktop nav -->
                    <nav class="hidden lg:flex">
                        <ul class="flex items-center space-x-6 xl:space-x-8 text-primary font-medium text-sm">
                            <li><a class="py-5 inline-flex {{ request()->is('/') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/') }}">Home</a></li>
                            <li class="group relative">
                                <a class="py-5 inline-flex items-center {{ request()->is('exterior-signs') || request()->is('interior-signs') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }} transition-colors duration-300"
                                    href="#">
                                    Sign Services
                                    <span
                                        class="material-symbols-outlined text-base ml-1 transform group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="{{ url('/exterior-signs') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('exterior-signs') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Exterior Signs
                                        </a>
                                        <a href="{{ url('/interior-signs') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('interior-signs') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Interior Signs
                                        </a>
                                    </div>
                                </a>
                            </li>
                            <li class="group relative">
                                <a class="py-5 inline-flex items-center {{ request()->is('commercial-awnings') || request()->is('residential-awnings') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }} transition-colors duration-300"
                                    href="#">
                                    Awning Services
                                    <span
                                        class="material-symbols-outlined text-base ml-1 transform group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="{{ url('/commercial-awnings') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('commercial-awnings') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Commercial Awnings
                                        </a>
                                        <a href="{{ url('/residential-awnings') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('residential-awnings') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Residential Awnings
                                        </a>
                                    </div>
                                </a>
                            </li>

                            <li><a class="py-5 inline-flex {{ request()->is('installations') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/installations') }}">Installations</a></li>
                            <li><a class="py-5 inline-flex {{ request()->is('led-displays') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/led-displays') }}">LED Displays</a></li>
                            <li><a class="py-5 inline-flex {{ request()->is('permits') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/permits') }}">Permits</a></li>
                            <li class="group relative">
                                <a class="py-5 inline-flex items-center {{ request()->is('about') || request()->is('gallery') || request()->is('reviews') || request()->is('blog') || request()->is('faqs') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/about') }}">
                                    About
                                    <span
                                        class="material-symbols-outlined text-base ml-1 transform group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="{{ url('/gallery') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('gallery') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Gallery
                                        </a>
                                        <a href="{{ url('/reviews') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('reviews') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Reviews
                                        </a>
                                        <a href="{{ url('/blog') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('blog') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Blog
                                        </a>
                                        <a href="{{ url('/faqs') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('faqs') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            FAQs
                                        </a>
                                    </div>
                                </a>
                            </li>
                            <li class="group relative">
                                <a class="py-5 inline-flex items-center {{ request()->is('request-call-back') || request()->is('contact-us') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }} transition-colors duration-300"
                                    href="#">
                                    Contact
                                    <span
                                        class="material-symbols-outlined text-base ml-1 transform group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="{{ url('/request-call-back') }}"
                                            class="block rounded-sm px-4 py-[10px] text-sm {{ request()->is('request-call-back') ? 'text-primary font-semibold' : 'text-body-color hover:text-secondary' }} dark:text-dark-6 dark:hover:text-secondary">
                                            Request Call Back
                                        </a>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Mobile button -->
                    <button id="nav-toggle"
                        class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>

                <!-- Mobile menu -->
                <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-200 pb-4">
                    <nav class="pt-2">
                        <ul class="flex flex-col space-y-1 text-sm text-primary font-medium">
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/') }}">Home</a></li>
                            <li class="relative">
                                <button type="button"
                                    class="mobile-submenu-toggle w-full text-left block px-2 py-2 rounded hover:bg-secondary flex items-center justify-between"
                                    data-target="sign-services-submenu">
                                    <span>Sign Services</span>
                                    <span
                                        class="mobile-submenu-icon material-symbols-outlined text-base ml-1 transform transition-transform duration-300">expand_more</span>
                                </button>
                                <div id="sign-services-submenu"
                                    class="hidden mt-1 ml-4 pl-4 border-l-2 border-primary/20 space-y-1">
                                    <a href="{{ url('/exterior-signs') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Exterior Signs
                                    </a>
                                    <a href="{{ url('/interior-signs') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Interior Signs
                                    </a>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="mobile-submenu-toggle w-full text-left block px-2 py-2 rounded hover:bg-secondary flex items-center justify-between"
                                    data-target="awning-services-submenu">
                                    <span>Awning Services</span>
                                    <span
                                        class="mobile-submenu-icon material-symbols-outlined text-base ml-1 transform transition-transform duration-300">expand_more</span>
                                </button>
                                <div id="awning-services-submenu"
                                    class="hidden mt-1 ml-4 pl-4 border-l-2 border-primary/20 space-y-1">
                                    <a href="{{ url('/commercial-awnings') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Commercial Awnings
                                    </a>
                                    <a href="{{ url('/residential-awnings') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Residential Awnings
                                    </a>
                                </div>
                            </li>
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/installations') }}">Installations</a>
                            </li>
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/led-displays') }}">LED Displays</a>
                            </li>
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/permits') }}">Permits</a></li>
                            <li class="relative">
                                <button type="button"
                                    class="mobile-submenu-toggle w-full text-left block px-2 py-2 rounded hover:bg-secondary flex items-center justify-between"
                                    data-target="about-services-submenu">
                                    <span>About</span>
                                    <span
                                        class="mobile-submenu-icon material-symbols-outlined text-base ml-1 transform transition-transform duration-300">expand_more</span>
                                </button>
                                <div id="about-services-submenu"
                                    class="hidden mt-1 ml-4 pl-4 border-l-2 border-primary/20 space-y-1">
                                    <a href="{{ url('/gallery') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Gallery
                                    </a>
                                    <a href="{{ url('/reviews') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Reviews
                                    </a>
                                    <a href="{{ url('/blog') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Blog
                                    </a>
                                    <a href="{{ url('/faqs') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        FAQs
                                    </a>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="mobile-submenu-toggle w-full text-left block px-2 py-2 rounded hover:bg-secondary flex items-center justify-between"
                                    data-target="contact-services-submenu">
                                    <span>Contact</span>
                                    <span
                                        class="mobile-submenu-icon material-symbols-outlined text-base ml-1 transform transition-transform duration-300">expand_more</span>
                                </button>
                                <div id="contact-services-submenu"
                                    class="hidden mt-1 ml-4 pl-4 border-l-2 border-primary/20 space-y-1">
                                    <a href="{{ url('/request-call-back') }}"
                                        class="block rounded-sm px-4 py-[10px] text-sm text-text-dark dark:text-text-light hover:bg-secondary dark:hover:text-secondary">
                                        Request Call Back
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->

    <main>
        <section class="bg-primary py-2 sm:py-6 lg:py-6 text-text-light">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-center mb-8 sm:mb-6">
                    Blog
                </h2>
                <h4 class="text-lg sm:text-lg lg:text-lg font-display font-bold text-center mb-8 sm:mb-6">
                    Tri State Signs & Awnings
                </h4>
            </div>
        </section>

        <!-- RESTO DE SECCIONES (ajuste mínimo, ya son responsivas) -->
        <section class="bg-white py-16 sm:py-10 lg:py-14 text-text-primary">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-8">
                    <!-- Blog Post 1 -->
                    <div class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('img/exterior/ext1.JPG') }}" alt="Exterior Signage Guide" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">January 15, 2025</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-display font-bold mb-3 text-text-dark dark:text-text-light">
                                The Ultimate Guide to Choosing the Right Exterior Signage for Your Business
                            </h3>
                            <p class="text-text-muted-light dark:text-text-muted-dark mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                Discover how to select the perfect exterior signage that not only represents your brand but also attracts customers and complies with local regulations. Learn about different sign types, materials, and design considerations.
                            </p>
                            <a href="{{ url('/blog/choosing-exterior-signage') }}" class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto text-center">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('img/exterior/ext2.JPG') }}" alt="LED Display Technology" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">January 10, 2025</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-display font-bold mb-3 text-text-dark dark:text-text-light">
                                LED Display Technology: Transforming Modern Business Communication
                            </h3>
                            <p class="text-text-muted-light dark:text-text-muted-dark mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                Explore the latest advancements in LED display technology and how businesses are using dynamic signage to engage customers, increase visibility, and drive sales. Learn about installation, maintenance, and ROI.
                            </p>
                            <a href="{{ url('/blog/led-display-technology') }}" class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto text-center">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 3 -->
                    <div class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('img/exterior/ext3.JPG') }}" alt="Commercial Awnings" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">January 5, 2025</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-display font-bold mb-3 text-text-dark dark:text-text-light">
                                Commercial Awnings: Combining Functionality with Aesthetic Appeal
                            </h3>
                            <p class="text-text-muted-light dark:text-text-muted-dark mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                Learn how commercial awnings can enhance your storefront's appearance while providing practical benefits like weather protection, energy savings, and increased curb appeal. Discover design options and materials.
                            </p>
                            <a href="{{ url('/blog/commercial-awnings-guide') }}" class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto text-center">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 4 -->
                    <div class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('img/exterior/ext4.JPG') }}" alt="Sign Permits" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">December 28, 2024</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-display font-bold mb-3 text-text-dark dark:text-text-light">
                                Sign Permits 101: Everything You Need to Know
                            </h3>
                            <p class="text-text-muted-light dark:text-text-muted-dark mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                Navigating the permit process can be complex. This comprehensive guide covers sign permit requirements, application processes, timelines, and how professional permit expediting services can save you time and money.
                            </p>
                            <a href="{{ url('/blog/sign-permits-guide') }}" class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto text-center">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 5 -->
                    <div class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-48 sm:h-56 overflow-hidden">
                            <img src="{{ asset('img/exterior/ext6.JPG') }}" alt="Sign Maintenance" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">December 20, 2024</span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-display font-bold mb-3 text-text-dark dark:text-text-light">
                                Maintenance Tips to Extend the Life of Your Business Signs
                            </h3>
                            <p class="text-text-muted-light dark:text-text-muted-dark mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                Proper maintenance is key to keeping your business signs looking professional and functioning correctly. Get expert tips on cleaning, inspection schedules, and when to call professionals for repairs or replacements.
                            </p>
                            <a href="{{ url('/blog/sign-maintenance-tips') }}" class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto text-center">
                                Read More
                            </a>
                        </div>
                    </div>





                </div>
            </div>
        </section>

        {{-- section video --}}
        <section class="py-16 sm:py-20 lg:py-24 bg-gray-100 dark:bg-primary-dark/40">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                    <div class="lg:w-1/2 text-center lg:text-left">
                        <h2
                            class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark dark:text-text-light mb-4">
                            Learn More About Tri State Signs &amp; Awnings
                        </h2>
                        <p
                            class="text-text-muted-light dark:text-text-muted-dark mb-6 sm:mb-8 text-sm sm:text-base lg:text-lg">
                            Located in West Babylon, NY, Tri State Signs &amp; Awnings specializes in signs, awnings,
                            and LED
                            displays. 40+ years of trusted experience. Five-year sign warranty. With same-day
                            appointments, call for
                            your free estimate!
                        </p>
                        <a class="inline-flex items-center bg-primary text-text-light font-bold px-6 sm:px-8 py-2.5 sm:py-3 rounded-md hover:bg-primary-light transition-colors duration-300 shadow-md text-sm sm:text-base"
                            href="#">
                            <span class="material-symbols-outlined mr-2 text-base sm:text-lg">play_circle</span>
                            Watch Video
                        </a>
                    </div>
                    <div class="lg:w-1/2 w-full mt-6 lg:mt-0">
                        <div class="relative aspect-video w-full">
                            <iframe class="absolute inset-0 w-full h-full rounded-lg shadow-lg"
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Image Lightbox Modal -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <!-- Backdrop -->
        <div id="imageModalBackdrop" class="fixed inset-0 bg-black bg-opacity-90 transition-opacity"></div>

        <!-- Modal Container -->
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative max-w-7xl w-full transform transition-all">
                <!-- Close Button -->
                <button id="closeImageModal" type="button"
                    class="absolute top-4 right-4 z-10 text-white hover:text-gray-300 transition-colors bg-black/50 rounded-full p-2">
                    <span class="material-symbols-outlined text-3xl">close</span>
                </button>

                <!-- Image Container -->
                <div class="relative w-full">
                    <img id="modalImage" src="" alt=""
                        class="w-full h-auto max-h-[90vh] object-contain mx-auto rounded-lg shadow-2xl">
                    <p id="modalImageAlt" class="text-white text-center mt-4 text-lg"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="reviewModalLabel"
        aria-hidden="true">
        <!-- Backdrop -->
        <div id="modalBackdrop" class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>

        <!-- Modal Container -->
        <div class="flex min-h-full items-center justify-center p-4">
            <div
                class="relative bg-white dark:bg-primary-dark rounded-lg shadow-xl max-w-lg w-full transform transition-all">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                    <h5 class="text-xl font-display font-bold text-text-dark dark:text-text-light"
                        id="reviewModalLabel">Write a Review</h5>
                    <button id="closeReviewModal" type="button"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6">
                    <form id="reviewForm">
                        <div class="mb-4">
                            <label for="reviewerName"
                                class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">Your
                                Name</label>
                            <input type="text" id="reviewerName" name="name"
                                class="w-full bg-gray-100 dark:bg-primary-light/20 border border-gray-300 dark:border-gray-600 rounded-md text-text-dark dark:text-text-light placeholder-text-muted-light focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                placeholder="Enter your name" required>
                        </div>
                        <div class="mb-4">
                            <label for="reviewRating"
                                class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">Rating</label>
                            <div class="flex items-center space-x-2" id="ratingStars">
                                <button type="button"
                                    class="rating-star text-gray-300 hover:text-primary dark:hover:text-yellow-400 transition-colors"
                                    data-rating="1">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                                <button type="button"
                                    class="rating-star text-gray-300 hover:text-primary dark:hover:text-yellow-400 transition-colors"
                                    data-rating="2">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                                <button type="button"
                                    class="rating-star text-gray-300 hover:text-primary dark:hover:text-yellow-400 transition-colors"
                                    data-rating="3">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                                <button type="button"
                                    class="rating-star text-gray-300 hover:text-primary dark:hover:text-yellow-400 transition-colors"
                                    data-rating="4">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                                <button type="button"
                                    class="rating-star text-gray-300 hover:text-primary dark:hover:text-yellow-400 transition-colors"
                                    data-rating="5">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                            </div>
                            <input type="hidden" id="reviewRating" name="rating" value="0" required>
                        </div>
                        <div class="mb-4">
                            <label for="review"
                                class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">Your
                                Review</label>
                            <textarea id="review" name="review" rows="4"
                                class="w-full bg-gray-100 dark:bg-primary-light/20 border border-gray-300 dark:border-gray-600 rounded-md text-text-dark dark:text-text-light placeholder-text-muted-light focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                placeholder="Share your experience with us..." required></textarea>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-200 dark:border-gray-700">
                    <button id="cancelReviewModal" type="button"
                        class="px-4 py-2 text-sm font-medium text-text-dark dark:text-text-light bg-gray-100 dark:bg-primary-light/20 rounded-md hover:bg-gray-200 dark:hover:bg-primary-light/30 transition-colors duration-300">
                        Cancel
                    </button>
                    <button id="submitReview" type="button"
                        class="px-4 py-2 text-sm font-medium text-text-light bg-primary rounded-md hover:bg-primary-light transition-colors duration-300">
                        Submit Review
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Barra lateral fija -->
    <div
        class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col items-center bg-primary-dark shadow-lg rounded-l-md z-30">
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center rounded-tl-md group"
            href="#" title="Call Us"><span
                class="material-symbols-outlined text-base sm:text-lg">phone</span></a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group"
            href="{{ url('/reviews') }}" title="Reviews"><span
                class="material-symbols-outlined text-base sm:text-lg">star</span></a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group"
            href="{{ url('request-call-back') }}" title="Email Us"><span
                class="material-symbols-outlined text-base sm:text-lg">email</span></a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group"
            href="#" title="Our Location"><span
                class="material-symbols-outlined text-base sm:text-lg">location_on</span></a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center rounded-bl-md group"
            href="#" title="Share"><span
                class="material-symbols-outlined text-base sm:text-lg">share</span></a>
    </div>

    <!-- FOOTER -->
    <footer class="bg-primary-dark text-text-muted-dark pt-16 sm:pt-20 pb-8 sm:pb-10 mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 text-xs sm:text-sm">
                <div>
                    <h3 class="font-bold text-base sm:text-lg text-text-light mb-3 sm:mb-4">Visit Us</h3>
                    <p>333 Wyandanch Avenue</p>
                    <p>West Babylon, NY 11704</p>
                    <a class="mt-4 inline-block bg-transparent border border-secondary text-secondary font-bold px-5 sm:px-6 py-2 rounded-md hover:bg-secondary hover:text-primary-dark transition-colors duration-300 text-[11px] sm:text-xs"
                        href="#">Get Directions</a>
                </div>
                <div>
                    <h3 class="font-bold text-base sm:text-lg text-text-light mb-3 sm:mb-4">Serving Area</h3>
                    <ul class="space-y-1 sm:space-y-2 columns-2 gap-4">
                        <li>Hoboken, NJ</li>
                        <li>Jersey City, NJ</li>
                        <li>West New York</li>
                        <li>Rochelle Park</li>
                        <li>Union City, NJ</li>
                        <li>Great Neck, NY</li>
                        <li>New York, NY</li>
                        <li>Westbury, NY</li>
                        <li>Nassau County, NY</li>
                        <li>Queens County, NY</li>
                        <li>Suffolk County, NY</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-base sm:text-lg text-text-light mb-3 sm:mb-4">Contact Us</h3>
                    <p class="font-bold text-base sm:text-lg text-text-light">(718) 705-0333</p>
                    <a class="mt-4 mb-5 inline-block bg-accent text-primary-dark font-bold px-5 sm:px-6 py-2 rounded-md hover:bg-gray-400 transition-colors duration-300 text-[11px] sm:text-xs"
                        href="{{ url('contact-us') }}">Send a Message</a>
                    <div class="flex items-center space-x-3 sm:space-x-4">
                        <a class="text-secondary hover:text-white transition-colors duration-300"
                            href="https://www.facebook.com/tristatesigns">
                            <svg aria-hidden="true" class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="text-secondary hover:text-white transition-colors duration-300"
                            href="https://www.facebook.com/TriSignsNY">
                            <svg aria-hidden="true" class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.039c-5.485 0-9.961 4.476-9.961 9.961 0 5.485 4.476 9.961 9.961 9.961 5.485 0 9.961-4.476 9.961-9.961 0-5.485-4.476-9.961-9.961-9.961zm0 17.93c-4.4 0-7.969-3.569-7.969-7.969 0-4.4 3.569-7.969 7.969-7.969s7.969 3.569 7.969 7.969c0 4.4-3.569 7.969-7.969 7.969zm3.844-7.969c0 2.122-1.722 3.844-3.844 3.844s-3.844-1.722-3.844-3.844 1.722-3.844 3.844-3.844 3.844 1.722 3.844 3.844zm-1.281 0c0-1.414-1.147-2.563-2.563-2.563s-2.563 1.148-2.563 2.563 1.147 2.563 2.563 2.563 2.563-1.148 2.563-2.563zm3.172-4.102c-.352 0-.637.285-.637.637s.285.637.637.637.637-.285.637-.637c0-.352-.285-.637-.637-.637zm-7.734 1.25h2.531c-.131-.83-.787-1.486-1.615-1.617v2.531c.001 0 .001 0 0 0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-base sm:text-lg text-text-light mb-3 sm:mb-4">Business Hours</h3>
                    <div class="flex justify-between">
                        <span>Mon - Fri</span>
                        <span>8:00am - 5:00pm</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sat - Sun</span>
                        <span>Closed</span>
                    </div>
                    <p class="mt-4 text-[11px] sm:text-xs">Same-Day Appointments</p>
                </div>
            </div>
            <div class="border-t border-primary-light/20 mt-8 sm:mt-12 pt-4 sm:pt-6 text-center">
                <p class="text-[11px] sm:text-xs">
                    © 2024 TriState Signs &amp; Awnings. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle menú móvil
        const navToggle = document.getElementById('nav-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (navToggle && mobileMenu) {
            navToggle.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                navToggle.setAttribute('aria-expanded', String(isOpen));
            });
        }

        // Toggle submenús en móvil
        const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const targetId = toggle.getAttribute('data-target');
                const submenu = document.getElementById(targetId);
                const icon = toggle.querySelector('.mobile-submenu-icon');

                if (submenu) {
                    submenu.classList.toggle('hidden');
                    if (icon) {
                        icon.classList.toggle('rotate-180');
                    }
                }
            });
        });

        // Review Modal Functionality
        const reviewModal = document.getElementById('reviewModal');
        const openReviewModalBtn = document.getElementById('openReviewModal');
        const closeReviewModalBtn = document.getElementById('closeReviewModal');
        const cancelReviewModalBtn = document.getElementById('cancelReviewModal');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const ratingStars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('reviewRating');
        let selectedRating = 0;

        // Open modal
        if (openReviewModalBtn) {
            openReviewModalBtn.addEventListener('click', () => {
                reviewModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        }

        // Close modal function
        const closeModal = () => {
            reviewModal.classList.add('hidden');
            document.body.style.overflow = '';
            // Reset form
            document.getElementById('reviewForm').reset();
            selectedRating = 0;
            ratingInput.value = '0';
            // Reset stars
            ratingStars.forEach(star => {
                star.querySelector('span').style.fontVariationSettings = "'FILL' 0";
                star.classList.remove('text-primary', 'text-yellow-400');
                star.classList.add('text-gray-300');
            });
        };

        // Close modal on button click
        if (closeReviewModalBtn) {
            closeReviewModalBtn.addEventListener('click', closeModal);
        }

        if (cancelReviewModalBtn) {
            cancelReviewModalBtn.addEventListener('click', closeModal);
        }

        // Close modal on backdrop click
        if (modalBackdrop) {
            modalBackdrop.addEventListener('click', closeModal);
        }

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !reviewModal.classList.contains('hidden')) {
                closeModal();
            }
        });

        // Rating stars functionality
        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                selectedRating = rating;
                ratingInput.value = rating;

                // Update star display
                ratingStars.forEach((s, index) => {
                    const starIcon = s.querySelector('span');
                    if (index < rating) {
                        starIcon.style.fontVariationSettings = "'FILL' 1";
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-primary', 'dark:text-yellow-400');
                    } else {
                        starIcon.style.fontVariationSettings = "'FILL' 0";
                        s.classList.remove('text-primary', 'text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });

            // Hover effect
            star.addEventListener('mouseenter', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                ratingStars.forEach((s, index) => {
                    const starIcon = s.querySelector('span');
                    if (index < rating) {
                        s.classList.add('text-primary', 'dark:text-yellow-400');
                        s.classList.remove('text-gray-300');
                    }
                });
            });

            star.addEventListener('mouseleave', () => {
                if (selectedRating === 0) {
                    ratingStars.forEach(s => {
                        s.classList.remove('text-primary', 'text-yellow-400');
                        s.classList.add('text-gray-300');
                    });
                } else {
                    ratingStars.forEach((s, index) => {
                        if (index >= selectedRating) {
                            s.classList.remove('text-primary', 'text-yellow-400');
                            s.classList.add('text-gray-300');
                        }
                    });
                }
            });
        });

        // Submit review
        const submitReviewBtn = document.getElementById('submitReview');
        if (submitReviewBtn) {
            submitReviewBtn.addEventListener('click', () => {
                const form = document.getElementById('reviewForm');
                const formData = new FormData(form);
                const name = formData.get('name');
                const rating = ratingInput.value;
                const review = formData.get('review');

                if (!name || rating === '0' || !review) {
                    alert('Please fill in all fields and select a rating.');
                    return;
                }

                // Here you would typically send the data to your server
                console.log('Review submitted:', {
                    name,
                    rating,
                    review
                });

                // Show success message
                alert('Thank you for your review!');
                closeModal();
            });
        }

        // Image Lightbox Modal Functionality
        const imageModal = document.getElementById('imageModal');
        const imageModalBackdrop = document.getElementById('imageModalBackdrop');
        const closeImageModalBtn = document.getElementById('closeImageModal');
        const modalImage = document.getElementById('modalImage');
        const modalImageAlt = document.getElementById('modalImageAlt');

        // Function to open image modal
        function openImageModal(imageSrc, imageAlt) {
            if (imageModal && modalImage && modalImageAlt) {
                modalImage.src = imageSrc;
                modalImageAlt.textContent = imageAlt;
                imageModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        // Function to close image modal
        function closeImageModal() {
            if (imageModal) {
                imageModal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        // Close modal on button click
        if (closeImageModalBtn) {
            closeImageModalBtn.addEventListener('click', closeImageModal);
        }

        // Close modal on backdrop click
        if (imageModalBackdrop) {
            imageModalBackdrop.addEventListener('click', closeImageModal);
        }

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && imageModal && !imageModal.classList.contains('hidden')) {
                closeImageModal();
            }
        });
        // Business Hours Status Function
        function updateBusinessStatus() {
            const statusElement = document.getElementById('businessStatus');
            if (!statusElement) return;

            const now = new Date();
            const currentHour = now.getHours();
            const currentMinute = now.getMinutes();
            const currentTime = currentHour * 60 + currentMinute; // Convert to minutes for easier comparison

            // Business hours: 8am (480 min) to 5pm (1020 min)
            const openTime = 8 * 60; // 8:00 AM = 480 minutes
            const closingSoonTime = 16 * 60; // 4:00 PM = 960 minutes
            const closeTime = 17 * 60; // 5:00 PM = 1020 minutes

            // Remove all status classes
            statusElement.classList.remove('text-green-300', 'text-yellow-400', 'text-orange-400', 'text-red-300');

            if (currentTime >= openTime && currentTime < closingSoonTime) {
                // Open: 8am - 4pm
                statusElement.textContent = 'Open';
                statusElement.classList.add('text-green-300');
            } else if (currentTime >= closingSoonTime && currentTime < closeTime) {
                // Closing Soon: 4pm - 5pm
                statusElement.textContent = 'Closing Soon';
                statusElement.classList.add('text-yellow-400');
            } else {
                // Closed: after 5pm or before 8am
                statusElement.textContent = 'Closed';
                statusElement.classList.add('text-red-300');
            }
        }

        // Update status on page load
        updateBusinessStatus();

        // Update status every minute to keep it current
        setInterval(updateBusinessStatus, 60000);
        // Image Modal Functionality
        function openImageModal(imageSrc, imageAlt) {
            if (imageModal && modalImage && modalImageAlt) {
                modalImage.src = imageSrc;
                modalImageAlt.textContent = imageAlt;
                imageModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }
    </script>
</body>

</html>
