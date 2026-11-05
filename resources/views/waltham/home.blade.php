<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/logo.png">
    <meta name="description" content="Waltham Insurance Brokers Ltd - Innovative collaborative solutions for risk management and insurance broking in Nigeria.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Waltham Insurance Brokers Ltd - Welcome to our Business World</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link rel="preload" as="style" href="/waltham/assets/app.css" /><link rel="modulepreload" as="script" href="/waltham/assets/app.js" /><link rel="stylesheet" href="/waltham/assets/app.css" /><script type="module" src="/waltham/assets/app.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">

    
    
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
         x-data="{ scrolled: false, mobileMenu: false, aboutOpen: false }"
         x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
         :class="scrolled ? 'bg-white shadow-lg' : 'bg-primary/95 backdrop-blur-sm'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">

                
                <a href="/" class="flex items-center flex-shrink-0">
                    <img src="/logo.png" alt="Waltham Insurance Brokers Ltd" class="h-12 md:h-14 w-auto">
                </a>

                
                <div class="hidden lg:flex items-center space-x-1">

                    
                    <a href="/"
                       class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-accent font-semibold"
                       :class="scrolled
                           ? ''
                           : ''">
                        Home
                    </a>

                    
                    <div class="relative" x-data @click.outside="aboutOpen = false">
                        <button @click="aboutOpen = !aboutOpen"
                                :aria-expanded="aboutOpen.toString()"
                                aria-haspopup="true"
                                aria-controls="about-dropdown"
                                class="flex items-center gap-1 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                       "
                                :class="scrolled
                                    ? 'text-gray-700 hover:text-primary hover:bg-gray-100'
                                    : 'text-gray-100 hover:text-white hover:bg-white/10'">
                            About
                            <svg class="w-4 h-4 transition-transform duration-200" :class="aboutOpen ? 'rotate-180' : ''"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="about-dropdown"
                             x-show="aboutOpen" x-cloak
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 py-1 z-10">
                                                            <a href="/about"
                                   @click="aboutOpen = false"
                                   class="block px-4 py-2 text-sm transition-colors duration-150
                                          text-gray-700 hover:text-primary hover:bg-gray-50">
                                    About Us
                                </a>
                                                            <a href="/what-we-do"
                                   @click="aboutOpen = false"
                                   class="block px-4 py-2 text-sm transition-colors duration-150
                                          text-gray-700 hover:text-primary hover:bg-gray-50">
                                    What We Do
                                </a>
                                                            <a href="/vision-mission"
                                   @click="aboutOpen = false"
                                   class="block px-4 py-2 text-sm transition-colors duration-150
                                          text-gray-700 hover:text-primary hover:bg-gray-50">
                                    Vision &amp; Mission
                                </a>
                                                            <a href="/directors"
                                   @click="aboutOpen = false"
                                   class="block px-4 py-2 text-sm transition-colors duration-150
                                          text-gray-700 hover:text-primary hover:bg-gray-50">
                                    Directors
                                </a>
                                                            <a href="/management"
                                   @click="aboutOpen = false"
                                   class="block px-4 py-2 text-sm transition-colors duration-150
                                          text-gray-700 hover:text-primary hover:bg-gray-50">
                                    Management
                                </a>
                                                    </div>
                    </div>

                    
                                            <a href="/services"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                  "
                           :class="scrolled
                               ? 'text-gray-700 hover:text-primary hover:bg-gray-100'
                               : 'text-gray-100 hover:text-white hover:bg-white/10'">
                            Services
                        </a>
                                            <a href="/proposal"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                  "
                           :class="scrolled
                               ? 'text-gray-700 hover:text-primary hover:bg-gray-100'
                               : 'text-gray-100 hover:text-white hover:bg-white/10'">
                            Proposal
                        </a>
                                            <a href="/contact"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                  "
                           :class="scrolled
                               ? 'text-gray-700 hover:text-primary hover:bg-gray-100'
                               : 'text-gray-100 hover:text-white hover:bg-white/10'">
                            Contact
                        </a>
                                    </div>

                
                <button @click="mobileMenu = !mobileMenu"
                        :aria-expanded="mobileMenu.toString()"
                        aria-label="Toggle navigation menu"
                        aria-controls="mobile-menu"
                        class="lg:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                        :class="scrolled ? 'text-primary' : 'text-white'">
                    <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenu" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        
        <div id="mobile-menu"
             x-show="mobileMenu" x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden bg-white shadow-xl border-t">
            <div class="px-4 py-3 space-y-1">
                                    <a href="/"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-accent bg-primary-50 font-semibold">
                        Home
                    </a>
                                    <a href="/about"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        About Us
                    </a>
                                    <a href="/what-we-do"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        What We Do
                    </a>
                                    <a href="/vision-mission"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Vision &amp; Mission
                    </a>
                                    <a href="/directors"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Directors
                    </a>
                                    <a href="/management"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Management
                    </a>
                                    <a href="/services"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Services
                    </a>
                                    <a href="/proposal"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Proposal
                    </a>
                                    <a href="/contact"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Contact
                    </a>
                            </div>
        </div>
    </nav>

    
    <main>
        

