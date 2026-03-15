<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | Tri State Signs & Awnings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#0f172a',
                        inklight: '#1e293b',
                        accent: '#6ebb1c',
                        accentlight: '#8dd43a',
                        cream: '#fefce8',
                        sand: '#fef3c7',
                    },
                    fontFamily: {
                        display: ['Bebas Neue', 'sans-serif'],
                        sans: ['Outfit', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .font-display { font-family: 'Bebas Neue', 'sans-serif'; letter-spacing: 0.02em; }
        .hero-pattern { background-image: radial-gradient(circle at 20% 50%, rgba(110,187,28,0.08) 0%, transparent 50%); }
        .clip-wedge { clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
        .clip-wedge-inv { clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%); }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15); }
        .btn-accent { background: linear-gradient(135deg, #6ebb1c 0%, #5a9516 100%); }
        .btn-accent:hover { background: linear-gradient(135deg, #8dd43a 0%, #6ebb1c 100%); }
        .nav-blur { backdrop-filter: blur(12px); background: rgba(15,23,42,0.85); }
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
    </style>
</head>
<body class="font-sans text-ink bg-white antialiased">
    <!-- Header: minimal, sticky -->
    <header class="fixed top-0 left-0 right-0 z-50 nav-blur border-b border-white/10 bg-white/95" style="border-bottom: 0.5rem solid #030f1e;">
        <div class="max-w-[80rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Tri State Signs & Awnings" class="h-9 sm:h-10 w-auto" />
                </a>
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ url('/') }}" class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Home</a>
                    <div class="relative group">
                        <button class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
                            Sign Services <span class="material-symbols-outlined text-base">expand_more</span>
                        </button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-inklight rounded-xl shadow-xl py-2 min-w-[200px] border border-white/10">
                                <a href="{{ url('/exterior-signs') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Exterior Signs</a>
                                <a href="{{ url('/interior-signs') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Interior Signs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
                            Awning Services <span class="material-symbols-outlined text-base">expand_more</span>
                        </button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-inklight rounded-xl shadow-xl py-2 min-w-[200px] border border-white/10">
                                <a href="{{ url('/commercial-awnings') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Commercial Awnings</a>
                                <a href="{{ url('/residential-awnings') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Residential Awnings</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/installations') }}" class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Installations</a>
                    <a href="{{ url('/led-displays') }}" class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">LED Displays</a>
                    <a href="{{ url('/permits') }}" class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Permits</a>
                    <div class="relative group">
                        <button class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
                            About <span class="material-symbols-outlined text-base">expand_more</span>
                        </button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-inklight rounded-xl shadow-xl py-2 min-w-[200px] border border-white/10">
                                <a href="{{ url('/gallery') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Gallery</a>
                                <a href="{{ url('/reviews') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Reviews</a>
                                <a href="{{ url('/blog') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Blog</a>
                                <a href="{{ url('/faqs') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">FAQs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="px-4 py-2 text-primary hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
                            Contact <span class="material-symbols-outlined text-base">expand_more</span>
                        </button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-inklight rounded-xl shadow-xl py-2 min-w-[200px] border border-white/10">
                                <a href="{{ url('/request-call-back') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Request Call Back</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="flex items-center gap-3">
                    <a href="tel:7187050333" class="hidden sm:flex items-center gap-2 text-primary hover:text-accent text-sm font-semibold">
                        <span class="material-symbols-outlined text-lg">call</span> (718) 705-0333
                    </a>
                    <a href="{{ url('/request-call-back') }}" class="btn-accent text-white font-semibold px-5 py-2.5 rounded-xl text-sm shadow-lg hover:shadow-accent/25 transition-all">
                        Request Call Back
                    </a>
                    <button id="nav-toggle" class="lg:hidden p-2 rounded-lg hover:bg-white/10" aria-label="Menu">
                        <span class="material-symbols-outlined text-2xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="lg:hidden hidden border-t border-white/10 bg-ink/98 backdrop-blur">
            <nav class="max-w-[80rem] mx-auto px-4 py-4 space-y-1">
                <a href="{{ url('/') }}" class="block py-2.5 text-primary hover:text-accent">Home</a>
                <a href="{{ url('/exterior-signs') }}" class="block py-2.5 text-primary hover:text-accent">Exterior Signs</a>
                <a href="{{ url('/interior-signs') }}" class="block py-2.5 text-primary hover:text-accent">Interior Signs</a>
                <a href="{{ url('/commercial-awnings') }}" class="block py-2.5 text-primary hover:text-accent">Commercial Awnings</a>
                <a href="{{ url('/residential-awnings') }}" class="block py-2.5 text-primary hover:text-accent">Residential Awnings</a>
                <a href="{{ url('/installations') }}" class="block py-2.5 text-primary hover:text-accent">Installations</a>
                <a href="{{ url('/led-displays') }}" class="block py-2.5 text-primary hover:text-accent">LED Displays</a>
                <a href="{{ url('/permits') }}" class="block py-2.5 text-primary hover:text-accent">Permits</a>
                <a href="{{ url('/gallery') }}" class="block py-2.5 text-primary hover:text-accent">Gallery</a>
                <a href="{{ url('/reviews') }}" class="block py-2.5 text-primary hover:text-accent">Reviews</a>
                <a href="{{ url('/blog') }}" class="block py-2.5 text-primary hover:text-accent">Blog</a>
                <a href="{{ url('/faqs') }}" class="block py-2.5 text-primary hover:text-accent">FAQs</a>
                <a href="{{ url('/request-call-back') }}" class="block py-2.5 text-primary hover:text-accent">Request Call Back</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="hero-bg text-white pt-20">
            <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-36">
                <div class="text-center max-w-4xl mx-auto space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display font-bold leading-tight">
                        About Tri State Signs & Awnings
                    </h1>
                    <p class="text-xl sm:text-2xl text-white/90 max-w-3xl mx-auto">
                        Your Trusted Partner in Custom Signs & Awnings for Over 40 Years
                    </p>
                </div>
            </div>
        </section>

        <!-- ABOUT CONTENT SECTION -->
        <section class="bg-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Main About Content -->
                    <div class="lg:col-span-2 space-y-8">
                        <div>
                            <h2 class="text-3xl sm:text-4xl font-display font-bold text-ink mb-6">
                                About Us
                            </h2>
                            <p class="text-lg text-ink/70 leading-relaxed mb-6">
                                Tri State Signs & Awnings provides residential and commercial signs, LED displays, corporate event set up and tear down, and awnings to NY, NJ, and CT.
                            </p>
                            <p class="text-lg text-ink/70 leading-relaxed">
                                With over 40 years of experience, we've built a reputation for excellence, quality craftsmanship, and exceptional customer service. Our team of skilled professionals is dedicated to bringing your vision to life with custom signage solutions that stand the test of time.
                            </p>
                        </div>

                        <!-- Specialties -->
                        <div>
                            <h3 class="text-2xl font-display font-bold text-ink mb-6">Our Specialties</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">store</span>
                                    <span class="text-ink font-medium">Illuminated Signs</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">meeting_room</span>
                                    <span class="text-ink font-medium">Interior & Exterior Signs</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">edit</span>
                                    <span class="text-ink font-medium">Custom Signs</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">storefront</span>
                                    <span class="text-ink font-medium">Awnings</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">desktop_windows</span>
                                    <span class="text-ink font-medium">LED Displays</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">construction</span>
                                    <span class="text-ink font-medium">Fabrication</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">palette</span>
                                    <span class="text-ink font-medium">Graphic Design</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">description</span>
                                    <span class="text-ink font-medium">Permitting</span>
                                </div>
                                <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-accent text-2xl">build</span>
                                    <span class="text-ink font-medium">Maintenance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Info -->
                    <div class="lg:col-span-1 space-y-8">
                        <!-- Business Hours -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                                Business Hours
                            </h3>
                            <ul class="space-y-3 text-text-muted-light">
                                <li class="flex justify-between">
                                    <span class="font-medium text-text-dark">Mon - Fri:</span>
                                    <span>8:00 am - 5:00 pm</span>
                                </li>
                                <li class="flex justify-between">
                                    <span class="font-medium text-text-dark">Sat - Sun:</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                            <p class="mt-4 text-sm font-semibold text-primary">Same-Day Appointments Available</p>
                        </div>

                        <!-- Languages -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">language</span>
                                Languages
                            </h3>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">English</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Spanish</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Services -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">local_shipping</span>
                                Service Options
                            </h3>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Delivery</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Pickup Available</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Payment Methods -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">payment</span>
                                Payment Methods
                            </h3>
                            <div class="grid grid-cols-2 gap-2 text-sm">
                                <span class="text-text-dark">✓ Checks</span>
                                <span class="text-text-dark">✓ Cash</span>
                                <span class="text-text-dark">✓ Credit Cards</span>
                                <span class="text-text-dark">✓ Debit Cards</span>
                                <span class="text-text-dark">✓ ACH</span>
                                <span class="text-text-dark">✓ Invoice</span>
                            </div>
                        </div>

                        <!-- Parking -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-xl font-display font-bold text-text-dark mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">local_parking</span>
                                Parking
                            </h3>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Free Parking Garage</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Free Street Parking</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">Free Parking Lot</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    <span class="text-text-dark">On-Site Parking</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Year Established -->
                        <div class="bg-accent text-white rounded-lg p-6 text-center">
                            <h3 class="text-xl font-display font-bold mb-2">Year Established</h3>
                            <p class="text-4xl font-bold">1980+</p>
                            <p class="text-sm mt-2 opacity-90">Over 40 Years of Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section video --}}
        {{-- <section class="py-16 sm:py-20 lg:py-24 bg-gray-100 dark:bg-primary-dark/40">
            <div class="max-w-[80rem] mx-auto px-4 sm:px-6 lg:px-8">
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
        </section> --}}
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
                    <form id="reviewForm" action="{{ route('reviews.storePublic') }}" method="POST">
                        @csrf
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
        class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col items-center bg-gradient-to-b from-primary-dark to-primary-light shadow-lg rounded-l-md z-30">
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center rounded-tl-md group relative flex items-center justify-center"
            href="tel:7187050333" title="Call Us">
            <span class="material-symbols-outlined text-base sm:text-lg group-hover:scale-110 transition-transform duration-300">phone</span>
            <span class="absolute left-full ml-3 px-3 py-1 bg-primary text-text-light text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Call Us</span>
        </a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group relative flex items-center justify-center"
            href="{{ url('/reviews') }}" title="Reviews">
            <span class="material-symbols-outlined text-base sm:text-lg group-hover:scale-110 transition-transform duration-300">star</span>
            <span class="absolute left-full ml-3 px-3 py-1 bg-primary text-text-light text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Reviews</span>
        </a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group relative flex items-center justify-center"
            href="{{ url('request-call-back') }}" title="Email Us">
            <span class="material-symbols-outlined text-base sm:text-lg group-hover:scale-110 transition-transform duration-300">email</span>
            <span class="absolute left-full ml-3 px-3 py-1 bg-primary text-text-light text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Email Us</span>
        </a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center group relative flex items-center justify-center"
            href="https://www.google.com/maps/search/333+Wyandanch+Ave,+West+Babylon,+NY" target="_blank" title="Our Location">
            <span class="material-symbols-outlined text-base sm:text-lg group-hover:scale-110 transition-transform duration-300">location_on</span>
            <span class="absolute left-full ml-3 px-3 py-1 bg-primary text-text-light text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Our Location</span>
        </a>
        <a class="p-3 text-secondary hover:bg-accent hover:text-primary-dark transition-all duration-300 w-full text-center rounded-bl-md group relative flex items-center justify-center"
            href="#" title="Share">
            <span class="material-symbols-outlined text-base sm:text-lg group-hover:scale-110 transition-transform duration-300">share</span>
            <span class="absolute left-full ml-3 px-3 py-1 bg-primary text-text-light text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Share</span>
        </a>
    </div>

    <!-- Footer -->
    <footer class="bg-ink text-white py-16 sm:py-20">
        <div class="max-w-[80rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">
                <div>
                    <h3 class="font-display text-xl mb-4">Visit Us</h3>
                    <p class="text-white/70">333 Wyandanch Avenue</p>
                    <p class="text-white/70">West Babylon, NY 11704</p>
                    <a href="#" class="inline-block mt-4 border border-accent text-accent font-semibold px-5 py-2.5 rounded-xl hover:bg-accent hover:text-white transition-all text-sm">Get Directions</a>
                </div>
                <div>
                    <h3 class="font-display text-xl mb-4">Serving Area</h3>
                    <ul class="text-white/70 text-sm space-y-1 columns-2 gap-x-6">
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
                    <h3 class="font-display text-xl mb-4">Contact Us</h3>
                    <p class="font-bold text-lg mb-4">(718) 705-0333</p>
                    <a href="{{ url('contact-us') }}" class="inline-block bg-accent text-white font-semibold px-5 py-2.5 rounded-xl hover:bg-accentlight transition-colors text-sm mb-4">Send a Message</a>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/tristatesigns" class="text-white/70 hover:text-accent transition-colors" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/TriSignsNY" class="text-white/70 hover:text-accent transition-colors" aria-label="Facebook TriSigns"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg></a>
                    </div>
                </div>
                <div>
                    <h3 class="font-display text-xl mb-4">Business Hours</h3>
                    <p class="text-white/70 flex justify-between"><span>Mon – Fri</span><span>8:00am – 5:00pm</span></p>
                    <p class="text-white/70 flex justify-between"><span>Sat – Sun</span><span>Closed</span></p>
                    <p class="text-white/50 text-sm mt-4">Same-Day Appointments</p>
                </div>
            </div>
            <div class="border-t border-white/10 mt-12 pt-6 text-center text-white/50 text-sm">
                © {{ date('Y') }} Tri State Signs &amp; Awnings. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Floating sidebar -->
    <div class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col bg-ink/95 backdrop-blur rounded-l-2xl shadow-xl border border-white/10 z-40 overflow-hidden">
        <a href="tel:7187050333" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Call"><span class="material-symbols-outlined">call</span></a>
        <a href="{{ url('/reviews') }}" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Reviews"><span class="material-symbols-outlined">star</span></a>
        <a href="{{ url('request-call-back') }}" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Request Call Back"><span class="material-symbols-outlined">mail</span></a>
        <a href="https://maps.app.goo.gl/LbQLLg6pd3b1VPPGA" target="_blank"" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Location"><span class="material-symbols-outlined">location_on</span></a>
    </div>

    <script>
        document.getElementById('nav-toggle')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu?.classList.toggle('hidden');
        });

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
    </script>
</body>

</html>
