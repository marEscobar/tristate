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
            background-image: url({{ asset('img/1.webp') }});
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 61, 100, 0.75);
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
    <header class="bg-background-light dark:bg-background-dark shadow-sm sticky top-0 z-40">
        <!-- Top bar -->
        <div class="border-b border-gray-200 dark:border-gray-700 bg-white">
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
                    <a class="inline-block px-4 sm:px-6 py-2 bg-primary text-text-light font-bold rounded-md hover:bg-primary-light transition-all duration-300 text-xs sm:text-sm shadow-sm text-center"
                        href="{{ url('/request-call-back') }}">Request Call Back</a>
                    <p class="text-base sm:text-lg font-bold text-text-dark dark:text-text-light whitespace-nowrap">
                        (718) 705-0333
                    </p>
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

                                <a href="#"
                                    class="py-5 inline-flex items-center transition-colors duration-300               {{ request()->is('exterior-signs') || request()->is('interior-signs') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }}">
                                    Sign Services
                                    <span
                                        class="material-symbols-outlined ml-1                   transform group-hover:rotate-180 transition-transform duration-300">
                                        expand_more
                                    </span>
                                </a>

                                <div
                                    class="submenu absolute left-0 top-full w-[250px]               bg-white rounded-md shadow-lg               opacity-0 invisible               group-hover:visible group-hover:opacity-100               px-2 py-1 z-50">

                                    <a href="{{ url('/exterior-signs') }}"
                                        class="block px-4 py-2 text-sm hover:bg-secondary">
                                        Exterior Signs
                                    </a>

                                    <a href="{{ url('/interior-signs') }}"
                                        class="block px-4 py-2 text-sm hover:bg-secondary">
                                        Interior Signs
                                    </a>
                                </div>

                            </li>









                            <li class="group relative">

                                <!-- LINK PRINCIPAL -->
                                <a href="#"
                                    class="py-5 inline-flex items-center transition-colors duration-300
               {{ request()->is('commercial-awnings') || request()->is('residential-awnings')
                   ? 'border-b-2 border-primary text-primary'
                   : 'group-hover:text-primary-light' }}">
                                    Awning Services
                                    <span
                                        class="material-symbols-outlined text-base ml-1
                   transform group-hover:rotate-180 transition-transform duration-300">
                                        expand_more
                                    </span>
                                </a>

                                <!-- SUBMENU (FUERA DEL <a>) -->
                                <div
                                    class="submenu absolute left-0 top-full w-[250px]               bg-white rounded-md shadow-lg               opacity-0 invisible               group-hover:visible group-hover:opacity-100               px-2 py-1 z-50">

                                    <a href="{{ url('/commercial-awnings') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('commercial-awnings') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        Commercial Awnings
                                    </a>

                                    <a href="{{ url('/residential-awnings') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('residential-awnings') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        Residential Awnings
                                    </a>
                                </div>

                            </li>


                            <li><a class="py-5 inline-flex {{ request()->is('installations') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/installations') }}">Installations</a></li>
                            <li><a class="py-5 inline-flex {{ request()->is('led-displays') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/led-displays') }}">LED Displays</a></li>
                            <li><a class="py-5 inline-flex {{ request()->is('permits') ? 'border-b-2 border-primary text-primary' : 'hover:text-primary-light' }} transition-colors duration-300"
                                    href="{{ url('/permits') }}">Permits</a></li>







                            <li class="group relative">

                                <!-- LINK PRINCIPAL -->
                                <a href="{{ url('/about') }}"
                                    class="py-5 inline-flex items-center transition-colors duration-300               {{ request()->is('about') || request()->is('gallery') || request()->is('reviews') || request()->is('blog') || request()->is('faqs') ? 'border-b-2 border-primary text-primary' : 'group-hover:text-primary-light' }}">
                                    About
                                    <span
                                        class="material-symbols-outlined text-base ml-1                   transform group-hover:rotate-180 transition-transform duration-300">
                                        expand_more
                                    </span>
                                </a>

                                <!-- SUBMENU (FUERA DEL <a>) -->
                                <div
                                    class="submenu absolute left-0 top-full w-[250px]               bg-white rounded-md shadow-lg               opacity-0 invisible               group-hover:visible group-hover:opacity-100               px-2 py-1 z-50">

                                    <a href="{{ url('/gallery') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('gallery') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        Gallery
                                    </a>

                                    <a href="{{ url('/reviews') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('reviews') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        Reviews
                                    </a>

                                    <a href="{{ url('/blog') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('blog') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        Blog
                                    </a>

                                    <a href="{{ url('/faqs') }}"
                                        class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('faqs') ? 'text-primary font-semibold' : 'text-body-color hover:bg-secondary hover:text-primary' }}">
                                        FAQs
                                    </a>
                                </div>

                            </li>











                           <li class="group relative">

    <!-- LINK PRINCIPAL -->
    <a
        href="#"
        class="py-5 inline-flex items-center transition-colors duration-300
               {{ request()->is('request-call-back') || request()->is('contact-us')
                    ? 'border-b-2 border-primary text-primary'
                    : 'group-hover:text-primary-light' }}">
        Contact
        <span
            class="material-symbols-outlined text-base ml-1
                   transform group-hover:rotate-180 transition-transform duration-300">
            expand_more
        </span>
    </a>

    <!-- SUBMENU (FUERA DEL <a>) -->
    <div
        class="submenu absolute left-0 top-full w-[250px]               bg-white rounded-md shadow-lg               opacity-0 invisible               group-hover:visible group-hover:opacity-100               px-2 py-1 z-50">

        <a href="{{ url('/request-call-back') }}"           class="block rounded-sm px-4 py-2 text-sm                  {{ request()->is('request-call-back')                        ? 'text-primary font-semibold'                        : 'text-body-color hover:bg-secondary hover:text-primary' }}">
            Request Call Back
        </a>
    </div>

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
        <!-- HERO SECTION - Similar to Valle Signs -->
        <section class="hero-bg text-text-light">
            <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-36">
                <div class="text-center max-w-4xl mx-auto space-y-8">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display font-bold leading-tight">
                        Custom Signs & Awnings That Have Drawn A Crowd For Over 40 Years
                    </h1>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-6">
                        <a href="{{ url('/request-call-back') }}"
                           class="inline-flex items-center justify-center bg-white text-primary font-bold px-8 sm:px-12 py-4 sm:py-5 rounded-md hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg text-base sm:text-lg">
                            Get In Touch
                        </a>
                        <a href="{{ url('/contact-us') }}"
                           class="inline-flex items-center justify-center bg-primary-light text-white font-bold px-8 sm:px-12 py-4 sm:py-5 rounded-md hover:bg-primary transform hover:scale-105 transition-all duration-300 shadow-lg text-base sm:text-lg border-2 border-white">
                            LET'S GET STARTED
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- PERMIT EXPEDITOR SECTION - Similar to Valle Signs -->
        <section class="bg-white py-12 sm:py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark mb-4">
                        Ask About Our In-House Permit Expeditor
                    </h2>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 sm:gap-8 items-center justify-items-center opacity-60">
                    <!-- Client logos placeholder - you can add actual logos here -->
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 1</div>
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 2</div>
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 3</div>
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 4</div>
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 5</div>
                    <div class="bg-gray-200 h-20 w-full rounded flex items-center justify-center text-text-muted-light text-sm font-semibold">Client 6</div>
                </div>
            </div>
        </section>

        <!-- WEST BABYLON + REQUEST A CALL BACK SECTION -->
        <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-10 lg:gap-16 items-center">
                    <div class="md:col-span-3 space-y-6 sm:space-y-8">
                        <h1 class="text-5xl font-display font-bold leading-tight">Custom Signs in West Babylon, NY and
                            Surrounding
                            Areas</h1>

                        <ul class="space-y-3 sm:space-y-4 text-base sm:text-lg">
                            <li class="flex items-start">
                                <span class="material-symbols-outlined text-secondary mr-3 mt-0.5">check_circle</span>
                                <span>Five-Year Sign Warranty</span>
                            </li>
                            <li class="flex items-start">
                                <span class="material-symbols-outlined text-secondary mr-3 mt-0.5">check_circle</span>
                                <span>Impossible Deadlines? No Problem—We Deliver</span>
                            </li>
                            <li class="flex items-start">
                                <span class="material-symbols-outlined text-secondary mr-3 mt-0.5">check_circle</span>
                                <span>Over 40 Years Of Trusted Experience</span>
                            </li>
                            <li class="flex items-start">
                                <span class="material-symbols-outlined text-secondary mr-3 mt-0.5">check_circle</span>
                                <span>Your Local One-stop Shop For All Signage Needs</span>
                            </li>
                        </ul>

                        <div>
                            <p class="text-3xl sm:text-4xl font-display font-bold tracking-tight">(718) 705-0333</p>
                            <p class="mt-2 text-secondary text-sm sm:text-base">
                                Hours: <span id="businessStatus" class="font-medium">Loading...</span> • Opens 08:00
                                am
                            </p>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="md:col-span-2 bg-white text-text-dark p-6 sm:p-8 rounded-lg shadow-2xl">
                        <h2 class="text-xl sm:text-2xl font-display font-bold text-center mb-6">Request a Call Back
                        </h2>
                        <form class="space-y-4 sm:space-y-5">
                            <div>
                                <label class="sr-only" for="full-name">Full Name</label>
                                <input
                                    class="w-full bg-gray-100 border border-gray-300 rounded text-text-dark placeholder-text-muted-light focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                    id="full-name" placeholder="Full Name*" type="text" />
                            </div>
                            <div>
                                <label class="sr-only" for="phone">Phone</label>
                                <input
                                    class="w-full bg-gray-100 border border-gray-300 rounded text-text-dark placeholder-text-muted-light focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                    id="phone" placeholder="Phone*" type="tel" />
                            </div>
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input
                                    class="w-full bg-gray-100 border border-gray-300 rounded text-text-dark placeholder-text-muted-light focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                    id="email" placeholder="Email*" type="email" />
                            </div>
                            <div>
                                <label class="sr-only" for="service">Service</label>
                                <select
                                    class="w-full bg-gray-100 border border-gray-300 rounded text-text-dark focus:ring-primary focus:border-primary transition-colors duration-300 text-sm sm:text-base px-3 py-2.5"
                                    id="service">
                                    <option class="text-text-muted-light">Service*</option>
                                    <option>Sign Services</option>
                                    <option>Awning Services</option>
                                    <option>Installation</option>
                                </select>
                            </div>
                            <p class="text-[11px] sm:text-xs text-text-muted-light text-center pt-1 sm:pt-2">
                                This site is protected by reCAPTCHA.
                            </p>
                            <button
                                class="w-full bg-primary text-text-light font-bold py-2.5 sm:py-3 rounded-md hover:bg-primary-light transform hover:-translate-y-0.5 transition-all duration-300 shadow-md text-sm sm:text-base"
                                type="submit">
                                Request Call Back
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- NATIONWIDE SERVICE - Design, Fabrication, Installation -->
        <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark mb-4">
                        Nationwide Service
                    </h2>
                    <p class="text-lg text-text-muted-light max-w-3xl mx-auto">
                        Tri State Signs & Awnings is trusted by top national brands, for their superior design, fabrication and installation services.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    <!-- 01 Design -->
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-primary text-white rounded-full mb-6 text-3xl font-bold">
                            01
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text-dark mb-4">Design</h3>
                        <p class="text-text-muted-light leading-relaxed">
                            Let us help you enhance your business with a custom designed sign with the support of our expert staff.
                        </p>
                    </div>
                    <!-- 02 Fabrication -->
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-primary text-white rounded-full mb-6 text-3xl font-bold">
                            02
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text-dark mb-4">Fabrication</h3>
                        <p class="text-text-muted-light leading-relaxed">
                            We build signs to last, using only the finest quality materials in the manufacturing process.
                        </p>
                    </div>
                    <!-- 03 Installation -->
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-primary text-white rounded-full mb-6 text-3xl font-bold">
                            03
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text-dark mb-4">Installation</h3>
                        <p class="text-text-muted-light leading-relaxed">
                            Our technicians arrive on-site with a fully equipped vehicle to get the install job done with quality workmanship.
                        </p>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="tel:7187050333"
                       class="inline-flex items-center bg-primary text-white font-bold px-8 py-4 rounded-md hover:bg-primary-light transform hover:scale-105 transition-all duration-300 shadow-lg text-lg">
                        Call Today For An Estimate!
                    </a>
                </div>
            </div>
        </section>

        <!-- OUR QUALITY SECTION - Similar to Valle Signs -->
        <section class="bg-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark mb-4">
                        It's all about
                    </h2>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-primary mb-6">
                        Our Quality
                    </h3>
                    <p class="text-lg text-text-muted-light max-w-4xl mx-auto leading-relaxed">
                        Noted for custom signs with durability and value, Tri State Signs & Awnings uses only the highest quality materials and processes in the manufacture of our custom signs. As a registered manufacturer with Underwriters Laboratories, Tri State Signs and Awnings is qualified to produce only the safest fixtures that adhere to the strictest codes and standards.
                    </p>
                    <div class="mt-8">
                        <span class="inline-block bg-primary text-white font-bold px-8 py-3 rounded-md text-lg">
                            UL Listed
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR WORK / GALLERY SECTION - Similar to Valle Signs -->
        <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark mb-4">
                        Our Work
                    </h2>
                    <p class="text-lg text-text-muted-light max-w-3xl mx-auto">
                        Our mission is to help people create innovative solutions to improve and advertise their business. Our goal is moderate growth, annual profitability and to offer the best service possible!!
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    <a href="{{ url('/commercial-awnings') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-6xl">storefront</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-2 group-hover:text-primary transition-colors">
                                Awnings & Canopies
                            </h3>
                            <h4 class="text-lg font-semibold text-primary">Awnings & Canopies</h4>
                        </div>
                    </a>
                    <a href="{{ url('/exterior-signs') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-6xl">text_fields</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-2 group-hover:text-primary transition-colors">
                                Channel Letters
                            </h3>
                            <h4 class="text-lg font-semibold text-primary">Channel Letters</h4>
                        </div>
                    </a>
                    <a href="{{ url('/installations') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-6xl">construction</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-2 group-hover:text-primary transition-colors">
                                Sign Installations
                            </h3>
                            <h4 class="text-lg font-semibold text-primary">Sign Installations</h4>
                        </div>
                    </a>
                    <a href="{{ url('/led-displays') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-6xl">desktop_windows</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-2 group-hover:text-primary transition-colors">
                                LED Displays
                            </h3>
                            <h4 class="text-lg font-semibold text-primary">LED Displays</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- STATS SECTION - Similar to Valle Signs -->
        <section class="bg-primary text-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold mb-12">Stats</h2>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold mb-16">Successful Projects</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 text-center">
                    <div>
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-display font-bold mb-4">1000+</div>
                        <h4 class="text-xl sm:text-2xl font-display font-semibold mb-2">Signs</h4>
                    </div>
                    <div>
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-display font-bold mb-4">500+</div>
                        <h4 class="text-xl sm:text-2xl font-display font-semibold mb-2">Installations</h4>
                    </div>
                    <div>
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-display font-bold mb-4">100%</div>
                        <h4 class="text-xl sm:text-2xl font-display font-semibold mb-2">Customer Satisfaction</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- WATCH THE PROS VIDEO SECTION - Similar to Valle Signs -->
        <section class="bg-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-text-dark mb-4">
                        Watch The Pros at Tri State Signs & Awnings
                    </h2>
                    <p class="text-lg text-text-muted-light max-w-3xl mx-auto mb-8">
                        From design and fabrication to installation and service, we at Tri State Signs and Awnings are here for you. We pride ourselves in giving you the best possible experience.
                    </p>
                    <a href="{{ url('/gallery') }}"
                       class="inline-flex items-center bg-primary text-white font-bold px-8 py-4 rounded-md hover:bg-primary-light transform hover:scale-105 transition-all duration-300 shadow-lg text-lg">
                        View Our Project Gallery
                    </a>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="relative aspect-video w-full rounded-lg shadow-2xl overflow-hidden">
                        <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mt-12">
                    <div class="bg-white dark:bg-primary-dark/80 rounded-lg shadow-lg overflow-hidden flex flex-col">
                        <img alt="A storefront with a sign" class="w-full h-48 sm:h-56 object-cover"
                            src="{{ asset('img/img1.png') }}" />
                        <div class="p-5 sm:p-6 flex flex-col flex-grow text-center">
                            <h3
                                class="text-xl sm:text-2xl font-display font-bold mb-2 sm:mb-3 text-text-dark dark:text-text-light">
                                Same-Day Appointments
                            </h3>
                            <p
                                class="text-text-muted-light dark:text-text-muted-dark mb-4 sm:mb-6 flex-grow text-sm sm:text-base">
                                Tri State Signs &amp; Awnings understands the urgency of planning your signage and
                                awning needs. We
                                address this promptly, which is why we offer same-day appointments for consultations and
                                assessments.
                            </p>
                            <a class="mt-auto inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto"
                                href="{{ url('contact-us') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-primary-dark/80 rounded-lg shadow-lg overflow-hidden flex flex-col">
                        <img alt="A modern building with a distinct sign" class="w-full h-48 sm:h-56 object-cover"
                            src="{{ asset('img/img2.png') }}" />
                        <div class="p-5 sm:p-6 flex flex-col flex-grow text-center">
                            <h3
                                class="text-xl sm:text-2xl font-display font-bold mb-2 sm:mb-3 text-text-dark dark:text-text-light">
                                Concierge-Level Service
                            </h3>
                            <p
                                class="text-text-muted-light dark:text-text-muted-dark mb-4 sm:mb-6 flex-grow text-sm sm:text-base">
                                Concierge means much more than that you receive personal attention and expert guidance
                                throughout your
                                project. From the initial consultation to the final installation, we've got it handled.
                            </p>
                            <a class="mt-auto inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto"
                                href="{{ url('contact-us') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-primary-dark/80 rounded-lg shadow-lg overflow-hidden flex flex-col">
                        <img alt="A large retail store sign at night" class="w-full h-48 sm:h-56 object-cover"
                            src="{{ asset('img/img3.png') }}" />
                        <div class="p-5 sm:p-6 flex flex-col flex-grow text-center">
                            <h3
                                class="text-xl sm:text-2xl font-display font-bold mb-2 sm:mb-3 text-text-dark dark:text-text-light">
                                UL Listed
                            </h3>
                            <p
                                class="text-text-muted-light dark:text-text-muted-dark mb-4 sm:mb-6 flex-grow text-sm sm:text-base">
                                As a UL listed business, Tri State Signs &amp; Awnings prioritizes safety and quality in
                                every product
                                we create, adhering to industry standards for performance and reliability. We deliver
                                exceptional
                                results.
                            </p>
                            <a class="mt-auto inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm w-full sm:w-auto"
                                href="{{ url('contact-us') }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GET A FAST QUOTE FORM - Similar to Valle Signs -->
        <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-lg shadow-xl p-8 sm:p-10 lg:p-12">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl sm:text-4xl font-display font-bold text-text-dark mb-4">
                            GET A FAST QUOTE
                        </h2>
                        <p class="text-text-muted-light mb-6">
                            Get in Touch and Upload Your Ideas (optional)
                        </p>
                        <div class="space-y-2 text-sm text-text-muted-light">
                            <p><strong>Email:</strong> info@tristatesigns.com</p>
                            <p><strong>Phone:</strong> <a href="tel:7187050333" class="text-primary hover:underline">(718) 705-0333</a></p>
                            <p><strong>Corporate Office:</strong> 333 Wyandanch Ave, West Babylon, NY 11704</p>
                            <p>Open Monday – Friday from 8am-5pm | Closed Saturday – Sunday</p>
                        </div>
                    </div>
                    <form class="space-y-6" id="quoteForm">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="quote-name" class="block text-sm font-semibold text-text-dark mb-2">
                                    Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="quote-name" name="name" required
                                    class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                                    placeholder="First Last" />
                            </div>
                            <div>
                                <label for="quote-email" class="block text-sm font-semibold text-text-dark mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="quote-email" name="email" required
                                    class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                                    placeholder="your.email@example.com" />
                            </div>
                        </div>
                        <div>
                            <label for="quote-phone" class="block text-sm font-semibold text-text-dark mb-2">
                                Phone <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="quote-phone" name="phone" required
                                class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                                placeholder="(555) 123-4567" />
                        </div>
                        <div>
                            <label for="quote-address" class="block text-sm font-semibold text-text-dark mb-2">
                                Address <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="quote-address" name="address" required
                                class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                                placeholder="Street Address" />
                        </div>
                        <div>
                            <label for="quote-city" class="block text-sm font-semibold text-text-dark mb-2">
                                City, State ZIP / Postal Code <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="quote-city" name="city" required
                                class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                                placeholder="City, State ZIP" />
                        </div>
                        <div>
                            <label for="quote-info" class="block text-sm font-semibold text-text-dark mb-2">
                                Additional Info
                            </label>
                            <textarea id="quote-info" name="info" rows="4"
                                class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark placeholder-text-muted-light focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3 resize-none"
                                placeholder="Tell us about your project..."></textarea>
                        </div>
                        <div>
                            <label for="quote-file" class="block text-sm font-semibold text-text-dark mb-2">
                                Upload Your Ideas
                            </label>
                            <input type="file" id="quote-file" name="file" accept=".jpg,.jpeg,.png,.pdf,.heic"
                                class="w-full bg-gray-50 border-2 border-gray-200 rounded-md text-text-dark focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300 px-4 py-3"
                            />
                            <p class="text-xs text-text-muted-light mt-2">
                                Accepted file types: jpg, jpeg, png, pdf, heic, Max. file size: 10 MB.
                            </p>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-muted-light">
                            <span class="material-symbols-outlined text-primary">security</span>
                            <span>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</span>
                        </div>
                        <button type="submit"
                            class="w-full bg-primary text-white font-bold py-4 rounded-md hover:bg-primary-light transform hover:scale-[1.02] transition-all duration-300 shadow-lg text-lg">
                            Submit Quote Request
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS - Here's what our satisfied customers are saying... -->
        <section class="write-bg py-16 sm:py-20 lg:py-24 bg-background-light dark:bg-background-dark">
            <div class="write-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16">
                    <h2
                        class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-center mb-10 sm:mb-12 text-text-light dark:text-text-dark">
                        Here's what our satisfied customers are saying...
                    </h2>
                    <p class="sm:mb-6 text-sm sm:text-base text-center text-text-light dark:text-text-dark">
                        At Tri State Signs & Awnings, we take pride in providing exceptional sign and awning services to
                        our customers. We would be grateful if you could share your thoughts about our business with
                        others. Your feedback helps us improve and helps others make informed decisions. Please take a
                        moment to leave a review of Tri State Signs & Awnings and let others know what you think.
                    </p>
                    <button id="openReviewModal"
                        class="inline-block bg-primary text-text-light font-bold px-5 sm:px-6 py-2.5 rounded-md hover:bg-primary-light transition-colors duration-300 text-xs sm:text-sm">Write
                        a Review</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div
                        class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md p-6 sm:p-8 flex flex-col">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div>
                                <h3 class="font-bold text-base sm:text-lg text-text-dark dark:text-text-light">Brittany D</h3>
                                <p class="text-xs sm:text-sm text-text-muted-light dark:text-text-muted-dark">5/1/2025</p>
                            </div>
                            <div class="flex text-primary dark:text-yellow-400">
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                            </div>
                        </div>
                        <p class="text-text-muted-light dark:text-text-muted-dark leading-relaxed text-sm sm:text-base">
                            Super easy to work with and they really know their stuff. When it comes to permits, custom
                            vinyl turned out awesome, and the awning looking good too -- totally transforms the front of
                            storefront. Definitely recommend!
                        </p>
                    </div>
                    <div
                        class="bg-white dark:bg-primary-dark/20 border border-gray-200 dark:border-primary-light/20 rounded-lg shadow-md p-6 sm:p-8 flex flex-col">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div>
                                <h3 class="font-bold text-base sm:text-lg text-text-dark dark:text-text-light">John M</h3>
                                <p class="text-xs sm:text-sm text-text-muted-light dark:text-text-muted-dark">4/15/2025</p>
                            </div>
                            <div class="flex text-primary dark:text-yellow-400">
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm sm:text-base"
                                    style="font-variation-settings: 'FILL' 1">star</span>
                            </div>
                        </div>
                        <p class="text-text-muted-light dark:text-text-muted-dark leading-relaxed text-sm sm:text-base">
                            Excellent experience from start to finish. The team at Tri State Signs & Awnings was
                            professional, responsive, and delivered exactly what we needed. Our new signage looks
                            fantastic and we've received many compliments. Highly recommended!
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
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
    </script>
</body>

</html>
