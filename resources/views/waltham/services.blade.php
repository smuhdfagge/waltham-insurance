<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/logo.png">
    <meta name="description" content="Waltham Insurance Brokers Ltd - Innovative collaborative solutions for risk management and insurance broking in Nigeria.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Our Services - Waltham Insurance Brokers Ltd</title>

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
                                  text-accent font-semibold"
                           :class="scrolled
                               ? ''
                               : ''">
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
                              text-gray-700 hover:text-primary hover:bg-gray-50">
                        Management
                    </a>
                                    <a href="/services"
                       @click="mobileMenu = false"
                       class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200
                              text-accent bg-primary-50 font-semibold">
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
            <p class="text-accent font-semibold mb-2 fade-in">What We Offer</p>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 fade-in" style="transition-delay: 0.1s">Our Services</h1>
            <p class="text-gray-200 text-lg fade-in" style="transition-delay: 0.2s">Comprehensive insurance solutions tailored to protect your assets and personnel.</p>
        </div>
    </div>
</section>


<div class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="/" class="hover:text-primary transition-colors">Home</a>
            <span class="mx-2">/</span>
            <span class="text-primary font-medium">Services</span>
        </nav>
    </div>
</div>


<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
            <p class="section-subtitle">We Work With Clients To</p>
            <h2 class="section-title">Our Commitment to You</h2>
            <div class="section-divider mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                                        <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">01</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Ensure compliance with the Nigerian law and international maritime law</p>
                </div>
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0.05s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">02</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Determine potential risk exposures</p>
                </div>
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0.1s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">03</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Provide risk transfer mechanism to protect against such exposures.</p>
                </div>
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0.15s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">04</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Providing the widest coverage and at the lowest cost.</p>
                </div>
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0.2s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">05</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Providing Protection and Indemnity cover against potential liabilities.</p>
                </div>
                            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg hover:border-accent/30 transition-all duration-300 fade-in" style="transition-delay: 0.25s">
                    <div class="text-3xl font-bold text-accent/20 mb-2">06</div>
                    <p class="text-gray-700 text-sm leading-relaxed">Ensuring smooth and quick claim settlement, in order to ensure continued cash flow in the organisation.</p>
                </div>
                    </div>
    </div>
</section>


