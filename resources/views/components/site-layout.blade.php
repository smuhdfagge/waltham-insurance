@php
    $company = config('company');
    $navServices = $navServices ?? collect();
    $pageTitle = $title ?? $company['legal_name'].' | '.$company['tagline'];
    $pageDescription = $description ?? $company['legal_name'].' is a fully integrated risk management and insurance broking firm in Nigeria, licensed by NAICOM and a member of NCRIB since '.$company['founded'].'.';
    $aboutNav = [
        ['label' => 'About us', 'route' => 'about', 'icon' => 'building', 'text' => 'Our story and heritage since '.$company['founded']],
        ['label' => 'What we do', 'route' => 'what-we-do', 'icon' => 'target', 'text' => 'Creating value through expert risk advice'],
        ['label' => 'Vision & mission', 'route' => 'vision-mission', 'icon' => 'eye', 'text' => 'The principles that guide us'],
        ['label' => 'Board of directors', 'route' => 'directors', 'icon' => 'award', 'text' => 'The leaders guiding Waltham'],
        ['label' => 'Management', 'route' => 'management', 'icon' => 'users', 'text' => 'The professionals running the business'],
    ];
    $aboutActive = request()->routeIs('about', 'what-we-do', 'vision-mission', 'directors', 'management');
    $mainNav = [
        ['label' => 'Proposal', 'route' => 'proposal'],
        ['label' => 'Claims', 'route' => 'claims'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
    $socials = array_filter([
        'linkedin' => $company['linkedin'] ?? null,
        'facebook' => $company['facebook'] ?? null,
        'instagram' => $company['instagram'] ?? null,
        'x-social' => $company['x'] ?? null,
    ]);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-pt-24">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $pageDescription }}">
        <meta name="theme-color" content="#1B348C">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ $company['legal_name'] }}">
        <meta property="og:title" content="{{ $pageTitle }}">
        <meta property="og:description" content="{{ $pageDescription }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('logo.png') }}">
        <meta name="twitter:card" content="summary">
        <title>{{ $pageTitle }}</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="48x48">
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
        @php
            $organisation = [
                '@context' => 'https://schema.org',
                '@type' => 'InsuranceAgency',
                'name' => $company['legal_name'],
                'url' => url('/'),
                'logo' => asset('logo.png'),
                'email' => $company['email'],
                'telephone' => $company['phone_raw'],
                'foundingDate' => (string) $company['founded'],
                'address' => ['@type' => 'PostalAddress', 'streetAddress' => $company['head_office']['address'], 'addressCountry' => 'NG'],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($organisation, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-white text-ink antialiased selection:bg-brand selection:text-white" x-data="{ open: false }" @keydown.escape.window="open = false">
        <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[200] focus:rounded-lg focus:bg-white focus:px-4 focus:py-2 focus:text-ink focus:shadow-lift">Skip to content</a>

        {{-- Utility bar --}}
        <div class="hidden bg-ink text-white/75 md:block">
            <div class="container-site flex h-10 items-center justify-between text-xs">
                <p class="flex items-center gap-2"><x-icon name="shield-check" class="h-4 w-4 text-accent" /> Licensed by NAICOM <span class="text-white/30">·</span> Member of NCRIB <span class="text-white/30">·</span> {{ $company['rc_number'] }}</p>
                <div class="flex items-center gap-6">
                    <a href="mailto:{{ $company['email'] }}" class="flex items-center gap-1.5 hover:text-white"><x-icon name="mail" class="h-3.5 w-3.5" /> {{ $company['email'] }}</a>
                    <a href="tel:{{ $company['phone_raw'] }}" class="flex items-center gap-1.5 hover:text-white"><x-icon name="phone" class="h-3.5 w-3.5" /> {{ $company['phone'] }}</a>
                </div>
            </div>
        </div>

        <header x-data="{ menu: null, scrolled: false }"
                x-init="scrolled = window.scrollY > 8"
                @scroll.window="scrolled = window.scrollY > 8"
                @keydown.escape.window="menu = null"
                :class="scrolled ? 'shadow-soft' : ''"
                class="sticky top-0 z-50 border-b border-line bg-white/95 backdrop-blur transition-shadow">
            <div class="container-site">
                <div class="flex h-[76px] items-center justify-between gap-6">
                    <a href="{{ route('home') }}" class="shrink-0" aria-label="{{ $company['legal_name'] }} home">
                        <x-logo />
                    </a>

                    <nav class="hidden items-center gap-1 lg:flex" aria-label="Main">
                        {{-- About menu --}}
                        <div class="relative" @mouseenter="menu = 'about'" @mouseleave="menu = null">
                            <button type="button" @click="menu = menu === 'about' ? null : 'about'" :aria-expanded="(menu === 'about').toString()" aria-controls="about-menu"
                                    class="inline-flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold transition hover:bg-canvas {{ $aboutActive ? 'text-brand' : 'text-ink' }}">
                                About <x-icon name="chevron-down" class="h-4 w-4 transition" x-bind:class="menu === 'about' && 'rotate-180'" />
                            </button>
                            <div id="about-menu" x-show="menu === 'about'" x-cloak x-transition.opacity.duration.150ms class="absolute left-0 top-full w-[340px] pt-3">
                                <ul class="card space-y-0.5 p-2">
                                    @foreach ($aboutNav as $item)
                                        <li>
                                            <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['route'])) aria-current="page" @endif class="group flex gap-3 rounded-xl p-3 transition hover:bg-canvas">
                                                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-brand/10 text-brand"><x-icon :name="$item['icon']" class="h-5 w-5" /></span>
                                                <span>
                                                    <span class="block text-sm font-semibold text-ink group-hover:text-brand">{{ $item['label'] }}</span>
                                                    <span class="mt-0.5 block text-xs text-ink-light">{{ $item['text'] }}</span>
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Services mega menu --}}
                        <div class="relative" @mouseenter="menu = 'services'" @mouseleave="menu = null">
                            <button type="button" @click="menu = menu === 'services' ? null : 'services'" :aria-expanded="(menu === 'services').toString()" aria-controls="services-menu"
                                    class="inline-flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold transition hover:bg-canvas {{ request()->routeIs('services.*') ? 'text-brand' : 'text-ink' }}">
                                Services <x-icon name="chevron-down" class="h-4 w-4 transition" x-bind:class="menu === 'services' && 'rotate-180'" />
                            </button>
                            <div id="services-menu" x-show="menu === 'services'" x-cloak x-transition.opacity.duration.150ms class="absolute left-1/2 top-full w-[720px] -translate-x-1/2 pt-3">
                                <div class="card grid grid-cols-[1fr_220px] overflow-hidden p-0">
                                    <ul class="grid grid-cols-2 gap-0.5 p-3">
                                        @foreach ($navServices as $item)
                                            <li>
                                                <a href="{{ route('services.show', $item->slug) }}" class="group flex items-center gap-3 rounded-lg px-3 py-2.5 transition hover:bg-canvas">
                                                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand/10 text-brand"><x-icon :name="$item->icon" class="h-4 w-4" /></span>
                                                    <span class="text-sm font-semibold text-ink group-hover:text-brand">{{ $item->title }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="flex flex-col justify-between bg-brand p-5 text-white">
                                        <div>
                                            <p class="text-sm font-semibold">Free, objective advice</p>
                                            <p class="mt-2 text-xs leading-5 text-white/75">We advise on protecting your organisation's assets and personnel at no cost to you.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <a href="{{ route('services.index') }}" class="link-arrow !text-white">All services <x-icon name="arrow-right" class="h-4 w-4" /></a>
                                            <a href="{{ route('proposal') }}" class="link-arrow !text-white/80 hover:!text-white">Our proposal <x-icon name="arrow-right" class="h-4 w-4" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($mainNav as $item)
                            <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['route'])) aria-current="page" @endif
                               class="rounded-lg px-3 py-2 text-sm font-semibold transition hover:bg-canvas {{ request()->routeIs($item['route']) ? 'text-brand' : 'text-ink' }}">{{ $item['label'] }}</a>
                        @endforeach
                    </nav>

                    <div class="hidden items-center gap-3 lg:flex">
                        <a href="{{ route('contact', ['service' => 'Request a proposal']) }}" class="btn-primary">Request a proposal</a>
                    </div>

                    <button type="button" @click="open = true" class="inline-flex h-11 w-11 items-center justify-center rounded-lg border border-line text-ink lg:hidden" aria-label="Open menu" :aria-expanded="open.toString()">
                        <x-icon name="menu" class="h-5 w-5" />
                    </button>
                </div>
            </div>
        </header>

        {{-- Mobile drawer (outside the header so the header's backdrop filter can't clip it) --}}
        <div x-show="open" x-cloak class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true" aria-label="Menu">
            <div x-show="open" x-transition.opacity class="absolute inset-0 bg-ink/50 backdrop-blur-sm" @click="open = false"></div>
            <aside x-show="open"
                   x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                   x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                   class="absolute inset-y-0 right-0 flex w-full max-w-sm flex-col overflow-y-auto bg-white shadow-lift">
                <div class="flex h-[76px] shrink-0 items-center justify-between border-b border-line px-5">
                    <x-logo size="sm" />
                    <button type="button" @click="open = false" class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-line" aria-label="Close menu"><x-icon name="x" class="h-5 w-5" /></button>
                </div>
                <nav class="flex-1 px-5 py-6" aria-label="Mobile">
                    <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2.5 text-base font-semibold text-ink hover:bg-canvas">Home</a>
                    <p class="mt-5 px-3 text-xs font-semibold uppercase tracking-[0.16em] text-ink-light">About</p>
                    <ul class="mt-1">
                        @foreach ($aboutNav as $item)
                            <li><a href="{{ route($item['route']) }}" class="flex items-center gap-2.5 rounded-lg px-3 py-2.5 text-sm font-semibold text-ink hover:bg-canvas"><x-icon :name="$item['icon']" class="h-4 w-4 text-brand" /> {{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                    <p class="mt-5 px-3 text-xs font-semibold uppercase tracking-[0.16em] text-ink-light">Services</p>
                    <ul class="mt-1">
                        @foreach ($navServices as $item)
                            <li><a href="{{ route('services.show', $item->slug) }}" class="flex items-start gap-2.5 rounded-lg px-3 py-2 text-sm font-semibold text-ink hover:bg-canvas"><x-icon :name="$item->icon" class="mt-0.5 h-4 w-4 shrink-0 text-brand" /> {{ $item->title }}</a></li>
                        @endforeach
                        <li><a href="{{ route('services.index') }}" class="block rounded-lg px-3 py-2 text-sm font-semibold text-brand hover:bg-canvas">All services</a></li>
                    </ul>
                    <div class="my-5 border-t border-line"></div>
                    <ul class="space-y-1">
                        @foreach ($mainNav as $item)
                            <li><a href="{{ route($item['route']) }}" class="block rounded-lg px-3 py-2.5 text-base font-semibold text-ink hover:bg-canvas">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class="space-y-3 border-t border-line p-5">
                    <a href="{{ route('contact', ['service' => 'Request a proposal']) }}" class="btn-primary w-full">Request a proposal</a>
                    <a href="tel:{{ $company['phone_raw'] }}" class="btn-secondary w-full"><x-icon name="phone" class="h-4 w-4" /> {{ $company['phone'] }}</a>
                </div>
            </aside>
        </div>

        <main id="main-content">
            {{ $slot }}
        </main>

        <footer class="bg-ink text-white/70">
            <div class="container-site py-16">
                <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr_1.3fr]">
                    <div>
                        <x-logo tone="light" />
                        <p class="mt-5 max-w-xs text-sm leading-7">A fully integrated risk management and insurance broking firm, helping Nigerian businesses and individuals manage their risks since {{ $company['founded'] }}.</p>
                        <p class="mt-4 font-display text-sm font-semibold text-accent">{{ $company['slogan'] }}</p>
                        @if ($socials)
                            <ul class="mt-6 flex gap-2">
                                @foreach ($socials as $network => $url)
                                    <li><a href="{{ $url }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-lg border border-white/15 text-white/80 transition hover:border-white/40 hover:text-white" aria-label="{{ ucfirst(str_replace('-social', '', $network)) }}"><x-icon :name="$network" class="h-4 w-4" /></a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-white">Company</h2>
                        <ul class="mt-4 space-y-2.5 text-sm">
                            @foreach ($aboutNav as $item)
                                <li><a href="{{ route($item['route']) }}" class="hover:text-white">{{ $item['label'] }}</a></li>
                            @endforeach
                            <li><a href="{{ route('proposal') }}" class="hover:text-white">Our proposal</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-white">Services</h2>
                        <ul class="mt-4 space-y-2.5 text-sm">
                            @foreach ($navServices->take(6) as $item)
                                <li><a href="{{ route('services.show', $item->slug) }}" class="hover:text-white">{{ $item->title }}</a></li>
                            @endforeach
                            <li><a href="{{ route('services.index') }}" class="font-semibold text-brand-light hover:text-white">All services</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-white">Contact us</h2>
                        <ul class="mt-4 space-y-3 text-sm">
                            <li class="flex gap-3"><x-icon name="map-pin" class="mt-0.5 h-4 w-4 shrink-0 text-accent" /><span>{{ $company['head_office']['address'] }}</span></li>
                            <li class="flex gap-3"><x-icon name="phone" class="mt-0.5 h-4 w-4 shrink-0 text-accent" /><span><a href="tel:{{ $company['phone_raw'] }}" class="hover:text-white">{{ $company['phone'] }}</a>@if ($company['phone_secondary']), <a href="tel:{{ $company['phone_secondary_raw'] }}" class="hover:text-white">{{ $company['phone_secondary'] }}</a>@endif</span></li>
                            <li class="flex gap-3"><x-icon name="mail" class="mt-0.5 h-4 w-4 shrink-0 text-accent" /><a href="mailto:{{ $company['email'] }}" class="break-all hover:text-white">{{ $company['email'] }}</a></li>
                            @if ($company['hours'])
                                <li class="flex gap-3"><x-icon name="clock" class="mt-0.5 h-4 w-4 shrink-0 text-accent" /><span>{{ $company['hours'] }}</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/10">
                <div class="container-site flex flex-col gap-3 py-6 text-xs leading-6 text-white/50 md:flex-row md:items-center md:justify-between">
                    <p>© {{ date('Y') }} {{ $company['legal_name'] }} {{ $company['rc_number'] }}. All rights reserved.</p>
                    <p class="md:text-right">Licensed by the {{ $company['license'] }}. Member of the {{ $company['membership'] }}.</p>
                </div>
            </div>
        </footer>

        @if (! empty($company['whatsapp']))
            <a href="{{ $company['whatsapp'] }}" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp" class="fixed bottom-5 right-5 z-40 inline-flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-lift transition hover:scale-105">
                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-7 w-7 fill-current"><path d="M20.5 3.5C18.4 1.4 15.6 0.5 12.8 0.5A11.1 11.1 0 0 0 1.7 12.1c-.7 2.4-.1 5 .9 7.1L1 23l3.9-1c2.1 1.1 4.4 1.7 6.8 1.7h.1c3.2 0 6.1-1.1 8.3-3.2 2.2-2.1 3.3-5 3.3-8.1 0-2.8-.9-5.3-2.9-7.3ZM12.8 20.3c-2 0-4-.6-5.7-1.7l-.4-.2-2.3.6.6-2.2-.3-.5A8.9 8.9 0 0 1 3.7 12c0-2.5.9-4.8 2.7-6.6a9 9 0 0 1 6.4-2.7c2.3 0 4.5.9 6.1 2.4 1.6 1.6 2.5 3.8 2.5 6.1 0 4.5-3.6 8.1-8.1 8.1Zm4.5-6.1c-.2-.1-1.4-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.7.8-.8 1-.1.1-.2.1-.4.1s-.9-.3-1.7-.9c-.6-.5-1-1.2-1.1-1.4-.1-.2 0-.3.1-.4l.3-.4c.1-.1.1-.2.2-.4.1-.1 0-.3 0-.4 0-.1-.6-1.5-.8-2.1-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.3c.1.1 1.6 2.5 3.9 3.5.5.2.9.3 1.2.4.6.2 1.1.2 1.5.1.5-.1 1.4-.6 1.6-1.1.3-.6.3-1 .2-1.1-.1-.1-.2-.2-.4-.3Z"/></svg>
            </a>
        @endif

        @livewireScripts
    </body>
</html>