<section class="relative min-h-screen flex items-center hero-gradient overflow-hidden">
    
    <div class="absolute inset-0">
        <div class="absolute top-20 right-10 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-white/5 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-white/5 rounded-full"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 md:py-40">
        <div class="max-w-3xl">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-accent text-sm font-medium mb-6 fade-in">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Since 1990
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 fade-in" style="transition-delay: 0.1s">
                Welcome to our<br>
                <span class="text-accent">Business World</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 leading-relaxed mb-8 max-w-2xl fade-in" style="transition-delay: 0.2s">
                Waltham Insurance Brokers Ltd has remained in the forefront of providing innovative collaborative solutions to various strategic sectors of the Nigerian economy. Our industry specialty services range from Personal and Private Wealth Management to Commerce and Heavy Industries.
            </p>
            <div class="flex flex-wrap gap-4 fade-in" style="transition-delay: 0.3s">
                <a href="/services" class="btn-primary">
                    Our Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/contact" class="btn-outline">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

    
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
</section>


<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="slide-left">
                <p class="section-subtitle">About Waltham</p>
                <h2 class="section-title">A Fully Integrated Risk Management & Insurance Broking Firm</h2>
                <div class="section-divider"></div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    In 1990 Waltham Insurance Brokers Ltd was incorporated with registration Number 410208. The firm is fully licensed by the National Insurance Commission and a member of the Nigerian Council of Registered Insurance Brokers.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    IBN has since 1991 grown to a fully integrated risk management and insurance broking firm and ranks one of the top amongst the most respected broking firms in the country. We have historical experience of Nigeria; understand its present business dynamics and our experience positions us to help our clients make the right decisions to face the future.
                </p>
                <a href="/about" class="btn-primary">
                    Learn More
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="slide-right">
                <div class="relative">
                    <div class="bg-primary-50 rounded-2xl p-8 md:p-10">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-3xl md:text-4xl font-bold text-primary mb-1">30+</div>
                                <div class="text-sm text-gray-500">Years Experience</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-3xl md:text-4xl font-bold text-accent mb-1">10+</div>
                                <div class="text-sm text-gray-500">Service Lines</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-3xl md:text-4xl font-bold text-primary mb-1">NAICOM</div>
                                <div class="text-sm text-gray-500">Licensed</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="text-3xl md:text-4xl font-bold text-accent mb-1">NCRIB</div>
                                <div class="text-sm text-gray-500">Member</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent/10 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-primary/10 rounded-full blur-xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
            <p class="section-subtitle">What We Do</p>
            <h2 class="section-title">Creating Value for Our Clients</h2>
            <div class="section-divider mx-auto"></div>
            <p class="text-gray-600 leading-relaxed">
                At Waltham Insurance Brokers Limited we have a culture of creating value for our clients. Waltham has a team of experts with deep knowledge in managing and advising on risks.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-card text-center fade-in" style="transition-delay: 0.1s">
                <div class="w-14 h-14 bg-primary-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-primary mb-2">Client-Centric Approach</h3>
                <p class="text-sm text-gray-600">Our client-centric and data driven approach enhances our processes in developing best in class risk solutions.</p>
            </div>
            <div class="glass-card text-center fade-in" style="transition-delay: 0.2s">
                <div class="w-14 h-14 bg-accent-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-primary mb-2">Data-Driven Processes</h3>
                <p class="text-sm text-gray-600">In the past 30 years, Waltham's pedigree is associated with providing innovative risks solutions to a cross section of consumer segment.</p>
            </div>
            <div class="glass-card text-center fade-in" style="transition-delay: 0.3s">
                <div class="w-14 h-14 bg-primary-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-primary mb-2">Industry Experience</h3>
                <p class="text-sm text-gray-600">The ownership structure of the company is well positioned to provide excellent services to our local and international customers.</p>
            </div>
        </div>
    </div>
