<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tri State Signs & Awnings | Custom Signs West Babylon, NY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003d64',
                        'primary-light': '#0c5a8f',
                        teal: { 700: '#0f766e', 600: '#0d9488', 500: '#14b8a6', 100: '#ccfbf1', 50: '#f0fdfa' },
                        amber: { 600: '#d97706', 100: '#fef3c7', 50: '#fffbeb' },
                        slate: { 950: '#020617', 925: '#0f172a', 900: '#0f172a', 800: '#1e293b', 700: '#334155', 600: '#475569', 500: '#64748b', 400: '#94a3b8', 300: '#cbd5e1', 200: '#e2e8f0', 100: '#f1f5f9', 50: '#f8fafc' },
                    },
                    fontFamily: {
                        display: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                        sans: ['DM Sans', 'system-ui', 'sans-serif'],
                    },
                    maxWidth: { 'prose': '48rem' },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0,61,100,0.06), 0 10px 20px -2px rgba(0,61,100,0.04)',
                        'soft-lg': '0 10px 40px -10px rgba(0,61,100,0.1), 0 2px 10px -2px rgba(0,61,100,0.04)',
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="font-sans text-slate-800 bg-slate-50 antialiased">
    <!-- Top bar: modern, subtle -->
    <div class="border-b border-slate-200/80 bg-white/80 backdrop-blur-sm">
        <div class="max-w-[80rem] mx-auto px-6 py-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-sm text-slate-600">
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <span class="flex items-center gap-2">
                    <span class="flex text-amber-500"><span class="material-symbols-outlined text-base">star</span><span class="material-symbols-outlined text-base">star</span><span class="material-symbols-outlined text-base">star</span><span class="material-symbols-outlined text-base">star</span><span class="material-symbols-outlined text-base">star</span></span>
                    <span class="font-semibold text-slate-800">5.0</span>
                    <a href="{{ url('/reviews') }}" class="text-primary hover:underline">(4 Ratings)</a>
                </span>
                <span class="hidden sm:inline-flex items-center gap-1.5 text-slate-500">
                    <span class="material-symbols-outlined text-base text-teal-500">location_on</span>
                    333 Wyandanch Ave, West Babylon, NY
                </span>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/request-call-back') }}" class="font-medium text-primary hover:underline">Request Call Back</a>
                <a href="tel:7187050333" class="font-semibold text-slate-800">(718) 705-0333</a>
            </div>
        </div>
    </div>

    <!-- Nav: clean, modern -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
        <div class="max-w-[80rem] mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Tri State Signs & Awnings" class="h-9 w-auto" /></a>
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ url('/') }}" class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 transition-colors">Home</a>
                    <div class="relative group">
                        <button class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 flex items-center gap-0.5 transition-colors">Sign Services <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-white rounded-xl border border-slate-200 py-2 min-w-[200px] shadow-soft">
                                <a href="{{ url('/exterior-signs') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Exterior Signs</a>
                                <a href="{{ url('/interior-signs') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Interior Signs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 flex items-center gap-0.5 transition-colors">Awning Services <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-white rounded-xl border border-slate-200 py-2 min-w-[200px] shadow-soft">
                                <a href="{{ url('/commercial-awnings') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Commercial Awnings</a>
                                <a href="{{ url('/residential-awnings') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Residential Awnings</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/installations') }}" class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 transition-colors">Installations</a>
                    <a href="{{ url('/led-displays') }}" class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 transition-colors">LED Displays</a>
                    <a href="{{ url('/permits') }}" class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 transition-colors">Permits</a>
                    <div class="relative group">
                        <button class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 flex items-center gap-0.5 transition-colors">About <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-white rounded-xl border border-slate-200 py-2 min-w-[200px] shadow-soft">
                                <a href="{{ url('/gallery') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Gallery</a>
                                <a href="{{ url('/reviews') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Reviews</a>
                                <a href="{{ url('/blog') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Blog</a>
                                <a href="{{ url('/faqs') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">FAQs</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="font-display text-sm font-medium text-slate-700 hover:text-primary px-3 py-2 rounded-lg hover:bg-primary/5 flex items-center gap-0.5 transition-colors">Contact <span class="material-symbols-outlined text-sm">expand_more</span></button>
                        <div class="absolute left-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="bg-white rounded-xl border border-slate-200 py-2 min-w-[200px] shadow-soft">
                                <a href="{{ url('/request-call-back') }}" class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary rounded-lg mx-1">Request Call Back</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="flex items-center gap-3">
                    <a href="{{ url('/request-call-back') }}" class="hidden sm:inline-flex font-display text-sm font-semibold bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary-light transition-colors shadow-soft">Request Call Back</a>
                    <button id="nav-toggle" class="lg:hidden p-2.5 text-slate-700 hover:bg-slate-100 rounded-xl transition-colors" aria-label="Menu"><span class="material-symbols-outlined">menu</span></button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="lg:hidden hidden border-t border-slate-200 bg-white">
            <nav class="max-w-[80rem] mx-auto px-6 py-4 space-y-0.5">
                <a href="{{ url('/') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Home</a>
                <a href="{{ url('/exterior-signs') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Exterior Signs</a>
                <a href="{{ url('/interior-signs') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Interior Signs</a>
                <a href="{{ url('/commercial-awnings') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Commercial Awnings</a>
                <a href="{{ url('/residential-awnings') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Residential Awnings</a>
                <a href="{{ url('/installations') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Installations</a>
                <a href="{{ url('/led-displays') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">LED Displays</a>
                <a href="{{ url('/permits') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Permits</a>
                <a href="{{ url('/gallery') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Gallery</a>
                <a href="{{ url('/reviews') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Reviews</a>
                <a href="{{ url('/blog') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Blog</a>
                <a href="{{ url('/faqs') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">FAQs</a>
                <a href="{{ url('/request-call-back') }}" class="block py-3 text-sm font-medium text-slate-700 hover:text-primary rounded-lg hover:bg-slate-50 px-3">Request Call Back</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero: modern, soft gradient overlay -->
        <section class="relative py-28 sm:py-36 lg:py-44 bg-slate-900 overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/1.webp') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/85 via-slate-900/70 to-slate-900/95"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-teal-900/10 pointer-events-none"></div>
            <div class="relative max-w-prose mx-auto px-6 text-center">
                <p class="font-display text-slate-300 text-sm uppercase tracking-widest mb-5">West Babylon, NY · 40+ Years</p>
                <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold text-white leading-tight mb-6 tracking-tight">
                    Custom Signs &amp; Awnings That Have Drawn A Crowd
                </h1>
                <p class="text-slate-300 text-lg mb-10 max-w-xl mx-auto leading-relaxed">
                    Your local one-stop shop. Five-year warranty. Impossible deadlines? No problem—we deliver.
                </p>
                <a href="{{ url('/request-call-back') }}" class="inline-flex items-center gap-2 font-display font-semibold bg-primary text-white px-8 py-3.5 rounded-xl hover:bg-primary-light transition-colors shadow-soft">
                    Get In Touch
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </a>
                <p class="mt-6 text-slate-400 text-sm">Free custom banner with exterior signage/awning orders.</p>
            </div>
        </section>

        <!-- Permit: cards with rounded + shadow, subtle color -->
        <section class="py-20 sm:py-24 bg-primary/[0.03]">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 mb-2">Ask About Our In-House Permit Expeditor</h2>
                <p class="text-slate-600 mb-10">Trusted by top national brands for design, fabrication &amp; installation.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="w-28 h-14 rounded-xl bg-primary/5 border border-primary/15 flex items-center justify-center text-primary/80 text-xs font-medium shadow-sm">Client 1</div>
                    <div class="w-28 h-14 rounded-xl bg-teal-50 border border-teal-200/80 flex items-center justify-center text-teal-700/80 text-xs font-medium shadow-sm">Client 2</div>
                    <div class="w-28 h-14 rounded-xl bg-primary/5 border border-primary/15 flex items-center justify-center text-primary/80 text-xs font-medium shadow-sm">Client 3</div>
                    <div class="w-28 h-14 rounded-xl bg-teal-50 border border-teal-200/80 flex items-center justify-center text-teal-700/80 text-xs font-medium shadow-sm">Client 4</div>
                    <div class="w-28 h-14 rounded-xl bg-primary/5 border border-primary/15 flex items-center justify-center text-primary/80 text-xs font-medium shadow-sm">Client 5</div>
                    <div class="w-28 h-14 rounded-xl bg-teal-50 border border-teal-200/80 flex items-center justify-center text-teal-700/80 text-xs font-medium shadow-sm">Client 6</div>
                </div>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- West Babylon + Form -->
        <section class="py-20 sm:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 leading-tight mb-8">
                    Custom Signs in West Babylon, NY and Surrounding Areas
                </h2>
                <ul class="space-y-4 mb-10 text-slate-600">
                    <li class="flex items-center gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary"><span class="material-symbols-outlined text-sm">check</span></span> Five-Year Sign Warranty</li>
                    <li class="flex items-center gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-teal-100 text-teal-700"><span class="material-symbols-outlined text-sm">check</span></span> Impossible Deadlines? No Problem—We Deliver</li>
                    <li class="flex items-center gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary"><span class="material-symbols-outlined text-sm">check</span></span> Over 40 Years Of Trusted Experience</li>
                    <li class="flex items-center gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-teal-100 text-teal-700"><span class="material-symbols-outlined text-sm">check</span></span> Your Local One-stop Shop For All Signage Needs</li>
                </ul>
                <p class="text-2xl font-display font-semibold text-primary mb-1"><a href="tel:7187050333" class="hover:underline">(718) 705-0333</a></p>
                <p class="text-slate-500 text-sm mb-12">Hours: <span id="businessStatus" class="font-semibold text-slate-800">Loading...</span> · Opens 8am</p>

                <div class="h-px bg-slate-200 mb-12"></div>

                <h3 class="font-display text-xl font-semibold text-slate-800 mb-6 text-center">Request a Call Back</h3>
                <form class="space-y-4 max-w-md mx-auto">
                    <input type="text" placeholder="Full Name*" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <input type="tel" placeholder="Phone*" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <input type="email" placeholder="Email*" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <select class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow">
                        <option value="">Service*</option>
                        <option>Sign Services</option>
                        <option>Awning Services</option>
                        <option>Installation</option>
                    </select>
                    <p class="text-slate-400 text-xs text-center">Protected by reCAPTCHA.</p>
                    <button type="submit" class="w-full font-display font-semibold bg-primary text-white py-3.5 rounded-xl hover:bg-primary-light transition-colors shadow-soft">Request Call Back</button>
                </form>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- Nationwide: cards with left accent -->
        <section class="py-20 sm:py-24">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 text-center mb-4">Nationwide Service</h2>
                <p class="text-slate-600 text-center mb-12 max-w-xl mx-auto">Tri State Signs &amp; Awnings is trusted by top national brands for design, fabrication and installation.</p>
                <div class="space-y-4">
                    <div class="rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-primary shadow-sm hover:shadow-soft hover:bg-primary/[0.02] transition-all">
                        <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">01</p>
                        <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">Design</h3>
                        <p class="text-slate-600 text-sm">Custom designed signs with the support of our expert staff.</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-teal-600 shadow-sm hover:shadow-soft hover:bg-teal-50/50 transition-all">
                        <p class="text-xs font-semibold text-teal-700 uppercase tracking-wider mb-2">02</p>
                        <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">Fabrication</h3>
                        <p class="text-slate-600 text-sm">We build signs to last with the finest quality materials.</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-primary shadow-sm hover:shadow-soft hover:bg-primary/[0.02] transition-all">
                        <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">03</p>
                        <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">Installation</h3>
                        <p class="text-slate-600 text-sm">Fully equipped technicians for quality on-site installs.</p>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="tel:7187050333" class="inline-flex items-center gap-2 font-display font-semibold bg-primary text-white px-8 py-3.5 rounded-xl hover:bg-primary-light transition-colors shadow-soft">Call Today For An Estimate <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- Our Quality -->
        <section class="py-20 sm:py-24 bg-gradient-to-b from-slate-50 to-teal-50/30">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 mb-1">It's all about</h2>
                <h3 class="font-display text-3xl sm:text-4xl font-semibold text-primary mb-8">Our Quality</h3>
                <p class="text-slate-600 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Noted for custom signs with durability and value. Tri State Signs &amp; Awnings uses only the highest quality materials and processes. As a registered manufacturer with Underwriters Laboratories, we produce the safest fixtures that adhere to the strictest codes and standards.
                </p>
                <span class="inline-flex items-center gap-2 rounded-full bg-teal-100 text-teal-700 font-display font-semibold px-5 py-2 text-sm border border-teal-200/60">UL Listed</span>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- Our Work: cards with shadow + hover, subtle color -->
        <section class="py-20 sm:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 text-center mb-4">Our Work</h2>
                <p class="text-slate-600 text-center mb-12 max-w-xl mx-auto">We help businesses create innovative solutions. Growth, profitability, and the best service possible.</p>
                <div class="grid sm:grid-cols-2 gap-5">
                    <a href="{{ url('/commercial-awnings') }}" class="group block rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-soft hover:border-primary/30 hover:bg-primary/[0.03] transition-all">
                        <p class="font-display text-lg font-semibold text-slate-800 mb-1 group-hover:text-primary transition-colors">Awnings &amp; Canopies</p>
                        <p class="text-slate-500 text-sm">Commercial &amp; residential</p>
                    </a>
                    <a href="{{ url('/exterior-signs') }}" class="group block rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-soft hover:border-teal-500/40 hover:bg-teal-50/50 transition-all">
                        <p class="font-display text-lg font-semibold text-slate-800 mb-1 group-hover:text-teal-700 transition-colors">Channel Letters</p>
                        <p class="text-slate-500 text-sm">Exterior signage</p>
                    </a>
                    <a href="{{ url('/installations') }}" class="group block rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-soft hover:border-primary/30 hover:bg-primary/[0.03] transition-all">
                        <p class="font-display text-lg font-semibold text-slate-800 mb-1 group-hover:text-primary transition-colors">Sign Installations</p>
                        <p class="text-slate-500 text-sm">Professional installs</p>
                    </a>
                    <a href="{{ url('/led-displays') }}" class="group block rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-soft hover:border-teal-500/40 hover:bg-teal-50/50 transition-all">
                        <p class="font-display text-lg font-semibold text-slate-800 mb-1 group-hover:text-teal-700 transition-colors">LED Displays</p>
                        <p class="text-slate-500 text-sm">Digital signage</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats: modern dark block with subtle color accent -->
        <section class="py-14 sm:py-16">
            <div class="max-w-4xl mx-auto px-6">
                <div class="rounded-2xl bg-gradient-to-br from-slate-800 via-slate-800 to-primary/30 text-white shadow-soft-lg overflow-hidden">
                    <div class="grid grid-cols-3 divide-x divide-white/15 text-center">
                        <div class="py-10">
                            <p class="font-display text-3xl sm:text-4xl font-semibold mb-1 text-white">1000+</p>
                            <p class="text-slate-300 text-sm">Signs</p>
                        </div>
                        <div class="py-10">
                            <p class="font-display text-3xl sm:text-4xl font-semibold mb-1 text-teal-100">500+</p>
                            <p class="text-slate-300 text-sm">Installations</p>
                        </div>
                        <div class="py-10">
                            <p class="font-display text-3xl sm:text-4xl font-semibold mb-1 text-amber-100">100%</p>
                            <p class="text-slate-300 text-sm">Customer Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- Watch The Pros -->
        <section class="py-20 sm:py-24">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 text-center mb-4">Watch The Pros at Tri State Signs &amp; Awnings</h2>
                <p class="text-slate-600 text-center mb-8 max-w-xl mx-auto">From design and fabrication to installation and service. We pride ourselves on the best possible experience.</p>
                <div class="text-center mb-10">
                    <a href="{{ url('/gallery') }}" class="inline-flex items-center gap-2 font-display font-semibold border-2 border-teal-600 text-teal-700 px-6 py-3 rounded-xl hover:bg-teal-50 hover:border-teal-700 transition-colors">View Our Project Gallery <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <div class="aspect-video bg-slate-200 mb-12 rounded-2xl overflow-hidden shadow-soft ring-1 ring-slate-200/80">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-6 rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-primary shadow-sm hover:shadow-soft hover:bg-primary/[0.02] transition-all">
                        <img src="{{ asset('img/img1.png') }}" alt="" class="w-20 h-20 rounded-xl object-cover flex-shrink-0" />
                        <div>
                            <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">Same-Day Appointments</h3>
                            <p class="text-slate-600 text-sm mb-2">Same-day appointments for consultations and assessments.</p>
                            <a href="{{ url('contact-us') }}" class="text-primary text-sm font-semibold hover:underline">Learn More</a>
                        </div>
                    </div>
                    <div class="flex gap-6 rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-teal-600 shadow-sm hover:shadow-soft hover:bg-teal-50/50 transition-all">
                        <img src="{{ asset('img/img2.png') }}" alt="" class="w-20 h-20 rounded-xl object-cover flex-shrink-0" />
                        <div>
                            <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">Concierge-Level Service</h3>
                            <p class="text-slate-600 text-sm mb-2">Personal attention and expert guidance from start to finish.</p>
                            <a href="{{ url('contact-us') }}" class="text-teal-700 text-sm font-semibold hover:underline">Learn More</a>
                        </div>
                    </div>
                    <div class="flex gap-6 rounded-xl border border-slate-200 bg-white p-6 pl-8 border-l-4 border-l-primary shadow-sm hover:shadow-soft hover:bg-primary/[0.02] transition-all">
                        <img src="{{ asset('img/img3.png') }}" alt="" class="w-20 h-20 rounded-xl object-cover flex-shrink-0" />
                        <div>
                            <h3 class="font-display text-lg font-semibold text-slate-800 mb-2">UL Listed</h3>
                            <p class="text-slate-600 text-sm mb-2">Safety and quality in every product we create.</p>
                            <a href="{{ url('contact-us') }}" class="text-primary text-sm font-semibold hover:underline">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- GET A FAST QUOTE -->
        <section class="py-20 sm:py-24 bg-gradient-to-b from-slate-50 to-primary/[0.04]">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 text-center mb-2">GET A FAST QUOTE</h2>
                <p class="text-slate-600 text-center mb-6">Get in Touch and Upload Your Ideas (optional)</p>
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-1 text-sm text-slate-500 mb-10">
                    <span>info@tristatesigns.com</span>
                    <span><a href="tel:7187050333" class="text-primary font-semibold hover:underline">(718) 705-0333</a></span>
                    <span>333 Wyandanch Ave, West Babylon, NY 11704</span>
                    <span>Mon–Fri 8am–5pm · Sat–Sun Closed</span>
                </div>
                <form id="quoteForm" class="max-w-lg mx-auto space-y-4 bg-white rounded-2xl border border-slate-200 p-8 shadow-soft ring-1 ring-primary/5">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <input type="text" id="quote-name" name="name" required placeholder="Name *" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                        <input type="email" id="quote-email" name="email" required placeholder="Email *" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    </div>
                    <input type="tel" id="quote-phone" name="phone" required placeholder="Phone *" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <input type="text" id="quote-address" name="address" required placeholder="Address *" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <input type="text" id="quote-city" name="city" required placeholder="City, State ZIP *" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-shadow" />
                    <textarea id="quote-info" name="info" rows="3" placeholder="Tell us about your project..." class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary resize-none transition-shadow"></textarea>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Upload (optional)</label>
                        <input type="file" id="quote-file" name="file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-slate-200 file:bg-slate-50 file:text-slate-700" />
                        <p class="text-slate-400 text-xs mt-1">jpg, png, pdf, heic — max 10 MB</p>
                    </div>
                    <p class="text-slate-400 text-xs">reCAPTCHA &amp; Google Privacy Policy apply.</p>
                    <button type="submit" class="w-full font-display font-semibold bg-primary text-white py-3.5 rounded-xl hover:bg-primary-light transition-colors shadow-soft">Submit Quote Request</button>
                </form>
            </div>
        </section>

        <div class="h-px bg-slate-200 max-w-4xl mx-auto"></div>

        <!-- Testimonials: cards -->
        <section class="py-20 sm:py-24">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-slate-800 text-center mb-4">Here's what our satisfied customers are saying</h2>
                <p class="text-slate-600 text-center mb-10 max-w-xl mx-auto">We take pride in exceptional sign and awning services. Your feedback helps us improve and helps others decide.</p>
                <div class="text-center mb-10">
                    <button id="openReviewModal" class="inline-flex items-center gap-2 font-display font-semibold border-2 border-primary text-primary px-6 py-3 rounded-xl hover:bg-primary hover:text-white transition-colors">Write a Review</button>
                </div>
                <div class="grid sm:grid-cols-2 gap-6">
                    @if(isset($reviews) && $reviews->count() > 0)
                        @foreach($reviews as $index => $review)
                            <blockquote class="rounded-2xl border border-slate-200 bg-white p-8 pl-10 border-l-4 {{ $index % 2 == 0 ? 'border-l-primary' : 'border-l-teal-600' }} shadow-sm hover:shadow-soft {{ $index % 2 == 0 ? 'hover:bg-primary/[0.02]' : 'hover:bg-teal-50/50' }} transition-all">
                                <p class="text-slate-700 italic mb-4 leading-relaxed">"{{ $review->comment }}"</p>
                                <footer class="text-slate-500 text-sm">— {{ $review->name }}, {{ $review->created_at->format('n/j/Y') }}</footer>
                            </blockquote>
                        @endforeach
                    @else
                        <div class="col-span-2 text-center py-8">
                            <p class="text-slate-500">No reviews available at this time.</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-14">
        <div class="max-w-[80rem] mx-auto px-6">
            <div class="h-px bg-white/10 mb-10"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <h3 class="font-display text-lg font-semibold mb-4">Visit Us</h3>
                    <p class="text-slate-400 text-sm">333 Wyandanch Avenue<br />West Babylon, NY 11704</p>
                    <a href="#" class="inline-block mt-4 text-sm text-teal-300 hover:text-teal-100 border-b border-teal-600/50 hover:border-teal-400 transition-colors">Get Directions</a>
                </div>
                <div>
                    <h3 class="font-display text-lg font-semibold mb-4">Serving Area</h3>
                    <ul class="text-slate-400 text-sm space-y-1 columns-2 gap-x-4">
                        <li>Hoboken, NJ</li><li>Jersey City, NJ</li><li>West New York</li><li>Rochelle Park</li><li>Union City, NJ</li><li>Great Neck, NY</li><li>New York, NY</li><li>Westbury, NY</li><li>Nassau County, NY</li><li>Queens County, NY</li><li>Suffolk County, NY</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-display text-lg font-semibold mb-4">Contact Us</h3>
                    <p class="font-semibold mb-4">(718) 705-0333</p>
                    <a href="{{ url('contact-us') }}" class="text-sm text-teal-300 hover:text-teal-100 border-b border-teal-600/50 hover:border-teal-400 transition-colors">Send a Message</a>
                    <div class="flex gap-4 mt-4">
                        <a href="https://www.facebook.com/tristatesigns" class="text-slate-400 hover:text-white transition-colors" aria-label="Facebook"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg></a>
                        <a href="https://www.facebook.com/TriSignsNY" class="text-slate-400 hover:text-white transition-colors" aria-label="TriSigns"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg></a>
                    </div>
                </div>
                <div>
                    <h3 class="font-display text-lg font-semibold mb-4">Business Hours</h3>
                    <p class="text-slate-400 text-sm flex justify-between"><span>Mon – Fri</span><span>8am – 5pm</span></p>
                    <p class="text-slate-400 text-sm flex justify-between"><span>Sat – Sun</span><span>Closed</span></p>
                    <p class="text-slate-500 text-xs mt-4">Same-Day Appointments</p>
                </div>
            </div>
            <div class="h-px bg-white/10 mt-10"></div>
            <p class="text-center text-slate-500 text-sm mt-6">© {{ date('Y') }} Tri State Signs &amp; Awnings. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Floating sidebar: modern -->
    <div class="hidden sm:flex fixed right-0 top-1/2 -translate-y-1/2 flex-col rounded-l-2xl border-l border-t border-b border-slate-200/50 bg-white/95 backdrop-blur-md shadow-soft-lg z-40 overflow-hidden">
        <a href="tel:7187050333" class="p-3.5 text-slate-500 hover:text-primary hover:bg-primary/5 transition-colors" title="Call"><span class="material-symbols-outlined text-xl">call</span></a>
        <a href="{{ url('/reviews') }}" class="p-3.5 text-slate-500 hover:text-primary hover:bg-primary/5 transition-colors" title="Reviews"><span class="material-symbols-outlined text-xl">star</span></a>
        <a href="{{ url('request-call-back') }}" class="p-3.5 text-slate-500 hover:text-primary hover:bg-primary/5 transition-colors" title="Request Call Back"><span class="material-symbols-outlined text-xl">mail</span></a>
        <a href="#" class="p-3.5 text-slate-500 hover:text-primary hover:bg-primary/5 transition-colors" title="Location"><span class="material-symbols-outlined text-xl">location_on</span></a>
    </div>

    <!-- Review Modal -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-hidden="true">
        <div id="modalBackdrop" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm"></div>
        <div class="flex min-h-full items-center justify-center p-6">
            <div class="relative bg-white rounded-2xl border border-slate-200 shadow-soft-lg max-w-md w-full overflow-hidden">
                <div class="flex items-center justify-between p-6 border-b border-slate-200">
                    <h2 id="reviewModalLabel" class="font-display text-xl font-semibold text-slate-800">Write a Review</h2>
                    <button id="closeReviewModal" type="button" class="p-2 text-slate-400 hover:text-slate-800 rounded-lg hover:bg-slate-100 transition-colors"><span class="material-symbols-outlined">close</span></button>
                </div>
                <div class="p-6">
                    <form id="reviewForm">
                        <div class="mb-4">
                            <label for="reviewerName" class="block text-sm font-medium text-slate-800 mb-2">Your Name</label>
                            <input type="text" id="reviewerName" name="name" required placeholder="Enter your name" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-slate-800 mb-2">Rating</label>
                            <div class="flex gap-1" id="ratingStars">
                                <button type="button" class="rating-star text-slate-300 hover:text-amber-500 p-1 rounded transition-colors" data-rating="1"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-slate-300 hover:text-amber-500 p-1 rounded transition-colors" data-rating="2"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-slate-300 hover:text-amber-500 p-1 rounded transition-colors" data-rating="3"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-slate-300 hover:text-amber-500 p-1 rounded transition-colors" data-rating="4"><span class="material-symbols-outlined text-2xl">star</span></button>
                                <button type="button" class="rating-star text-slate-300 hover:text-amber-500 p-1 rounded transition-colors" data-rating="5"><span class="material-symbols-outlined text-2xl">star</span></button>
                            </div>
                            <input type="hidden" id="reviewRating" name="rating" value="0" required />
                        </div>
                        <div class="mb-4">
                            <label for="review" class="block text-sm font-medium text-slate-800 mb-2">Your Review</label>
                            <textarea id="review" name="review" rows="4" required placeholder="Share your experience..." class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary resize-none"></textarea>
                        </div>
                    </form>
                </div>
                <div class="flex justify-end gap-3 p-6 border-t border-slate-200 bg-slate-50/50">
                    <button id="cancelReviewModal" type="button" class="px-4 py-2.5 text-sm font-medium text-slate-700 border border-slate-200 rounded-xl hover:bg-slate-100 transition-colors">Cancel</button>
                    <button id="submitReview" type="button" class="px-4 py-2.5 text-sm font-semibold bg-primary text-white rounded-xl hover:bg-primary-light transition-colors">Submit Review</button>
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
        const closeModal = () => { reviewModal?.classList.add('hidden'); document.body.style.overflow = ''; document.getElementById('reviewForm')?.reset(); selectedRating = 0; ratingInput.value = '0'; stars.forEach(s => { s.querySelector('span').style.fontVariationSettings = "'FILL' 0"; s.classList.remove('text-amber-500'); s.classList.add('text-slate-300'); }); };
        closeBtn?.addEventListener('click', closeModal);
        cancelBtn?.addEventListener('click', closeModal);
        backdrop?.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape' && !reviewModal?.classList.contains('hidden')) closeModal(); });

        stars.forEach(star => {
            star.addEventListener('click', () => { const r = parseInt(star.getAttribute('data-rating')); selectedRating = r; ratingInput.value = r; stars.forEach((s, i) => { const icon = s.querySelector('span'); icon.style.fontVariationSettings = i < r ? "'FILL' 1" : "'FILL' 0"; s.classList.toggle('text-amber-500', i < r); s.classList.toggle('text-slate-300', i >= r); }); });
            star.addEventListener('mouseenter', () => { const r = parseInt(star.getAttribute('data-rating')); stars.forEach((s, i) => { s.classList.toggle('text-amber-500', i < r); s.classList.toggle('text-slate-300', i >= r); }); });
            star.addEventListener('mouseleave', () => { stars.forEach((s, i) => { if (selectedRating === 0) s.classList.remove('text-amber-500'), s.classList.add('text-slate-300'); else { s.classList.toggle('text-amber-500', i < selectedRating); s.classList.toggle('text-slate-300', i >= selectedRating); } }); });
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
            el.classList.remove('text-green-600', 'text-amber-600', 'text-red-600');
            if (m >= open && m < closing) { el.textContent = 'Open'; el.classList.add('text-green-600'); }
            else if (m >= closing && m < closed) { el.textContent = 'Closing Soon'; el.classList.add('text-amber-600'); }
            else { el.textContent = 'Closed'; el.classList.add('text-red-600'); }
        }
        updateBusinessStatus();
        setInterval(updateBusinessStatus, 60000);
    </script>
</body>
</html>
