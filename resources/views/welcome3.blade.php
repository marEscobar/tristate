<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tri State Signs & Awnings | Custom Signs West Babylon, NY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#003d64', light: '#005285', dark: '#002a45' },
                        coral: '#ea580c',
                        amber: '#f59e0b',
                        violet: '#8b5cf6',
                        slate: { 100: '#f1f5f9', 200: '#e2e8f0', 400: '#94a3b8', 600: '#475569', 700: '#334155', 800: '#1e293b' },
                    },
                    fontFamily: {
                        display: ['Archivo Black', 'sans-serif'],
                        sans: ['DM Sans', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .clip-diag { clip-path: polygon(0 0, 100% 0, 100% 94%, 0 100%); }
        .clip-diag-inv { clip-path: polygon(0 6%, 100% 0, 100% 100%, 0 100%); }
        .marquee { animation: marquee 25s linear infinite; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .card-lift { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .card-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2); }
        .timeline-dot { width: 14px; height: 14px; border-radius: 50%; flex-shrink: 0; }
    </style>
</head>
<body class="font-sans text-gray-900 bg-white antialiased">
    <!-- Top bar: solid -->
    <div class="bg-primary-dark text-white py-2.5 border-b border-white/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 text-sm">
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <div class="flex items-center gap-1.5">
                    <span class="flex text-amber-300">
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                    </span>
                    <span class="font-bold">5.0</span>
                    <a href="{{ url('/reviews') }}" class="text-white/80 hover:text-white underline">(4 Ratings)</a>
                </div>
                <div class="flex items-center gap-2 text-white/90">
                    <span class="material-symbols-outlined text-white/70 text-base">location_on</span>
                    <span>333 Wyandanch Ave, West Babylon, NY</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/request-call-back') }}" class="text-white font-bold hover:underline">Request Call Back</a>
                <a href="tel:7187050333" class="font-bold">(718) 705-0333</a>
            </div>
        </div>
    </div>

    <!-- Nav: primary-dark, compact -->
    <header class="sticky top-0 z-50 bg-primary-dark border-b border-white/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-14">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Tri State Signs & Awnings" class="h-8 w-auto brightness-0 invert" /></a>
                <nav class="hidden lg:flex items-center gap-0.5">
                    <a href="{{ url('/') }}" class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5">Home</a>
                    <div class="relative group">
                        <button class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5 flex items-center gap-0.5">Sign Services <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-0.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-slate-800 border border-white/10 rounded-xl py-2 min-w-[180px] shadow-xl">
                                <a href="{{ url('/exterior-signs') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Exterior Signs</a>
                                <a href="{{ url('/interior-signs') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Interior Signs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5 flex items-center gap-0.5">Awning Services <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-0.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-slate-800 border border-white/10 rounded-xl py-2 min-w-[180px] shadow-xl">
                                <a href="{{ url('/commercial-awnings') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Commercial Awnings</a>
                                <a href="{{ url('/residential-awnings') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Residential Awnings</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/installations') }}" class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5">Installations</a>
                    <a href="{{ url('/led-displays') }}" class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5">LED Displays</a>
                    <a href="{{ url('/permits') }}" class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5">Permits</a>
                    <div class="relative group">
                        <button class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5 flex items-center gap-0.5">About <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-0.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-slate-800 border border-white/10 rounded-xl py-2 min-w-[180px] shadow-xl">
                                <a href="{{ url('/gallery') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Gallery</a>
                                <a href="{{ url('/reviews') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Reviews</a>
                                <a href="{{ url('/blog') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Blog</a>
                                <a href="{{ url('/faqs') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">FAQs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="px-3 py-2.5 text-white/80 hover:text-white font-medium text-sm rounded-lg hover:bg-white/5 flex items-center gap-0.5">Contact <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-0.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-slate-800 border border-white/10 rounded-xl py-2 min-w-[180px] shadow-xl">
                                <a href="{{ url('/request-call-back') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 text-sm rounded-lg mx-1">Request Call Back</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="flex items-center gap-3">
                    <a href="{{ url('/request-call-back') }}" class="bg-coral text-white font-bold px-4 py-2 rounded-lg text-sm hover:bg-coral/90 transition-colors">Request Call Back</a>
                    <button id="nav-toggle" class="lg:hidden p-2 rounded-lg text-white hover:bg-white/10" aria-label="Menu"><span class="material-symbols-outlined text-2xl">menu</span></button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="lg:hidden hidden border-t border-white/10 bg-primary-dark">
            <nav class="max-w-6xl mx-auto px-4 py-4 space-y-0.5">
                <a href="{{ url('/') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Home</a>
                <a href="{{ url('/exterior-signs') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Exterior Signs</a>
                <a href="{{ url('/interior-signs') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Interior Signs</a>
                <a href="{{ url('/commercial-awnings') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Commercial Awnings</a>
                <a href="{{ url('/residential-awnings') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Residential Awnings</a>
                <a href="{{ url('/installations') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Installations</a>
                <a href="{{ url('/led-displays') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">LED Displays</a>
                <a href="{{ url('/permits') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Permits</a>
                <a href="{{ url('/gallery') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Gallery</a>
                <a href="{{ url('/reviews') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Reviews</a>
                <a href="{{ url('/blog') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Blog</a>
                <a href="{{ url('/faqs') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">FAQs</a>
                <a href="{{ url('/request-call-back') }}" class="block py-2.5 px-3 text-white/80 hover:text-white rounded-lg">Request Call Back</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO: diagonal split – solid primary left, image right -->
        <section class="relative min-h-[85vh] flex flex-col lg:flex-row clip-diag overflow-hidden">
            <div class="flex-1 flex items-center bg-primary p-8 sm:p-12 lg:p-16 order-2 lg:order-1">
                <div class="max-w-xl">
                    <p class="text-amber-300 font-bold text-sm uppercase tracking-widest mb-3">West Babylon, NY • 40+ Years</p>
                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white leading-[1.05] mb-5">
                        Custom Signs &amp; Awnings That Have Drawn A Crowd
                    </h1>
                    <p class="text-white/85 text-lg mb-8">
                        Your local one-stop shop. Five-year warranty, impossible deadlines? No problem—we deliver.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-4">
                        <a href="{{ url('/request-call-back') }}" class="inline-flex items-center gap-2 bg-white text-primary font-bold px-6 py-3.5 rounded-xl hover:bg-slate-100 transition-colors">
                            Get In Touch <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="inline-flex items-center gap-2 border-2 border-white/60 text-white font-bold px-6 py-3.5 rounded-xl hover:bg-white/10 transition-colors">
                            Let's Get Started
                        </a>
                    </div>
                    <p class="text-white/70 text-sm">Free custom banner with exterior signage/awning orders!</p>
                </div>
            </div>
            <div class="flex-1 min-h-[40vh] lg:min-h-[85vh] order-1 lg:order-2 bg-cover bg-center" style="background-image: url('{{ asset('img/1.webp') }}');"></div>
        </section>

        <!-- PERMIT: marquee strip – clients in colored pills (no aqua) -->
        <section class="py-8 bg-slate-100 border-y border-slate-200 overflow-hidden">
            <div class="text-center mb-6">
                <h2 class="font-display text-2xl sm:text-3xl text-gray-900">Ask About Our In-House Permit Expeditor</h2>
                <p class="text-slate-600 mt-1">Trusted by top national brands for design, fabrication &amp; installation.</p>
            </div>
            <div class="flex overflow-hidden">
                <div class="flex marquee gap-4 px-4" style="width: max-content;">
                    <div class="flex gap-4 shrink-0">
                        <div class="w-28 h-16 rounded-xl bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0 border border-primary/20">Client 1</div>
                        <div class="w-28 h-16 rounded-xl bg-coral/10 text-coral font-bold text-sm flex items-center justify-center shrink-0 border border-coral/20">Client 2</div>
                        <div class="w-28 h-16 rounded-xl bg-amber/10 text-amber font-bold text-sm flex items-center justify-center shrink-0 border border-amber/20">Client 3</div>
                        <div class="w-28 h-16 rounded-xl bg-violet/10 text-violet font-bold text-sm flex items-center justify-center shrink-0 border border-violet/20">Client 4</div>
                        <div class="w-28 h-16 rounded-xl bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0 border border-primary/20">Client 5</div>
                        <div class="w-28 h-16 rounded-xl bg-coral/10 text-coral font-bold text-sm flex items-center justify-center shrink-0 border border-coral/20">Client 6</div>
                    </div>
                    <div class="flex gap-4 shrink-0">
                        <div class="w-28 h-16 rounded-xl bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0 border border-primary/20">Client 1</div>
                        <div class="w-28 h-16 rounded-xl bg-coral/10 text-coral font-bold text-sm flex items-center justify-center shrink-0 border border-coral/20">Client 2</div>
                        <div class="w-28 h-16 rounded-xl bg-amber/10 text-amber font-bold text-sm flex items-center justify-center shrink-0 border border-amber/20">Client 3</div>
                        <div class="w-28 h-16 rounded-xl bg-violet/10 text-violet font-bold text-sm flex items-center justify-center shrink-0 border border-violet/20">Client 4</div>
                        <div class="w-28 h-16 rounded-xl bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0 border border-primary/20">Client 5</div>
                        <div class="w-28 h-16 rounded-xl bg-coral/10 text-coral font-bold text-sm flex items-center justify-center shrink-0 border border-coral/20">Client 6</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WEST BABYLON + FORM: zigzag – row1 text+phone | row2 form+benefits, reversed -->
        <section class="py-16 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Row 1: headline + phone left, visual right -->
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16 lg:mb-24">
                    <div>
                        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-gray-900 leading-tight mb-6">
                            Custom Signs in West Babylon, NY and Surrounding Areas
                        </h2>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <a href="tel:7187050333" class="text-2xl sm:text-3xl font-bold text-primary hover:text-primary-light transition-colors">(718) 705-0333</a>
                            <span class="text-slate-500 text-sm">Hours: <span id="businessStatus" class="font-semibold text-slate-700">Loading...</span> • Opens 8am</span>
                        </div>
                    </div>
                    <div class="hidden lg:block h-64 rounded-2xl bg-slate-200 overflow-hidden ring-1 ring-slate-200">
                        <img src="{{ asset('img/2.webp') }}" alt="" class="w-full h-full object-cover" />
                    </div>
                </div>
                <!-- Row 2: form LEFT, benefits RIGHT (reversed from usual) -->
                <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-start">
                    <div class="lg:col-span-2 lg:order-2">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-primary">check</span></span>
                                <span class="text-gray-700 font-medium">Five-Year Sign Warranty</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-10 h-10 rounded-xl bg-coral/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-coral">check</span></span>
                                <span class="text-gray-700 font-medium">Impossible Deadlines? No Problem—We Deliver</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-10 h-10 rounded-xl bg-amber/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-amber">check</span></span>
                                <span class="text-gray-700 font-medium">Over 40 Years Of Trusted Experience</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-primary">check</span></span>
                                <span class="text-gray-700 font-medium">Your Local One-stop Shop For All Signage Needs</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:col-span-3 lg:order-1">
                        <div class="bg-slate-50 rounded-2xl p-6 sm:p-8 border border-slate-200">
                            <h3 class="font-display text-2xl text-gray-900 text-center mb-6">Request a Call Back</h3>
                            <form class="space-y-4">
                                <input type="text" placeholder="Full Name*" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <input type="tel" placeholder="Phone*" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <input type="email" placeholder="Email*" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <select class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                    <option value="">Service*</option>
                                    <option>Sign Services</option>
                                    <option>Awning Services</option>
                                    <option>Installation</option>
                                </select>
                                <p class="text-slate-400 text-xs text-center">reCAPTCHA protected.</p>
                                <button type="submit" class="w-full bg-primary text-white font-bold py-3.5 rounded-xl hover:bg-primary-light transition-colors">Request Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NATIONWIDE: horizontal timeline – solid line + 3 colored nodes (no aqua) -->
        <section class="py-16 sm:py-24 bg-slate-50 border-y border-slate-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <h2 class="font-display text-3xl sm:text-4xl text-gray-900 mb-2">Nationwide Service</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto">Tri State Signs &amp; Awnings is trusted by top national brands for design, fabrication and installation.</p>
                </div>
                <div class="relative">
                    <div class="hidden md:block absolute top-8 left-0 right-0 h-0.5 bg-slate-300"></div>
                    <div class="grid md:grid-cols-3 gap-8 md:gap-4">
                        <div class="relative text-center">
                            <div class="timeline-dot bg-primary mx-auto mb-4 md:mb-6 ring-4 ring-primary/20"></div>
                            <h3 class="font-display text-xl text-gray-900 mb-2">01 — Design</h3>
                            <p class="text-slate-600 text-sm">Custom designed signs with the support of our expert staff.</p>
                        </div>
                        <div class="relative text-center">
                            <div class="timeline-dot bg-coral mx-auto mb-4 md:mb-6 ring-4 ring-coral/20"></div>
                            <h3 class="font-display text-xl text-gray-900 mb-2">02 — Fabrication</h3>
                            <p class="text-slate-600 text-sm">We build signs to last with the finest quality materials.</p>
                        </div>
                        <div class="relative text-center">
                            <div class="timeline-dot bg-amber mx-auto mb-4 md:mb-6 ring-4 ring-amber/20"></div>
                            <h3 class="font-display text-xl text-gray-900 mb-2">03 — Installation</h3>
                            <p class="text-slate-600 text-sm">Fully equipped technicians for quality on-site installs.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="tel:7187050333" class="inline-flex items-center gap-2 bg-coral text-white font-bold px-8 py-4 rounded-xl hover:bg-coral/90 transition-colors shadow-lg">
                        <span class="material-symbols-outlined">call</span> Call Today For An Estimate!
                    </a>
                </div>
            </div>
        </section>

        <!-- OUR QUALITY: split – quote left, UL badge + short list right (no aqua) -->
        <section class="py-16 sm:py-24 bg-primary-dark text-white clip-diag-inv">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div>
                        <h2 class="font-display text-3xl sm:text-4xl mb-2">It's all about</h2>
                        <h3 class="font-display text-4xl sm:text-5xl text-amber-300 mb-6">Our Quality</h3>
                        <p class="text-white/80 text-lg leading-relaxed">
                            Noted for custom signs with durability and value. Tri State uses only the highest quality materials and processes. As a registered manufacturer with Underwriters Laboratories, we produce the safest fixtures that adhere to the strictest codes and standards.
                        </p>
                    </div>
                    <div class="flex flex-col items-center lg:items-end">
                        <span class="inline-block bg-white text-primary-dark font-bold px-8 py-4 rounded-2xl text-xl mb-8">UL Listed</span>
                        <ul class="space-y-2 text-white/70 text-sm">
                            <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-300"></span> Highest quality materials</li>
                            <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-300"></span> Strictest codes &amp; standards</li>
                            <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-300"></span> UL registered manufacturer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR WORK: bento – 1 large + 3 small -->
        <section class="py-16 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl sm:text-4xl text-gray-900 mb-2">Our Work</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">We help businesses create innovative solutions. Growth, profitability, and the best service possible.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                    <a href="{{ url('/commercial-awnings') }}" class="md:row-span-2 card-lift rounded-2xl overflow-hidden bg-primary text-white group">
                        <div class="h-48 sm:h-64 flex items-center justify-center">
                            <span class="material-symbols-outlined text-7xl opacity-80 group-hover:scale-110 transition-transform">storefront</span>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="font-display text-2xl mb-2">Awnings &amp; Canopies</h3>
                            <p class="text-white/80 text-sm">Commercial &amp; residential</p>
                        </div>
                    </a>
                    <a href="{{ url('/exterior-signs') }}" class="card-lift rounded-2xl overflow-hidden bg-coral/10 border border-coral/20 p-6 group">
                        <div class="w-14 h-14 rounded-xl bg-coral/20 flex items-center justify-center mb-4"><span class="material-symbols-outlined text-coral text-2xl">text_fields</span></div>
                        <h3 class="font-bold text-gray-900 mb-1 group-hover:text-coral transition-colors">Channel Letters</h3>
                        <p class="text-slate-500 text-sm">Exterior signage</p>
                    </a>
                    <a href="{{ url('/installations') }}" class="card-lift rounded-2xl overflow-hidden bg-amber/10 border border-amber/20 p-6 group">
                        <div class="w-14 h-14 rounded-xl bg-amber/20 flex items-center justify-center mb-4"><span class="material-symbols-outlined text-amber text-2xl">construction</span></div>
                        <h3 class="font-bold text-gray-900 mb-1 group-hover:text-amber transition-colors">Sign Installations</h3>
                        <p class="text-slate-500 text-sm">Professional installs</p>
                    </a>
                    <a href="{{ url('/led-displays') }}" class="card-lift rounded-2xl overflow-hidden bg-violet/10 border border-violet/20 p-6 group md:col-span-2">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-violet/20 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-violet text-2xl">desktop_windows</span></div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1 group-hover:text-violet transition-colors">LED Displays</h3>
                                <p class="text-slate-500 text-sm">Digital signage</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- STATS: 3 solid stripes (primary, primary-light, coral) – no aqua -->
        <section class="py-0">
            <div class="grid md:grid-cols-3">
                <div class="bg-primary text-white py-12 sm:py-16 text-center">
                    <div class="font-display text-4xl sm:text-5xl lg:text-6xl mb-2">1000+</div>
                    <p class="font-semibold text-white/90">Signs</p>
                </div>
                <div class="bg-primary-light text-white py-12 sm:py-16 text-center">
                    <div class="font-display text-4xl sm:text-5xl lg:text-6xl mb-2">500+</div>
                    <p class="font-semibold text-white/90">Installations</p>
                </div>
                <div class="bg-coral text-white py-12 sm:py-16 text-center">
                    <div class="font-display text-4xl sm:text-5xl lg:text-6xl mb-2">100%</div>
                    <p class="font-semibold text-white/90">Customer Satisfaction</p>
                </div>
            </div>
        </section>

        <!-- WATCH THE PROS: video + 3 cards with colored LEFT border (no aqua) -->
        <section class="py-16 sm:py-24 bg-slate-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl sm:text-4xl text-gray-900 mb-2">Watch The Pros at Tri State Signs &amp; Awnings</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto mb-6">From design and fabrication to installation and service. We pride ourselves on the best possible experience.</p>
                    <a href="{{ url('/gallery') }}" class="inline-flex items-center gap-2 bg-primary text-white font-bold px-6 py-3 rounded-xl hover:bg-primary-light transition-colors">
                        View Our Project Gallery <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="max-w-4xl mx-auto mb-14 rounded-2xl overflow-hidden shadow-xl aspect-video bg-slate-200 ring-1 ring-slate-200">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-md flex border-l-4 border-primary">
                        <img src="{{ asset('img/img1.png') }}" alt="Same-Day Appointments" class="w-24 sm:w-32 h-24 sm:h-32 object-cover flex-shrink-0" />
                        <div class="p-4 flex flex-col justify-center">
                            <h3 class="font-bold text-gray-900 mb-1">Same-Day Appointments</h3>
                            <p class="text-slate-600 text-sm mb-2">Same-day appointments for consultations and assessments.</p>
                            <a href="{{ url('contact-us') }}" class="text-primary font-semibold text-sm hover:underline">Learn More →</a>
                        </div>
                    </div>
                    <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-md flex border-l-4 border-coral">
                        <img src="{{ asset('img/img2.png') }}" alt="Concierge-Level Service" class="w-24 sm:w-32 h-24 sm:h-32 object-cover flex-shrink-0" />
                        <div class="p-4 flex flex-col justify-center">
                            <h3 class="font-bold text-gray-900 mb-1">Concierge-Level Service</h3>
                            <p class="text-slate-600 text-sm mb-2">Personal attention and expert guidance from start to finish.</p>
                            <a href="{{ url('contact-us') }}" class="text-coral font-semibold text-sm hover:underline">Learn More →</a>
                        </div>
                    </div>
                    <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-md flex border-l-4 border-amber">
                        <img src="{{ asset('img/img3.png') }}" alt="UL Listed" class="w-24 sm:w-32 h-24 sm:h-32 object-cover flex-shrink-0" />
                        <div class="p-4 flex flex-col justify-center">
                            <h3 class="font-bold text-gray-900 mb-1">UL Listed</h3>
                            <p class="text-slate-600 text-sm mb-2">Safety and quality in every product we create.</p>
                            <a href="{{ url('contact-us') }}" class="text-amber font-semibold text-sm hover:underline">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GET A FAST QUOTE: split – trust/contact left, form right (solid bg, no aqua) -->
        <section class="py-16 sm:py-24 bg-slate-100 border-y border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-start">
                    <div class="lg:col-span-2">
                        <h2 class="font-display text-3xl sm:text-4xl text-gray-900 mb-2">GET A FAST QUOTE</h2>
                        <p class="text-slate-600 mb-6">Get in Touch and Upload Your Ideas (optional)</p>
                        <div class="space-y-3 text-slate-700">
                            <p><strong class="text-primary">Email:</strong> info@tristatesigns.com</p>
                            <p><strong class="text-primary">Phone:</strong> <a href="tel:7187050333" class="text-primary hover:underline">(718) 705-0333</a></p>
                            <p><strong class="text-primary">Office:</strong> 333 Wyandanch Ave, West Babylon, NY 11704</p>
                            <p class="text-slate-500 text-sm">Mon–Fri 8am–5pm | Sat–Sun Closed</p>
                        </div>
                        <div class="mt-8 flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-xs font-semibold border border-primary/20">Design</span>
                            <span class="px-3 py-1.5 rounded-lg bg-coral/10 text-coral text-xs font-semibold border border-coral/20">Fabrication</span>
                            <span class="px-3 py-1.5 rounded-lg bg-amber/10 text-amber text-xs font-semibold border border-amber/20">Installation</span>
                        </div>
                    </div>
                    <div class="lg:col-span-3">
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-slate-200">
                            <form id="quoteForm" class="space-y-4">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <input type="text" id="quote-name" name="name" required placeholder="Name *" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                    <input type="email" id="quote-email" name="email" required placeholder="Email *" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                </div>
                                <input type="tel" id="quote-phone" name="phone" required placeholder="Phone *" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <input type="text" id="quote-address" name="address" required placeholder="Address *" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <input type="text" id="quote-city" name="city" required placeholder="City, State ZIP *" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                                <textarea id="quote-info" name="info" rows="3" placeholder="Tell us about your project..." class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none resize-none"></textarea>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Upload Your Ideas (optional)</label>
                                    <input type="file" id="quote-file" name="file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="w-full border border-slate-200 rounded-xl px-4 py-3 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary file:text-white file:font-semibold file:text-sm" />
                                    <p class="text-slate-400 text-xs mt-1">jpg, jpeg, png, pdf, heic — max 10 MB</p>
                                </div>
                                <p class="flex items-center gap-2 text-slate-500 text-sm"><span class="material-symbols-outlined text-slate-400">security</span> reCAPTCHA &amp; Google Privacy Policy apply.</p>
                                <button type="submit" class="w-full bg-coral text-white font-bold py-4 rounded-xl hover:bg-coral/90 transition-colors">Submit Quote Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS: overlapping cards (solid bg, no gradients/aqua) -->
        <section class="py-16 sm:py-24 bg-slate-50 border-t border-slate-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl sm:text-4xl text-gray-900 mb-2">Here's what our satisfied customers are saying...</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto mb-6">We take pride in exceptional sign and awning services. Your feedback helps us improve and helps others decide.</p>
                    <button id="openReviewModal" class="inline-flex items-center gap-2 bg-violet text-white font-bold px-6 py-3 rounded-xl hover:bg-violet/90 transition-colors">
                        <span class="material-symbols-outlined">rate_review</span> Write a Review
                    </button>
                </div>
                <div class="grid md:grid-cols-2 gap-6 md:gap-8 relative">
                    <div class="card-lift bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-slate-200 relative z-10 md:-mr-4 md:mt-4">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-bold text-gray-900">Brittany D</h3>
                                <p class="text-gray-500 text-sm">5/1/2025</p>
                            </div>
                            <div class="flex text-amber-400">
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed italic">"Super easy to work with and they really know their stuff. Permits, custom vinyl, awning — totally transforms the storefront. Definitely recommend!"</p>
                    </div>
                    <div class="card-lift bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-slate-200 relative z-0 md:ml-4">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-bold text-gray-900">John M</h3>
                                <p class="text-gray-500 text-sm">4/15/2025</p>
                            </div>
                            <div class="flex text-amber-400">
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings:'FILL' 1">star</span>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed italic">"Excellent experience from start to finish. Professional, responsive, delivered exactly what we needed. New signage looks fantastic. Highly recommended!"</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer: primary-dark, 4 cols -->
    <footer class="bg-primary-dark text-white py-14 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">
                <div>
                    <h3 class="font-display text-lg mb-4">Visit Us</h3>
                    <p class="text-white/80">333 Wyandanch Avenue</p>
                    <p class="text-white/80">West Babylon, NY 11704</p>
                    <a href="#" class="inline-block mt-4 border-2 border-white/50 text-white font-bold px-4 py-2 rounded-xl hover:bg-white hover:text-primary-dark transition-colors text-sm">Get Directions</a>
                </div>
                <div>
                    <h3 class="font-display text-lg mb-4">Serving Area</h3>
                    <ul class="text-white/80 text-sm space-y-1 columns-2 gap-x-4">
                        <li>Hoboken, NJ</li><li>Jersey City, NJ</li><li>West New York</li><li>Rochelle Park</li><li>Union City, NJ</li><li>Great Neck, NY</li><li>New York, NY</li><li>Westbury, NY</li><li>Nassau County, NY</li><li>Queens County, NY</li><li>Suffolk County, NY</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-display text-lg mb-4">Contact Us</h3>
                    <p class="font-bold text-lg mb-4">(718) 705-0333</p>
                    <a href="{{ url('contact-us') }}" class="inline-block bg-coral text-white font-bold px-4 py-2 rounded-xl hover:bg-coral/90 transition-colors text-sm mb-4">Send a Message</a>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/tristatesigns" class="text-white/80 hover:text-white transition-colors" aria-label="Facebook"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg></a>
                        <a href="https://www.facebook.com/TriSignsNY" class="text-white/80 hover:text-white transition-colors" aria-label="TriSigns"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg></a>
                    </div>
                </div>
                <div>
                    <h3 class="font-display text-lg mb-4">Business Hours</h3>
                    <p class="text-white/80 flex justify-between"><span>Mon – Fri</span><span>8am – 5pm</span></p>
                    <p class="text-white/80 flex justify-between"><span>Sat – Sun</span><span>Closed</span></p>
                    <p class="text-white/60 text-sm mt-4">Same-Day Appointments</p>
                </div>
            </div>
            <div class="border-t border-white/10 mt-10 pt-6 text-center text-white/60 text-sm">© {{ date('Y') }} Tri State Signs &amp; Awnings. All Rights Reserved.</div>
        </div>
    </footer>

    <!-- Floating sidebar: solid primary (no gradient/aqua) -->
    <div class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col bg-primary-dark rounded-l-2xl shadow-xl border-l border-y border-white/10 z-40 overflow-hidden">
        <a href="tel:7187050333" class="p-3 text-white/90 hover:bg-white/10 transition-colors" title="Call"><span class="material-symbols-outlined">call</span></a>
        <a href="{{ url('/reviews') }}" class="p-3 text-white/90 hover:bg-white/10 transition-colors" title="Reviews"><span class="material-symbols-outlined">star</span></a>
        <a href="{{ url('request-call-back') }}" class="p-3 text-white/90 hover:bg-white/10 transition-colors" title="Request Call Back"><span class="material-symbols-outlined">mail</span></a>
        <a href="#" class="p-3 text-white/90 hover:bg-white/10 transition-colors" title="Location"><span class="material-symbols-outlined">location_on</span></a>
    </div>

    <!-- Review Modal -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-hidden="true">
        <div id="modalBackdrop" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full border border-slate-200">
                <div class="flex items-center justify-between p-6 border-b border-slate-200">
                    <h2 id="reviewModalLabel" class="font-display text-xl text-slate-900">Write a Review</h2>
                    <button id="closeReviewModal" type="button" class="p-2 rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-700"><span class="material-symbols-outlined">close</span></button>
                </div>
                <div class="p-6">
                    <form id="reviewForm">
                        <div class="mb-4">
                            <label for="reviewerName" class="block text-sm font-bold text-slate-800 mb-2">Your Name</label>
                            <input type="text" id="reviewerName" name="name" required placeholder="Enter your name" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-bold text-slate-800 mb-2">Rating</label>
                            <div class="flex gap-1" id="ratingStars">
                                <button type="button" class="rating-star text-gray-300 hover:text-amber-400 p-1" data-rating="1"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-amber-400 p-1" data-rating="2"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-amber-400 p-1" data-rating="3"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-amber-400 p-1" data-rating="4"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-gray-300 hover:text-amber-400 p-1" data-rating="5"><span class="material-symbols-outlined text-2xl">star</span></button>
                            </div>
                            <input type="hidden" id="reviewRating" name="rating" value="0" required />
                        </div>
                        <div class="mb-4">
                            <label for="review" class="block text-sm font-bold text-slate-800 mb-2">Your Review</label>
                            <textarea id="review" name="review" rows="4" required placeholder="Share your experience..." class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none resize-none"></textarea>
                        </div>
                    </form>
                </div>
                <div class="flex justify-end gap-3 p-6 border-t border-slate-200">
                    <button id="cancelReviewModal" type="button" class="px-4 py-2.5 rounded-xl font-bold text-slate-700 bg-slate-100 hover:bg-slate-200">Cancel</button>
                    <button id="submitReview" type="button" class="px-4 py-2.5 rounded-xl font-bold text-white bg-primary hover:bg-primary-light">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('nav-toggle')?.addEventListener('click', () => document.getElementById('mobile-menu')?.classList.toggle('hidden'));

        const reviewModal = document.getElementById('reviewModal');
        const openBtn = document.getElementById('openReviewModal');
        const closeBtn = document.getElementById('closeReviewModal');
        const cancelBtn = document.getElementById('cancelReviewModal');
        const backdrop = document.getElementById('modalBackdrop');
        const stars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('reviewRating');
        let selectedRating = 0;

        openBtn?.addEventListener('click', () => { reviewModal?.classList.remove('hidden'); document.body.style.overflow = 'hidden'; });
        const closeModal = () => { reviewModal?.classList.add('hidden'); document.body.style.overflow = ''; document.getElementById('reviewForm')?.reset(); selectedRating = 0; ratingInput.value = '0'; stars.forEach(s => { s.querySelector('span').style.fontVariationSettings = "'FILL' 0"; s.classList.remove('text-amber-400'); s.classList.add('text-gray-300'); }); };
        closeBtn?.addEventListener('click', closeModal);
        cancelBtn?.addEventListener('click', closeModal);
        backdrop?.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape' && !reviewModal?.classList.contains('hidden')) closeModal(); });

        stars.forEach(star => {
            star.addEventListener('click', () => { const r = parseInt(star.getAttribute('data-rating')); selectedRating = r; ratingInput.value = r; stars.forEach((s, i) => { const icon = s.querySelector('span'); icon.style.fontVariationSettings = i < r ? "'FILL' 1" : "'FILL' 0"; s.classList.toggle('text-amber-400', i < r); s.classList.toggle('text-gray-300', i >= r); }); });
            star.addEventListener('mouseenter', () => { const r = parseInt(star.getAttribute('data-rating')); stars.forEach((s, i) => s.classList.toggle('text-amber-400', i < r)); });
            star.addEventListener('mouseleave', () => { stars.forEach((s, i) => { if (selectedRating === 0) s.classList.remove('text-amber-400'), s.classList.add('text-gray-300'); else if (i >= selectedRating) s.classList.remove('text-amber-400'), s.classList.add('text-gray-300'); }); });
        });

        document.getElementById('submitReview')?.addEventListener('click', () => {
            const f = document.getElementById('reviewForm'); const d = new FormData(f);
            if (!d.get('name') || ratingInput.value === '0' || !d.get('review')) { alert('Please fill all fields and select a rating.'); return; }
            alert('Thank you for your review!'); closeModal();
        });

        function updateBusinessStatus() {
            const el = document.getElementById('businessStatus'); if (!el) return;
            const m = new Date().getHours() * 60 + new Date().getMinutes();
            const open = 8 * 60, closing = 16 * 60, closed = 17 * 60;
            el.classList.remove('text-green-500', 'text-amber-500', 'text-red-500');
            if (m >= open && m < closing) { el.textContent = 'Open'; el.classList.add('text-green-500'); }
            else if (m >= closing && m < closed) { el.textContent = 'Closing Soon'; el.classList.add('text-amber-500'); }
            else { el.textContent = 'Closed'; el.classList.add('text-red-500'); }
        }
        updateBusinessStatus();
        setInterval(updateBusinessStatus, 60000);
    </script>
</body>
</html>