</section>


<section class="py-16 md:py-24 bg-primary relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-10 right-20 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-20 w-48 h-48 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/10 fade-in">
                <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Our Vision</h3>
                <p class="text-gray-200 leading-relaxed">To position Insurance Broking in Nigeria as a key element of the financial services.</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/10 fade-in" style="transition-delay: 0.15s">
                <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Our Mission</h3>
                <p class="text-gray-200 leading-relaxed">To exceed our clients' expectations by defining, designing and delivering solutions that meet their needs.</p>
            </div>
        </div>
    </div>
</section>


<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
            <p class="section-subtitle">Our Services</p>
            <h2 class="section-title">Comprehensive Insurance Solutions</h2>
            <div class="section-divider mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                        <div class="service-card fade-in" style="transition-delay: 0s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Group Life Assurance</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.1s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Fire &amp; Special Perils</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.2s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Burglary Insurance</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Motor Insurance</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.1s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Workmen&#039;s Compensation</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.2s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Group Personal Accident</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Money Insurance</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.1s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Fidelity Guarantee</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.2s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Bonds</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Public Liability</h3>
                        </div>
                    </div>
                </div>
                            <div class="service-card fade-in" style="transition-delay: 0.1s">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Marine Hull &amp; Cargo</h3>
                        </div>
                    </div>
                </div>
                    </div>
        <div class="text-center mt-10 fade-in">
            <a href="/services" class="btn-primary">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>


<section class="py-16 md:py-20 bg-gradient-to-r from-primary to-primary-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 fade-in">With a rich-mix of experience blended with innovative response</h2>
        <p class="text-lg text-gray-200 mb-8 fade-in" style="transition-delay: 0.1s">Waltham has continued to successfully help its clients to efficiently manage their risks.</p>
        <a href="/contact" class="btn-primary fade-in" style="transition-delay: 0.2s">
            Get in Touch
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

    </main>

    
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div>
                    <div class="mb-4">
                        <img src="/logo.png" alt="Waltham Insurance Brokers Ltd" class="h-12 w-auto brightness-0 invert">
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">Providing innovative collaborative solutions to various strategic sectors of the Nigerian economy since 1990.</p>
                </div>

                
                <div>
                    <h3 class="text-white font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/about" class="hover:text-accent transition-colors">About Us</a></li>
                        <li><a href="/what-we-do" class="hover:text-accent transition-colors">What We Do</a></li>
                        <li><a href="/services" class="hover:text-accent transition-colors">Our Services</a></li>
                        <li><a href="/directors" class="hover:text-accent transition-colors">Board of Directors</a></li>
                        <li><a href="/management" class="hover:text-accent transition-colors">Management</a></li>
                    </ul>
                </div>

                
                <div>
                    <h3 class="text-white font-semibold mb-4">Our Services</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/services" class="hover:text-accent transition-colors">Group Life Assurance</a></li>
                        <li><a href="/services" class="hover:text-accent transition-colors">Fire & Special Perils</a></li>
                        <li><a href="/services" class="hover:text-accent transition-colors">Motor Insurance</a></li>
                        <li><a href="/services" class="hover:text-accent transition-colors">Marine Hull & Cargo</a></li>
                        <li><a href="/services" class="hover:text-accent transition-colors">Public Liability</a></li>
                    </ul>
                </div>

                
                <div>
                    <h3 class="text-white font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>27, Mahatma Ghandi Street, off Lord Lugard Street, Area 11, Garki, FCT, Abuja.</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>08036613580, 08067713959</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>info@waltham.com.ng</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Waltham Insurance Brokers Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

            document.querySelectorAll('.fade-in, .slide-left, .slide-right').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>