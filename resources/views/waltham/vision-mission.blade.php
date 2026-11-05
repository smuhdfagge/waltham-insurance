<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/logo.png">
    <meta name="description" content="Waltham Insurance Brokers Ltd - Innovative collaborative solutions for risk management and insurance broking in Nigeria.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vision &amp; Mission - Waltham Insurance Brokers Ltd</title>

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
                              "
                       :class="scrolled
                           ? 'text-gray-700 hover:text-primary hover:bg-gray-100'
                           : 'text-gray-100 hover:text-white hover:bg-white/10'">
                        Home
                    </a>

                    
                    <div class="relative" x-data @click.outside="aboutOpen = false">
                        <button @click="aboutOpen = !aboutOpen"
                                :aria-expanded="aboutOpen.toString()"
                                aria-haspopup="true"
                                aria-controls="about-dropdown"
                                class="flex items-center gap-1 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                                       text-accent font-semibold"
                                :class="scrolled
                                    ? ''
                                    : ''">
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
                                          text-accent font-semibold bg-primary-50">
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
                              text-gray-700 hover:text-primary hover:bg-gray-50">
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
                              text-accent bg-primary-50 font-semibold">
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
        

<section class="hero-gradient pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-accent font-semibold mb-2 fade-in">Our Purpose</p>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 fade-in" style="transition-delay: 0.1s">Vision & Mission</h1>
            <p class="text-gray-200 text-lg fade-in" style="transition-delay: 0.2s">Our guiding principles and aspirations that drive everything we do.</p>
        </div>
    </div>
</section>


<div class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="/" class="hover:text-primary transition-colors">Home</a>
            <span class="mx-2">/</span>
            <span class="text-primary font-medium">Vision & Mission</span>
        </nav>
    </div>
</div>


<section class="py-16 md:py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            
            <div class="relative fade-in">
                <div class="bg-gradient-to-br from-primary to-primary-800 rounded-2xl p-8 md:p-10 text-white h-full">
                    <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                    <div class="w-16 h-1 bg-accent rounded mb-6"></div>
                    <p class="text-lg text-gray-100 leading-relaxed">
                        To position Insurance Broking in Nigeria as a key element of the financial services.
                    </p>
                </div>
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent/20 rounded-full blur-xl"></div>
            </div>

            
            <div class="relative fade-in" style="transition-delay: 0.15s">
                <div class="bg-gradient-to-br from-accent to-accent-700 rounded-2xl p-8 md:p-10 text-white h-full">
                    <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                    <div class="w-16 h-1 bg-primary rounded mb-6"></div>
                    <p class="text-lg text-gray-100 leading-relaxed">
                        To exceed our clients' expectations by defining, designing and delivering solutions that meet their needs.
                    </p>
                </div>
                <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-primary/20 rounded-full blur-xl"></div>
            </div>
        </div>
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