<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 fade-in">
            <p class="section-subtitle">Detailed Breakdown</p>
            <h2 class="section-title">Insurance Services</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="space-y-4" x-data="{ open: null }">

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in">
                <button @click="open = open === 1 ? null : 1" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Group Life Assurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 1" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>The Group Life Assurance Scheme is a Death-in-Service scheme designed to provide benefit to dependents or beneficiaries of deceased member of staff covered under the scheme while in active service of the organization. The death covered benefit is payable as a lump-sum amount of the death of any member of staff. The benefit also called the Death Sum Assured is usually expressed as a three times of members' annual salary or other preferred basic.</p>
                        <p>The Group Life Assurance Scheme is the cheapest form of life assurance cover and the underwriting requirements is not as stringent obtainable under an individual life assurance policy.</p>
                        <p>The cost (premium) represent only a very small addition to the employer's cost and makes a substantial improvement to the amount of death benefit available under a staff retirement benefit scheme.</p>
                        <h4 class="font-semibold text-gray-800 mt-4">Information Requirements</h4>
                        <p>To enable us implement the scheme; we will immediately require the following information:</p>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Approval by your organization to appoint us as the underwriter</li>
                            <li>Agreed commencement date for the scheme.</li>
                            <li>Normal Retirement Ages for male and female.</li>
                            <li>Individual information on each employee as follows: Full Names, Date of Birth, Salary / Total Emoluments.</li>
                        </ul>
                        <p>However, premium payment is based on the sum assured and age next birthday of members. It is non-contribution; in other words, the payment rests solely on the organization.</p>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.05s">
                <button @click="open = open === 2 ? null : 2" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Fire and Special Perils</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 2" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Provides indemnity against the risks of fire and special perils including:</p>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Lightning</li>
                            <li>Explosions</li>
                            <li>Aircraft (and other aerial devices dropped therefrom)</li>
                            <li>Riot, Strikes, Locked-out Workers</li>
                            <li>Malicious damage</li>
                            <li>Earthquake or Volcanic eruption</li>
                            <li>Storm, Tempest and Flood and Tornado</li>
                            <li>Bush Fire</li>
                            <li>Escape of Water from any tank, apparatus or pipe</li>
                            <li>Impact by any road vehicle or animal</li>
                        </ul>
                        <h4 class="font-semibold text-gray-800 mt-4">In respect of:</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Office Buildings (and of furnished staff residential accommodation being the property of the Insured)</li>
                            <li>Fixtures, Fittings and Utensils</li>
                            <li>Office Furniture and Furnishings – Counters, Bookshelves, Cabinets, Safes, Tables, Chairs etc.</li>
                            <li>Office Equipment – Computers, Typewriters, Photocopiers, Calculators etc.</li>
                            <li>Plant and Machinery, e.g. Generators, Fire Extinguishers etc.</li>
                            <li>Stock of Books, Stationery, Journals, Magazines, Microfilms, Video/Audio Tapes, Newspapers, Archival Material etc.</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.1s">
                <button @click="open = open === 3 ? null : 3" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Burglary and House Breaking Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 3" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Indemnified the Insured against the risk of burglary and house breaking involving actual forcible and violent breaking into or out a building or any attempt threat. The element of forcible entry is one of the main ingredients for the substantiation of burglary claim order to distinguish it from ordinary theft.</p>
                        <h4 class="font-semibold text-gray-800">Cover normally arranged in respect of:</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Contents of Offices (and of furnished staff residential accommodation being the property of the Insured)</li>
                            <li>Fixtures, Fittings and Utensils</li>
                            <li>House Hold Furniture and Furnishings</li>
                            <li>House Hold Equipment – Electrical and Electronic Goods</li>
                            <li>Plant and Machinery e.g. Generators being the property of the Insured</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.15s">
                <button @click="open = open === 4 ? null : 4" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Motor Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 4" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Under this class of insurance, only two types of cover are normally granted in the Local market namely:</p>
                        <div class="pl-4 space-y-3">
                            <div>
                                <h4 class="font-semibold text-gray-800">1. Third Party</h4>
                                <p>Which indemnifies the insured against his legal liability to Third parties (including passengers) for bodily injury and Third Party property damaged.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">2. Comprehensive</h4>
                                <p>Which in addition to the cover provided by Third party, indemnifies the insured against; (a) Loss or damage to the insured vehicle as a result of accidental collision or overturning, Fire, theft e.t.c, and (b) Medical Expenses for injury to the occupants of the car.</p>
                            </div>
                        </div>
                        <p>These polices are valid only in Nigeria, but an extension of cover can be granted at an additional premium for us within ECOWAS countries under the ECOWAS Brown Card Scheme.</p>
                        <h4 class="font-semibold text-gray-800">Premium rebates can be granted when:</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>More than one car is insured.</li>
                            <li>No claim is made under the policy during the period of Insurance immediately preceding the renewal date of the policy. The rebate is calculated on a percentage of the renewal premium starting from 20% after first claim-free year and increasing up to 50% maximum in the fifth or more consecutive years.</li>
                        </ul>
                        <p>Additions cover for enhanced security may be procured on respect, at an additional premium in respect of (a) Strike, Riot and Civil Commotion. (b) Increased Third Party Property Damage and (c) Personal Accident Benefits. These additional covers are highly recommended for your consideration.</p>
                        <p>New Motor Cycles can also be covered on Comprehensive Basis.</p>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.2s">
                <button @click="open = open === 5 ? null : 5" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Workmen's Compensation Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 5 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 5" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Covers the Insured's Legal liability to pay compensation to all employees for personal injury or death as well as medical and transportation expenses as stipulated by the Workmen's Compensation Decree No. 17 of 1987 which imposes a strict liability on all employers of labour in this regard. This type of policy is meant to provide compensation to the beneficiaries for deaths, personal injury or illness arising from occupational hazards only.</p>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.25s">
                <button @click="open = open === 6 ? null : 6" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Group Personal Accident</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 6 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 6" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Provides compensation for the beneficiaries protected there under in the event of an accident resulting in death, permanent total disablement, temporary total disablement or temporary partial disablement in respect of which Fixed Capital Benefits are payable. In addition, underwriters reimburse, up to a fixed limit, medical expenses incurred in connection with the incident.</p>
                        <p>Periodic Benefits which are either Fixed Sums or sums up to Fixed Maxima falling due weekly during temporary, total or partial disablement, for a limited period.</p>
                        <p>Group Personal Accident can be arranged for all full-time employees, or for selected groups e.g. clerical and Managerial position.</p>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.3s">
                <button @click="open = open === 7 ? null : 7" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Money Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 7 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 7" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Covers loss of money in the following circumstances:</p>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Money in transit within a pre-determined limit</li>
                            <li>Cash float in Safes and/or on premises during business hours.</li>
                            <li>Cash in custody of key employees during business hours.</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.35s">
                <button @click="open = open === 8 ? null : 8" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Fidelity Guarantee Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 8 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 8" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Provides indemnity for the Insured against any direct loss (of money, securities and or other property belonging to the insured or for which the insured is legally responsible) which they may sustain by reason of any fraudulent or dishonest act(s) of the Insured's employee(s) (acting alone or in collusion with other(s).</p>
                        <h4 class="font-semibold text-gray-800">Committed:</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>During the period such an employee is guaranteed and</li>
                            <li>During the un-interrupted service of such an employee</li>
                        </ul>
                        <h4 class="font-semibold text-gray-800">Discovered:</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>During the period such an employee is guaranteed or</li>
                            <li>Within twelve (12) months of the lapsing of the insurance</li>
                            <li>But not later than twelve (12) months after the termination of such employment.</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.4s">
                <button @click="open = open === 9 ? null : 9" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Bonds</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 9 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 9" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">a. Bid or Tender Bonds</h4>
                            <p>Bid Bonds are required in connection with submission of Tenders for contracts with public authorities and private owners. The object is to guarantee that the Bidder, if awarded the contract, will enter into it and furnish the prescribed Performance Bond.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">b. Performance Bond</h4>
                            <p>This commits the surety to ensuring that the physical work called for by the contract bonded is completed and turned over to the owner in a finished state. It does not commit the surety to any "payment" obligations in respect of lines, suppliers, Subcontractors or any other parties.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">c. Advance Payment Bond</h4>
                            <p>In cases where the obliged finances a contractor by advance payments on the contract, he can secure repayment of the advance by means of a bond. The amount guaranteed should decrease in accordance with the portion of the work performed. Usually, a percentage of the monthly bills is fixed to reflect this.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">d. Supply Contract Bonds</h4>
                            <p>These are bonds guaranteeing the fulfillment of contracts for furnishing material, supplies and merchandise of various sorts. Generally, the measure of liability under a supply contract bond, in the event of a contractors' default, is the difference between the contract price and the cost of procuring the supplies elsewhere.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">e. Customs Bonds</h4>
                            <p>These are procured to protect the Government against a company failing to pay customs duty on dutiable merchandise once duty has been assessed.</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.45s">
                <button @click="open = open === 10 ? null : 10" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-accent-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Public Liability Insurance</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 10 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 10" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>Protects the insured in respect of sums which they may become legally liable to pay as damages consequent upon accidental bodily injury or illness of any Third party, whether fatal or not, or accidental loss of or damage to business and on his premises. Legal costs and expenses are payable in addition.</p>
                        <p>Given therefore, the opportunity as one of the local brokers on the account, we would insist at Underwriters' expense that a survey of all your installations be carried out by knowledgeable Surveyors in Oil industry. In addition, a similar survey would have to be carried out in respect of all your organization's other assets, including these of the Joint Ventures in which it has vested interest.</p>
                        <p>Armed with a respect on the outcome of such an exercise, we would be in a position not only to negotiate favorable rates for your organization, we would also be opportune to deliberate on policy terms and conditions to ensure that these are no less favorable than what obtains in international markets. For a proper administration of such an account, the organization would be required to pay premium promptly and also advise us immediately on any incident likely to result in a claim.</p>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in" style="transition-delay: 0.5s">
                <button @click="open = open === 11 ? null : 11" class="w-full flex items-center justify-between p-5 md:p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900">Marine Hull & Cargo</h3>
                    </div>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 11 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === 11" x-collapse x-cloak class="px-5 md:px-6 pb-6">
                    <div class="border-t pt-4 text-gray-600 text-sm leading-relaxed space-y-3">
                        <p>The Nigerian Maritime industry is very dynamic and regulated. The Insurance Act 2003, Sec 67, requires that all imports to Nigeria must be insured by a Nigerian registered insurer. Waltham's marine division supports global trade by arranging quick and suitable insurance cover to enable businesses protect their imports, adhere to the law and maintain a competitive status in the industry.</p>
                        <p>The Coastal and inland shipping ACT (Cabotage ACT) enacted in 2003 restricts the use of foreign vessels in domestic coastal trade in Nigeria. All vessels operating within Nigerian Territorial waters are also required by law to have insurance cover from Nigerian registered insurers.</p>
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