<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tri State Signs & Awnings | Custom Signs West Babylon, NY</title>
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
        .font-display { font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.02em; }
        .hero-pattern { background-image: radial-gradient(circle at 20% 50%, rgba(110,187,28,0.08) 0%, transparent 50%); }
        .clip-wedge { clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
        .clip-wedge-inv { clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%); }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15); }
        .btn-accent { background: linear-gradient(135deg, #6ebb1c 0%, #5a9516 100%); }
        .btn-accent:hover { background: linear-gradient(135deg, #8dd43a 0%, #6ebb1c 100%); }
        .nav-blur { backdrop-filter: blur(12px); background: rgba(15,23,42,0.85); }
    </style>
</head>
<body class="font-sans text-ink bg-white antialiased">
    <!-- Header: minimal, sticky -->
    <header class="fixed top-0 left-0 right-0 z-50 nav-blur border-b border-white/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="Tri State Signs & Awnings" class="h-9 sm:h-10 w-auto" />
                </a>
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ url('/') }}" class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Home</a>
                    <div class="relative group">
                        <button class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
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
                        <button class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
                            Awning Services <span class="material-symbols-outlined text-base">expand_more</span>
                        </button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-inklight rounded-xl shadow-xl py-2 min-w-[200px] border border-white/10">
                                <a href="{{ url('/commercial-awnings') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Commercial Awnings</a>
                                <a href="{{ url('/residential-awnings') }}" class="block px-4 py-2.5 text-white/80 hover:text-accent hover:bg-white/5 text-sm">Residential Awnings</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/installations') }}" class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Installations</a>
                    <a href="{{ url('/led-displays') }}" class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">LED Displays</a>
                    <a href="{{ url('/permits') }}" class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all">Permits</a>
                    <div class="relative group">
                        <button class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
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
                        <button class="px-4 py-2 text-white/90 hover:text-accent font-medium text-sm rounded-lg hover:bg-white/5 transition-all flex items-center gap-1">
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
                    <a href="tel:7187050333" class="hidden sm:flex items-center gap-2 text-white/90 hover:text-accent text-sm font-semibold">
                        <span class="material-symbols-outlined text-lg">call</span> (718) 705-0333
                    </a>
                    <a href="{{ url('/request-call-back') }}" class="btn-accent text-white font-semibold px-5 py-2.5 rounded-xl text-sm shadow-lg hover:shadow-accent/25 transition-all">
                        Request Call Back
                    </a>
                    <button id="nav-toggle" class="lg:hidden p-2 rounded-lg text-white hover:bg-white/10" aria-label="Menu">
                        <span class="material-symbols-outlined text-2xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="lg:hidden hidden border-t border-white/10 bg-ink/98 backdrop-blur">
            <nav class="max-w-6xl mx-auto px-4 py-4 space-y-1">
                <a href="{{ url('/') }}" class="block py-2.5 text-white/90 hover:text-accent">Home</a>
                <a href="{{ url('/exterior-signs') }}" class="block py-2.5 text-white/90 hover:text-accent">Exterior Signs</a>
                <a href="{{ url('/interior-signs') }}" class="block py-2.5 text-white/90 hover:text-accent">Interior Signs</a>
                <a href="{{ url('/commercial-awnings') }}" class="block py-2.5 text-white/90 hover:text-accent">Commercial Awnings</a>
                <a href="{{ url('/residential-awnings') }}" class="block py-2.5 text-white/90 hover:text-accent">Residential Awnings</a>
                <a href="{{ url('/installations') }}" class="block py-2.5 text-white/90 hover:text-accent">Installations</a>
                <a href="{{ url('/led-displays') }}" class="block py-2.5 text-white/90 hover:text-accent">LED Displays</a>
                <a href="{{ url('/permits') }}" class="block py-2.5 text-white/90 hover:text-accent">Permits</a>
                <a href="{{ url('/gallery') }}" class="block py-2.5 text-white/90 hover:text-accent">Gallery</a>
                <a href="{{ url('/reviews') }}" class="block py-2.5 text-white/90 hover:text-accent">Reviews</a>
                <a href="{{ url('/blog') }}" class="block py-2.5 text-white/90 hover:text-accent">Blog</a>
                <a href="{{ url('/faqs') }}" class="block py-2.5 text-white/90 hover:text-accent">FAQs</a>
                <a href="{{ url('/request-call-back') }}" class="block py-2.5 text-white/90 hover:text-accent">Request Call Back</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero: full-viewport, bold typography -->
        <section class="relative min-h-screen flex items-center bg-ink hero-pattern pt-20">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-30" style="background-image: url('{{ asset('img/1.webp') }}');"></div>
            <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
                <div class="max-w-4xl">
                    <p class="text-accent font-semibold text-sm sm:text-base uppercase tracking-widest mb-4">West Babylon, NY • 40+ Years</p>
                    <h1 class="font-display text-5xl sm:text-6xl md:text-7xl lg:text-8xl text-white leading-[0.95] mb-6">
                        Custom Signs &amp; Awnings That Have Drawn A Crowd
                    </h1>
                    <p class="text-lg sm:text-xl text-white/70 max-w-2xl mb-10">
                        Your local one-stop shop for signage needs. Five-year warranty, impossible deadlines? No problem.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('/request-call-back') }}" class="btn-accent text-white font-bold px-8 py-4 rounded-xl text-lg shadow-xl hover:shadow-2xl transition-all inline-flex items-center gap-2">
                            Get In Touch <span class="material-symbols-outlined text-xl">arrow_forward</span>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="border-2 border-white/40 text-white font-bold px-8 py-4 rounded-xl text-lg hover:bg-white/10 hover:border-white/60 transition-all">
                            Let's Get Started
                        </a>
                    </div>
                    <p class="mt-6 text-white/60 text-sm">Free custom banner included with your exterior signage/awning order!</p>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
        </section>

        <!-- Top bar: ratings, location, CTA -->
        <div class="bg-ink text-white py-3 px-4">
            <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3 text-sm">
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="flex text-accent"><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span></span>
                        <span class="font-bold">5.0</span>
                        <a href="{{ url('/reviews') }}" class="text-white/70 hover:text-accent underline">(4 Ratings)</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-accent">location_on</span>
                        <span>333 Wyandanch Ave, West Babylon, NY</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/request-call-back') }}" class="text-accent font-bold hover:underline">Request Call Back</a>
                    <a href="tel:7187050333" class="font-bold">(718) 705-0333</a>
                </div>
            </div>
        </div>


        <!-- Our Quality -->
        <section class="py-16 sm:py-24 bg-cream">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-display text-4xl sm:text-5xl text-ink mb-2">It's all about</h2>
                <h3 class="font-display text-4xl sm:text-5xl lg:text-6xl text-accent mb-6">Our Quality</h3>
                <p class="text-ink/70 text-lg leading-relaxed mb-8">
                    Noted for custom signs with durability and value. Tri State Signs &amp; Awnings uses only the highest quality materials and processes. As a registered manufacturer with Underwriters Laboratories, we produce the safest fixtures that adhere to the strictest codes and standards.
                </p>
                <span class="inline-block bg-ink text-white font-bold px-8 py-3 rounded-xl text-lg">UL Listed</span>
            </div>
        </section>

       <!-- Testimonials -->
       <section class="py-16 sm:py-24 bg-gradient-to-b from-ink to-inklight text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-4xl sm:text-5xl mb-4">Ask About Our In-House Permit Expeditor</h2>
                <p class="text-white/70 max-w-2xl mx-auto mb-6">Trusted by top national brands for design, fabrication & installation.</p>
                <button id="openReviewModal" class="btn-accent text-white font-bold px-6 py-3 rounded-xl inline-flex items-center gap-2">
                    <span class="material-symbols-outlined">rate_review</span> Write a Review
                </button>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                @if(isset($reviews) && $reviews->count() > 0)
                    @foreach($reviews->take(2) as $review)
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8 backdrop-blur">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="font-bold text-lg">{{ $review->name }}</h3>
                                    <p class="text-white/50 text-sm">{{ $review->created_at->format('n/j/Y') }}</p>
                                </div>
                                <div class="flex text-accent">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="material-symbols-outlined" style="font-variation-settings:'FILL' {{ $i <= $review->rating ? 1 : 0 }}">star</span>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-white/80 leading-relaxed">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-2 text-center py-8">
                        <p class="text-white/50">No reviews available at this time.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
        <!-- West Babylon + Request Call Back: asymmetric -->
        <section class="py-16 sm:py-24 lg:py-32 bg-white overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">
                    <div class="lg:col-span-3">
                        <p class="text-accent font-semibold text-sm uppercase tracking-widest mb-3">Serving the Tri-State Area</p>
                        <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl text-ink leading-tight mb-6">
                            Custom Signs in West Babylon, NY and Surrounding Areas
                        </h2>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3"><span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center"><span class="material-symbols-outlined text-accent text-lg">check</span></span> Five-Year Sign Warranty</li>
                            <li class="flex items-center gap-3"><span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center"><span class="material-symbols-outlined text-accent text-lg">check</span></span> Impossible Deadlines? No Problem—We Deliver</li>
                            <li class="flex items-center gap-3"><span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center"><span class="material-symbols-outlined text-accent text-lg">check</span></span> Over 40 Years Of Trusted Experience</li>
                            <li class="flex items-center gap-3"><span class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center"><span class="material-symbols-outlined text-accent text-lg">check</span></span> Your Local One-stop Shop For All Signage Needs</li>
                        </ul>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="tel:7187050333" class="font-display text-3xl sm:text-4xl text-ink hover:text-accent transition-colors">(718) 705-0333</a>
                            <p class="text-ink/60 text-sm">Hours: <span id="businessStatus" class="font-semibold">Loading...</span> • Opens 8:00 am</p>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="bg-ink rounded-3xl p-8 shadow-2xl text-white">
                            <h3 class="font-display text-2xl sm:text-3xl mb-6 text-center">Request a Call Back</h3>
                            <form class="space-y-4">
                                <input type="text" placeholder="Full Name*" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all" />
                                <input type="tel" placeholder="Phone*" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all" />
                                <input type="email" placeholder="Email*" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all" />
                                <select class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all">
                                    <option value="" class="text-ink">Service*</option>
                                    <option>Sign Services</option>
                                    <option>Awning Services</option>
                                    <option>Installation</option>
                                </select>
                                <p class="text-white/50 text-xs text-center">This site is protected by reCAPTCHA.</p>
                                <button type="submit" class="w-full btn-accent text-white font-bold py-3.5 rounded-xl hover:shadow-lg transition-all">Request Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nationwide: Design / Fabrication / Installation -->
        <section class="py-16 sm:py-24 bg-ink text-white clip-wedge">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
                <div class="text-center mb-14">
                    <h2 class="font-display text-4xl sm:text-5xl mb-4">Nationwide Service</h2>
                    <p class="text-white/70 max-w-2xl mx-auto text-lg">Tri State Signs &amp; Awnings is trusted by top national brands for superior design, fabrication and installation.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center  w-60 h-20 rounded-2xl bg-accent/20 text-accent font-display text-3xl mb-6 group-hover:bg-accent group-hover:text-white transition-all">
                            <img src="{{ asset('img/interior/int1.JPG') }}" alt="Design" class="w-full h-48 object-cover" style="border-radius: 1rem;">
                        </div>
                        <h3 class="font-display text-2xl mb-3">Design</h3>
                        <p class="text-white/70">Custom designed signs with the support of our expert staff.</p>
                    </div>
                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center w-60 h-20 rounded-2xl bg-accent/20 text-accent font-display text-3xl mb-6 group-hover:bg-accent group-hover:text-white transition-all">
                            <img src="{{ asset('img/exterior/ext9.JPG') }}" alt="Design" class="w-full h-48 object-cover" style="border-radius: 1rem;">
                        </div>
                        <h3 class="font-display text-2xl mb-3">Fabrication</h3>
                        <p class="text-white/70">We build signs to last with the finest quality materials.</p>
                    </div>
                    <div class="text-center group">
                        <div class="inline-flex items-center justify-center w-60 h-20 rounded-2xl bg-accent/20 text-accent font-display text-3xl mb-6 group-hover:bg-accent group-hover:text-white transition-all">
                            <img src="{{ asset('img/exterior/ext2.JPG') }}" alt="Design" class="w-full h-48 object-cover" style="border-radius: 1rem;">
                        </div>
                        <h3 class="font-display text-2xl mb-3">Installation</h3>
                        <p class="text-white/70">Fully equipped technicians for quality on-site installs.</p>
                    </div>
                </div>
                <div class="text-center mt-14">
                    <a href="tel:7187050333" class="btn-accent text-white font-bold px-10 py-4 rounded-xl text-lg inline-flex items-center gap-2 shadow-xl">
                        <span class="material-symbols-outlined">call</span> Call Today For An Estimate!
                    </a>
                </div>
            </div>
        </section>


        <!-- Our Work: bento grid -->
        <section class="py-16 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <h2 class="font-display text-4xl sm:text-5xl text-ink mb-4">Our Work</h2>
                    <p class="text-ink/70 max-w-2xl mx-auto text-lg">We help businesses create innovative solutions to improve and advertise. Our goal is growth, profitability and the best service possible.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <a href="{{ url('/commercial-awnings') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            {{-- <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">storefront</span> --}}
                            <img src="{{ asset('img/5.jpg') }}" alt="Awnings &amp; Canopies" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">Awnings &amp; Canopies</h3>
                            <p class="text-white/70 text-sm">Commercial &amp; residential</p>
                        </div>
                    </a>
                    <a href="{{ url('/exterior-signs') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            {{-- <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">text_fields</span> --}}
                            <img src="{{ asset('img/3.jpg') }}" alt="Awnings &amp; Canopies" class="w-full h-full object-cover">

                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">Channel Letters</h3>
                            <p class="text-white/70 text-sm">Exterior signage</p>
                        </div>
                    </a>
                    <a href="{{ url('/installations') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            {{-- <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">construction</span> --}}
                            <img src="{{ asset('img/exterior/ext4.jpg') }}" alt="Awnings &amp; Canopies" class="w-full h-full object-cover">

                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">Sign Installations</h3>
                            <p class="text-white/70 text-sm">Professional installs</p>
                        </div>
                    </a>
                    <a href="{{ url('/led-displays') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            {{-- <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">desktop_windows</span> --}}
                            <img src="{{ asset('img/8.jpg') }}" alt="Awnings &amp; Canopies" class="w-full h-full object-cover">

                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">LED Displays</h3>
                            <p class="text-white/70 text-sm">Digital signage</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="py-16 sm:py-20 bg-accent">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-3 gap-8 text-center text-white">
                    <div>
                        <div class="font-display text-5xl sm:text-6xl lg:text-7xl mb-2">1000+</div>
                        <p class="font-semibold text-lg opacity-90">Signs</p>
                    </div>
                    <div>
                        <div class="font-display text-5xl sm:text-6xl lg:text-7xl mb-2">500+</div>
                        <p class="font-semibold text-lg opacity-90">Installations</p>
                    </div>
                    <div>
                        <div class="font-display text-5xl sm:text-6xl lg:text-7xl mb-2">100%</div>
                        <p class="font-semibold text-lg opacity-90">Customer Satisfaction</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Watch The Pros + 3 cards -->
        <section class="py-16 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <h2 class="font-display text-4xl sm:text-5xl text-ink mb-4">Watch The Pros at Tri State Signs &amp; Awnings</h2>
                    <p class="text-ink/70 max-w-2xl mx-auto text-lg">From design and fabrication to installation and service, we're here for you. We pride ourselves on the best possible experience.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="{{ url('contact-us') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">storefront</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">Same-Day Appointments</h3>
                            <p class="text-white/70 text-sm">We offer same-day appointments for consultations and assessments.</p>
                        </div>
                    </a>
                    <a href="{{ url('contact-us') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">text_fields</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">Concierge-Level Service</h3>
                            <p class="text-white/70 text-sm">Personal attention and expert guidance from consultation to installation.</p>
                        </div>
                    </a>
                    <a href="{{ url('contact-us') }}" class="card-hover rounded-2xl overflow-hidden bg-ink text-white group">
                        <div class="h-40 bg-gradient-to-br from-inklight to-accent/80 flex items-center justify-center">
                            <span class="material-symbols-outlined text-6xl opacity-80 group-hover:scale-110 transition-transform">desktop_windows</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-xl mb-1 group-hover:text-accent transition-colors">UL Listed</h3>
                            <p class="text-white/70 text-sm">Safety and quality in every product, adhering to industry standards.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- GET A FAST QUOTE -->
        <section class="py-16 sm:py-24 bg-ink text-white clip-wedge-inv">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
                <div class="bg-inklight rounded-3xl p-8 sm:p-10 border border-white/10">
                    <div class="text-center mb-8">
                        <h2 class="font-display text-3xl sm:text-4xl mb-2">GET A FAST QUOTE</h2>
                        <p class="text-white/70 mb-4">Get in Touch and Upload Your Ideas (optional)</p>
                        <div class="text-sm text-white/60 space-y-1">
                            <p><strong class="text-white/80">Email:</strong> info@tristatesigns.com</p>
                            <p><strong class="text-white/80">Phone:</strong> <a href="tel:7187050333" class="text-accent hover:underline">(718) 705-0333</a></p>
                            <p><strong class="text-white/80">Office:</strong> 333 Wyandanch Ave, West Babylon, NY 11704</p>
                            <p>Mon–Fri 8am–5pm | Sat–Sun Closed</p>
                        </div>
                    </div>
                    <form id="quoteForm" class="space-y-4">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <input type="text" id="quote-name" name="name" required placeholder="Name *" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none" />
                            <input type="email" id="quote-email" name="email" required placeholder="Email *" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none" />
                        </div>
                        <input type="tel" id="quote-phone" name="phone" required placeholder="Phone *" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none" />
                        <input type="text" id="quote-address" name="address" required placeholder="Address *" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none" />
                        <input type="text" id="quote-city" name="city" required placeholder="City, State ZIP *" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none" />
                        <textarea id="quote-info" name="info" rows="3" placeholder="Tell us about your project..." class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-2 focus:ring-accent outline-none resize-none"></textarea>
                        <div>
                            <label class="block text-sm text-white/70 mb-2">Upload Your Ideas (optional)</label>
                            <input type="file" id="quote-file" name="file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-accent file:text-white file:font-semibold" />
                            <p class="text-white/50 text-xs mt-1">jpg, jpeg, png, pdf, heic — max 10 MB</p>
                        </div>
                        <p class="flex items-center gap-2 text-white/50 text-sm"><span class="material-symbols-outlined text-accent">security</span> reCAPTCHA &amp; Google Privacy Policy apply.</p>
                        <button type="submit" class="w-full btn-accent text-white font-bold py-4 rounded-xl text-lg">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </section>


    </main>

    <!-- Footer -->
    <footer class="bg-ink text-white py-16 sm:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <a href="#" class="p-3 text-white/80 hover:text-accent hover:bg-white/5 transition-all" title="Location"><span class="material-symbols-outlined">location_on</span></a>
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

        // Public Review Form Rating Stars
        const publicRatingStars = document.querySelectorAll('.public-rating-star');
        const publicRatingInput = document.getElementById('public_rating');
        let publicSelectedRating = 0;

        if (publicRatingStars.length > 0) {
            publicRatingStars.forEach(star => {
                star.addEventListener('click', () => {
                    const rating = parseInt(star.getAttribute('data-rating'));
                    publicSelectedRating = rating;
                    publicRatingInput.value = rating;

                    // Update star display
                    publicRatingStars.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.remove('text-gray-300');
                            s.classList.add('text-yellow-400');
                        } else {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-300');
                        }
                    });
                });

                // Hover effect
                star.addEventListener('mouseenter', () => {
                    const rating = parseInt(star.getAttribute('data-rating'));
                    publicRatingStars.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.add('text-yellow-400');
                            s.classList.remove('text-gray-300');
                        }
                    });
                });

                star.addEventListener('mouseleave', () => {
                    if (publicSelectedRating === 0) {
                        publicRatingStars.forEach(s => {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-300');
                        });
                    } else {
                        publicRatingStars.forEach((s, index) => {
                            if (index >= publicSelectedRating) {
                                s.classList.remove('text-yellow-400');
                                s.classList.add('text-gray-300');
                            }
                        });
                    }
                });
            });

            // Initialize with old rating if exists
            @if(old('rating'))
                const oldRating = {{ old('rating') }};
                if (oldRating > 0) {
                    publicRatingStars.forEach((s, index) => {
                        if (index < oldRating) {
                            s.classList.remove('text-gray-300');
                            s.classList.add('text-yellow-400');
                        }
                    });
                    publicSelectedRating = oldRating;
                    publicRatingInput.value = oldRating;
                }
            @endif
        }
    </script>
</body>
</html>
