<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Tri State Signs & Awnings</title>
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
        <section class="hero-bg text-text-light pt-20">
            <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-36">
                <div class="text-center max-w-4xl mx-auto space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display font-bold leading-tight">
                        Contact Us
                    </h1>
                    <p class="text-xl sm:text-2xl text-white/90 max-w-3xl mx-auto">
                        Get in Touch with Tri State Signs & Awnings
                    </p>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="bg-white py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                    <!-- Contact Form -->
                    <div class="bg-gray-50 rounded-xl p-8 sm:p-10 shadow-lg">
                        <h2 class="text-3xl font-display font-bold text-ink mb-4">Send us a message</h2>
                        <p class="text-gray-600 mb-6">Please fill out this short form, and we'll contact you shortly.</p>
                        <form class="space-y-5" id="contactForm">
                            <div>
                                <label for="contact-name" class="block text-sm font-semibold text-ink mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="contact-name" name="name" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-xl text-ink placeholder-gray-400 focus:ring-2 focus:ring-accent focus:border-accent transition-all duration-300 px-4 py-3"
                                    placeholder="Your full name" />
                            </div>
                            <div>
                                <label for="contact-phone" class="block text-sm font-semibold text-ink mb-2">
                                    Phone <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="contact-phone" name="phone" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-xl text-ink placeholder-gray-400 focus:ring-2 focus:ring-accent focus:border-accent transition-all duration-300 px-4 py-3"
                                    placeholder="(555) 123-4567" />
                            </div>
                            <div>
                                <label for="contact-email" class="block text-sm font-semibold text-ink mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="contact-email" name="email" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-xl text-ink placeholder-gray-400 focus:ring-2 focus:ring-accent focus:border-accent transition-all duration-300 px-4 py-3"
                                    placeholder="your.email@example.com" />
                            </div>
                            <div>
                                <label for="contact-message" class="block text-sm font-semibold text-ink mb-2">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea id="contact-message" name="message" rows="6" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-xl text-ink placeholder-gray-400 focus:ring-2 focus:ring-accent focus:border-accent transition-all duration-300 px-4 py-3 resize-none"
                                    placeholder="Tell us about your project..."></textarea>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <span class="material-symbols-outlined text-accent text-sm">security</span>
                                <span>This site is protected by reCAPTCHA.</span>
                            </div>
                            <button type="submit"
                                class="w-full btn-accent text-white font-bold py-4 rounded-xl transform hover:scale-[1.02] transition-all duration-300 shadow-lg text-lg">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-3xl font-display font-bold text-ink mb-6">Contact Information</h2>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                                        <span class="material-symbols-outlined text-accent text-2xl">business</span>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-ink mb-1">Tri State Signs & Awnings</h3>
                                        <p class="text-gray-600">333 Wyandanch Avenue</p>
                                        <p class="text-gray-600">West Babylon, NY 11704</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                                        <span class="material-symbols-outlined text-accent text-2xl">phone</span>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-ink mb-1">Phone</h3>
                                        <a href="tel:7187050333" class="text-accent hover:underline text-lg font-semibold">(718) 705-0333</a>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                                        <span class="material-symbols-outlined text-accent text-2xl">schedule</span>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-ink mb-1">Business Hours</h3>
                                        <p class="text-gray-600">Mon - Fri: 8:00 am - 5:00 pm</p>
                                        <p class="text-gray-600">Sat - Sun: Closed</p>
                                        <p class="text-accent font-semibold mt-2">Same-Day Appointments Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Area -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-display font-bold text-ink mb-4">Service Area</h3>
                            <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                                <div>✓ Hoboken, NJ</div>
                                <div>✓ Jersey City, NJ</div>
                                <div>✓ New Jersey</div>
                                <div>✓ Connecticut</div>
                                <div>✓ Union City, NJ</div>
                                <div>✓ Great Neck, NY</div>
                                <div>✓ New York, NY</div>
                                <div>✓ Northport, NY</div>
                                <div>✓ Nassau County, NY</div>
                                <div>✓ Suffolk County, NY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP SECTION -->
        <section class="bg-gray-50 py-16 sm:py-20 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-display font-bold text-ink mb-8 text-center">Find Us</h2>
                <div class="relative w-full aspect-video rounded-lg overflow-hidden shadow-2xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.4841963418253!2d-73.35318614490798!3d40.74133106263205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28150b289a2e1%3A0x9f55f2d3a5aecee6!2sTri%20State%20Signs%20%26%20Awnings!5e1!3m2!1ses!2ssv!4v1765501259497!5m2!1ses!2ssv"
                        class="absolute inset-0 w-full h-full border-0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>

        {{-- section video --}}
        {{-- <section class="py-16 sm:py-20 lg:py-24 bg-gray-100">
            <div class="max-w-[80rem] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                    <div class="lg:w-1/2 text-center lg:text-left">
                        <h2
                            class="text-2xl sm:text-3xl lg:text-4xl font-display font-bold text-ink mb-4">
                            Learn More About Tri State Signs &amp; Awnings
                        </h2>
                        <p
                            class="text-gray-600 mb-6 sm:mb-8 text-sm sm:text-base lg:text-lg">
                            Located in West Babylon, NY, Tri State Signs &amp; Awnings specializes in signs, awnings,
                            and LED
                            displays. 40+ years of trusted experience. Five-year sign warranty. With same-day
                            appointments, call for
                            your free estimate!
                        </p>
                        <a class="inline-flex items-center btn-accent text-white font-bold px-6 sm:px-8 py-2.5 sm:py-3 rounded-xl hover:shadow-lg transition-all duration-300 shadow-md text-sm sm:text-base"
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
    <div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-hidden="true">
        <div id="modalBackdrop" class="fixed inset-0 bg-ink/80 backdrop-blur-sm"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full border border-gray-200">
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <h2 id="reviewModalLabel" class="font-display text-2xl text-ink">Write a Review</h2>
                    <button id="closeReviewModal" type="button" class="p-2 rounded-lg text-gray-400 hover:bg-gray-100 hover:text-ink"><span class="material-symbols-outlined">close</span></button>
                </div>
                <div class="p-6">
                    <form id="reviewForm" action="{{ route('reviews.storePublic') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="reviewerName" class="block text-sm font-semibold text-ink mb-2">Your Name</label>
                            <input type="text" id="reviewerName" name="name" required placeholder="Enter your name" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-accent focus:border-accent outline-none" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-ink mb-2">Rating</label>
                            <div class="flex gap-1" id="ratingStars">
                                <button type="button" class="rating-star text-gray-300 hover:text-accent p-1" data-rating="1"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-accent p-1" data-rating="2"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-accent p-1" data-rating="3"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-accent p-1" data-rating="4"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-accent p-1" data-rating="5"><span class="material-symbols-outlined text-2xl">star</span></button>
                            </div>
                            <input type="hidden" id="reviewRating" name="rating" value="0" required />
                        </div>
                        <div class="mb-4">
                            <label for="review" class="block text-sm font-semibold text-ink mb-2">Your Review</label>
                            <textarea id="review" name="review" rows="4" required placeholder="Share your experience..." class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-accent focus:border-accent outline-none resize-none"></textarea>
                        </div>
                    </form>
                </div>
                <div class="flex justify-end gap-3 p-6 border-t border-gray-200">
                    <button id="cancelReviewModal" type="button" class="px-4 py-2.5 rounded-xl font-semibold text-ink bg-gray-100 hover:bg-gray-200">Cancel</button>
                    <button id="submitReview" type="button" class="px-4 py-2.5 rounded-xl font-semibold text-white btn-accent">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating sidebar -->
    <div class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col bg-ink/95 backdrop-blur rounded-l-2xl shadow-xl border border-white/10 z-40 overflow-hidden">
        <a href="tel:7187050333" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Call"><span class="material-symbols-outlined">call</span></a>
        <a href="{{ url('/reviews') }}" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Reviews"><span class="material-symbols-outlined">star</span></a>
        <a href="{{ url('request-call-back') }}" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Request Call Back"><span class="material-symbols-outlined">mail</span></a>
        <a href="https://maps.app.goo.gl/LbQLLg6pd3b1VPPGA" target="_blank"" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Location"><span class="material-symbols-outlined">location_on</span></a>
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

    <script>
        document.getElementById('nav-toggle')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu?.classList.toggle('hidden');
        });

        const reviewModal = document.getElementById('reviewModal');
        const openBtn = document.getElementById('openReviewModal');
        const closeBtn = document.getElementById('closeReviewModal');
        const cancelBtn = document.getElementById('cancelReviewModal');
        const backdrop = document.getElementById('modalBackdrop');
        const stars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('reviewRating');
        let selectedRating = 0;

        openBtn?.addEventListener('click', () => { reviewModal?.classList.remove('hidden'); document.body.style.overflow = 'hidden'; });
        const closeModal = () => { reviewModal?.classList.add('hidden'); document.body.style.overflow = ''; document.getElementById('reviewForm')?.reset(); selectedRating = 0; ratingInput.value = '0'; stars.forEach(s => { s.querySelector('span').style.fontVariationSettings = "'FILL' 0"; s.classList.remove('text-accent'); s.classList.add('text-gray-300'); }); };
        closeBtn?.addEventListener('click', closeModal);
        cancelBtn?.addEventListener('click', closeModal);
        backdrop?.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape' && !reviewModal?.classList.contains('hidden')) closeModal(); });

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const r = parseInt(star.getAttribute('data-rating'));
                selectedRating = r; ratingInput.value = r;
                stars.forEach((s, i) => { const icon = s.querySelector('span'); icon.style.fontVariationSettings = i < r ? "'FILL' 1" : "'FILL' 0"; s.classList.toggle('text-accent', i < r); s.classList.toggle('text-gray-300', i >= r); });
            });
            star.addEventListener('mouseenter', () => { const r = parseInt(star.getAttribute('data-rating')); stars.forEach((s, i) => s.classList.toggle('text-accent', i < r)); });
            star.addEventListener('mouseleave', () => { stars.forEach((s, i) => { if (selectedRating === 0) s.classList.remove('text-accent'), s.classList.add('text-gray-300'); else if (i >= selectedRating) s.classList.remove('text-accent'), s.classList.add('text-gray-300'); }); });
        });

        document.getElementById('submitReview')?.addEventListener('click', () => {
            const f = document.getElementById('reviewForm'); const d = new FormData(f);
            if (!d.get('name') || ratingInput.value === '0' || !d.get('review')) { alert('Please fill all fields and select a rating.'); return; }
            alert('Thank you for your review!'); closeModal();
        });

        // Image Lightbox Modal Functionality
        const imageModal = document.getElementById('imageModal');
        const imageModalBackdrop = document.getElementById('imageModalBackdrop');
        const closeImageModalBtn = document.getElementById('closeImageModal');
        const modalImage = document.getElementById('modalImage');
        const modalImageAlt = document.getElementById('modalImageAlt');

        function openImageModal(imageSrc, imageAlt) {
            if (imageModal && modalImage && modalImageAlt) {
                modalImage.src = imageSrc;
                modalImageAlt.textContent = imageAlt;
                imageModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeImageModal() {
            if (imageModal) {
                imageModal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        if (closeImageModalBtn) {
            closeImageModalBtn.addEventListener('click', closeImageModal);
        }

        if (imageModalBackdrop) {
            imageModalBackdrop.addEventListener('click', closeImageModal);
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && imageModal && !imageModal.classList.contains('hidden')) {
                closeImageModal();
            }
        });

        function updateBusinessStatus() {
            const el = document.getElementById('businessStatus'); if (!el) return;
            const now = new Date(), m = now.getHours() * 60 + now.getMinutes();
            const open = 8 * 60, closing = 16 * 60, closed = 17 * 60;
            el.classList.remove('text-green-400', 'text-amber-400', 'text-red-400');
            if (m >= open && m < closing) { el.textContent = 'Open'; el.classList.add('text-green-400'); }
            else if (m >= closing && m < closed) { el.textContent = 'Closing Soon'; el.classList.add('text-amber-400'); }
            else { el.textContent = 'Closed'; el.classList.add('text-red-400'); }
        }
        updateBusinessStatus();
        setInterval(updateBusinessStatus, 60000);
    </script>
</body>

</html>
