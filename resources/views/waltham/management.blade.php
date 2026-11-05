<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/logo.png">
    <meta name="description" content="Waltham Insurance Brokers Ltd - Innovative collaborative solutions for risk management and insurance broking in Nigeria.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Management Profile - Waltham Insurance Brokers Ltd</title>

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
                                          text-accent font-semibold bg-primary-50">
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
                              text-accent bg-primary-50 font-semibold">
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
            <p class="text-accent font-semibold mb-2 fade-in">Our Team</p>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 fade-in" style="transition-delay: 0.1s">Management Profile</h1>
            <p class="text-gray-200 text-lg fade-in" style="transition-delay: 0.2s">Experienced professionals driving excellence at Waltham Insurance Brokers.</p>
        </div>
    </div>
</section>


<div class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="/" class="hover:text-primary transition-colors">Home</a>
            <span class="mx-2">/</span>
            <span class="text-primary font-medium">Management Profile</span>
        </nav>
    </div>
</div>


<section class="py-16 md:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

        
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden fade-in">
            <div class="md:flex">
                <div class="md:w-64 bg-gradient-to-br from-primary to-primary-700 p-6 flex flex-col items-center justify-center text-center flex-shrink-0">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-3">
                        <span class="text-2xl font-bold text-white">AS</span>
                    </div>
                    <h3 class="text-white font-bold text-lg">Abubakar Aminu Sani</h3>
                    <p class="text-accent text-sm font-medium mt-1">CEO</p>
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>With over a decade of experience in business development, monitoring & evaluation in public and private sector organizations, Abubakar Sani was the Business Director Northern region at Royal Exchange Insurance Plc. This position required him to develop and implement the business development strategy of the firm.</p>
                        <p>Prior to his new role as the Managing Director/Chief Operating Officer at Harusons International Limited, he was the Business Development and Relationship Officer at the Kaduna Electricity Distribution Company Limited, Sokoto Area Office. In this role he was responsible for overseeing customer enumeration & classification; meeting cash collection targets of the company; implementing strategies to ensure effective energy management and complete coordination of all activities in Sokoto and Zamfara States (i.e. Marketing & Sales, Technical, Metering, Finance and administration).</p>
                        <p>He has served in the past at Royal Exchange Plc, as Kano Branch Manager as well as in the Oil & Gas Unit, National Planning Commission as a Monitoring & Evaluation Expert, Galaxy Backbone Ltd as a Network Specialist.</p>
                        <p>Abubakar Sani holds an M.Sc. in Information Technology for Management from Coventry University, United Kingdom, and a B.Sc. in Sociology from Bayero University Kano. He holds a Professional Certificate in Islamic Banking & Finance from the International Islamic Institute of Banking & Finance, Bayero University Kano, and the Oil & Gas Certificate from Oil & Gas Skills Ltd, Downstream Energy & Risk Management from JLT United Kingdom, amongst others. He is also a member of the Chartered Insurance Institute of Nigeria (CIIN) and NCRIB.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden fade-in" style="transition-delay: 0.1s">
            <div class="md:flex">
                <div class="md:w-64 bg-gradient-to-br from-accent to-accent-700 p-6 flex flex-col items-center justify-center text-center flex-shrink-0">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-3">
                        <span class="text-2xl font-bold text-white">AR</span>
                    </div>
                    <h3 class="text-white font-bold text-lg">Amina Ahmed Rufa'i</h3>
                    <p class="text-primary-100 text-sm font-medium mt-1">Management</p>
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Amina has both Bachelor and Master Degree in Business Administration from Bayero University, Kano. She has worked with various organizations: First Bank of Nigeria Plc, Capital Bank International Nigeria Ltd and Royal Exchange Insurance Plc.</p>
                        <p>She is a firm believer in excellence and a natural leader. She had worked for Industrial and General Insurance Plc for six years. She rose through the ladder to the position of Unit Manager with the experience in Finance, Sales and Personnel Management.</p>
                        <p>She has been a financial Consultant for three years with Munoma Nigeria Ltd. She was a General Manager at Prima Solutions Insurance Brokers Limited for over two years. She has attended various training and workshops on marketing and management across Nigeria.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden fade-in" style="transition-delay: 0.2s">
            <div class="md:flex">
                <div class="md:w-64 bg-gradient-to-br from-primary to-primary-700 p-6 flex flex-col items-center justify-center text-center flex-shrink-0">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-3">
                        <span class="text-2xl font-bold text-white">MS</span>
                    </div>
                    <h3 class="text-white font-bold text-lg">Mohammed Salau</h3>
                    <p class="text-accent text-sm font-medium mt-1">Management</p>
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-gray-600 text-sm leading-relaxed">
                        <p>Mohammed is a graduate from Ahmadu Bello University, Zaria. He has worked with different underwriting firms including Nigerian-French Insurance and Cornerstone Insurance.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden fade-in" style="transition-delay: 0.3s">
            <div class="md:flex">
                <div class="md:w-64 bg-gradient-to-br from-accent to-accent-700 p-6 flex flex-col items-center justify-center text-center flex-shrink-0">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-3">
                        <span class="text-2xl font-bold text-white">AB</span>
                    </div>
                    <h3 class="text-white font-bold text-lg">Abdul Bichi</h3>
                    <p class="text-primary-100 text-sm font-medium mt-1">Management</p>
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Abdullahi Halilu Bichi holds a B.sc, Business Administration from East London University, England. He started his insurance career from FIN Insurance Ltd, Abuja, where he served as an Underwriter/Marketing staff. He later moved to Royal Exchange Prudential Life as Head of Underwriting Department. Abdullahi has over the years attended numerous trainings and workshops on Insurance marketing.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden fade-in" style="transition-delay: 0.4s">
            <div class="md:flex">
                <div class="md:w-64 bg-gradient-to-br from-primary to-primary-700 p-6 flex flex-col items-center justify-center text-center flex-shrink-0">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-3">
                        <span class="text-2xl font-bold text-white">MJ</span>
                    </div>
                    <h3 class="text-white font-bold text-lg">Mohammed T. Jimah</h3>
                    <p class="text-accent text-sm font-medium mt-1">Management</p>
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Mohammed is a graduate of Engineering Physics from Obafemi Awolowo University, Ile – Ife, Osun. He started his Insurance professional career with SAHAB Insurance Brokers in charge of Northern Region and later moved to Glanville & Enthoven Insurance Brokers as Manager of Abuja Branch. In 2008, he got an offer from Royal Exchange to head their Life Insurance Department and later rose to the position of senior manager before he moved to Staco Insurance PLC and later Waltham Insurance Brokers Ltd.</p>
                        <p>Jimah is a member Chartered Insurance Institute of Nigeria (CIIN).</p>
                    </div>
                </div>
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