<!DOCTYPE html>
<html class="scroll-smooth" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Ultimate Guide to Choosing the Right Exterior Signage for Your Business | Tri State Signs & Awnings</title>
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
                        '6xl': '72rem',
                        '7xl': '80rem',
                        '8xl': '88rem',
                        '9xl': '96rem',
                    }
                }
            }
        };
    </script>
    <style>
        .hero-bg {
            background-image: url({{ asset('img/exterior/ext1.JPG') }});
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

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
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
                            href="{{ url('/reviews') }}">(4 Ratings)</a>
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

        <!-- Main nav -->
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-20">
                    <div class="flex items-center">
                        <a href="{{ url('/') }}">
                            <img alt="TriState Signs &amp; Awnings logo" class="h-8 sm:h-10 w-auto"
                                src="{{ asset('img/logo.png') }}" />
                        </a>
                    </div>

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

                    <button id="nav-toggle"
                        class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>

                <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-200 pb-4">
                    <nav class="pt-2">
                        <ul class="flex flex-col space-y-1 text-sm text-primary font-medium">
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/') }}">Home</a></li>
                            <li><a class="block px-2 py-2 rounded hover:bg-secondary"
                                    href="{{ url('/blog') }}">Back to Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Blog Post Header -->
        <section class="hero-bg text-text-light">
            <div class="hero-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
                <div class="text-center">
                    <a href="{{ url('/blog') }}" class="inline-flex items-center text-secondary hover:text-white mb-6 transition-colors">
                        <span class="material-symbols-outlined mr-2">arrow_back</span>
                        <span>Back to Blog</span>
                    </a>
                    <p class="text-sm sm:text-base mb-4 text-secondary">January 15, 2025</p>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold leading-tight mb-6">
                        The Ultimate Guide to Choosing the Right Exterior Signage for Your Business
                    </h1>
                    <p class="text-lg sm:text-xl text-secondary max-w-3xl mx-auto">
                        Discover how to select the perfect exterior signage that not only represents your brand but also attracts customers and complies with local regulations.
                    </p>
                </div>
            </div>
        </section>

        <!-- Blog Content -->
        <section class="bg-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <article class="prose prose-lg max-w-none">
                    <div class="mb-8">
                        <img src="{{ asset('img/exterior/ext1.JPG') }}" alt="Exterior Signage" class="w-full h-auto rounded-lg shadow-lg">
                    </div>

                    <p class="text-lg text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Choosing the right exterior signage for your business is one of the most important decisions you'll make. Your sign is often the first impression customers have of your business, and it plays a crucial role in attracting foot traffic, building brand recognition, and communicating your business's identity.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-text-dark dark:text-text-light mb-4 mt-8">
                        Understanding Different Types of Exterior Signs
                    </h2>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        There are numerous types of exterior signs available, each with its own advantages and best use cases. Channel letters are ideal for businesses wanting a modern, professional look with excellent visibility. Box signs provide a cost-effective solution with great durability and weather resistance. Monument signs offer a prestigious, permanent presence for businesses with ground-level visibility.
                    </p>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Pylon signs are perfect for businesses located away from the street, providing high visibility from a distance. Blade signs extend perpendicular from your building, catching the attention of both foot and vehicle traffic. Each type serves different purposes, and understanding which fits your location and budget is key to making the right choice.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-text-dark dark:text-text-light mb-4 mt-8">
                        Material Selection and Durability
                    </h2>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        The materials used in your exterior sign directly impact its longevity and appearance. Aluminum signs offer excellent durability and weather resistance, making them ideal for long-term installations. Acrylic provides a modern, sleek appearance with good weather resistance. Vinyl graphics offer flexibility and cost-effectiveness for temporary or frequently updated signage.
                    </p>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Consider your local climate when selecting materials. Areas with harsh weather conditions require more durable materials, while moderate climates may allow for more design flexibility. At Tri State Signs & Awnings, we use only high-quality materials that meet UL standards, ensuring your investment lasts for years to come.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-text-dark dark:text-text-light mb-4 mt-8">
                        Design Considerations for Maximum Impact
                    </h2>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Effective signage design balances several key elements: readability, brand consistency, and local regulations. Your sign should be easily readable from the distance where most customers will first see it. Font selection, color contrast, and size all play critical roles in ensuring your message is clear and impactful.
                    </p>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Brand consistency is equally important. Your exterior sign should align with your overall brand identity, using consistent colors, fonts, and messaging. This helps build brand recognition and creates a cohesive customer experience from the moment they see your sign to when they enter your business.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-text-dark dark:text-text-light mb-4 mt-8">
                        Navigating Local Regulations and Permits
                    </h2>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        One of the most challenging aspects of installing exterior signage is navigating local regulations and permit requirements. Different municipalities have varying rules regarding sign size, placement, illumination, and design. Working with an experienced signage company like Tri State Signs & Awnings ensures all permit requirements are handled professionally, saving you time and avoiding costly mistakes.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-display font-bold text-text-dark dark:text-text-light mb-4 mt-8">
                        Making Your Decision
                    </h2>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-6 leading-relaxed">
                        Choosing the right exterior signage requires careful consideration of your business needs, budget, location, and local regulations. At Tri State Signs & Awnings, we've been helping businesses in the tri-state area make these important decisions for over 40 years. Our team provides expert guidance throughout the entire process, from initial consultation to final installation.
                    </p>

                    <p class="text-base text-text-muted-light dark:text-text-muted-dark mb-8 leading-relaxed">
                        Ready to enhance your business visibility with professional exterior signage? <a href="{{ url('/contact-us') }}" class="text-primary hover:underline font-semibold">Contact us today</a> for a free consultation and estimate. We'll help you choose the perfect signage solution that represents your brand and attracts customers.
                    </p>
                </article>

                <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ url('/blog') }}" class="inline-flex items-center text-primary hover:text-primary-light transition-colors font-semibold">
                        <span class="material-symbols-outlined mr-2">arrow_back</span>
                        <span>Back to All Blog Posts</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

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
        const navToggle = document.getElementById('nav-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (navToggle && mobileMenu) {
            navToggle.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                navToggle.setAttribute('aria-expanded', String(isOpen));
            });
        }
    </script>
</body>

</html>

