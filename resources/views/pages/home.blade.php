@php
    $company = config('company');
    $years = max(5, intdiv((int) date('Y') - $company['founded'], 5) * 5);
    $stats = [
        ['value' => $years.'+', 'label' => 'Years of experience'],
        ['value' => $services->count(), 'label' => 'Insurance service lines'],
        ['value' => 'NAICOM', 'label' => 'Licensed broker'],
        ['value' => 'NCRIB', 'label' => 'Registered member'],
    ];
    $pillars = [
        ['icon' => 'users', 'title' => 'Client-centric approach', 'text' => 'Our client-centric and data-driven approach enhances our processes in developing best-in-class risk solutions.'],
        ['icon' => 'chart', 'title' => 'Data-driven processes', 'text' => "For more than 30 years, Waltham's pedigree has been associated with innovative risk solutions for a cross-section of consumer segments."],
        ['icon' => 'globe', 'title' => 'Industry experience', 'text' => 'Our ownership structure is well positioned to provide excellent services to our local and international customers.'],
    ];
    $commitments = [
        'Ensure compliance with Nigerian law and international maritime law',
        'Determine potential risk exposures',
        'Provide a risk transfer mechanism to protect against those exposures',
        'Provide the widest coverage at the lowest cost',
        'Provide protection and indemnity cover against potential liabilities',
        'Ensure smooth and quick claim settlement, so cash keeps flowing in your organisation',
    ];
@endphp

<x-site-layout>
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden bg-ink">
        <div class="hero-grid absolute inset-0 -z-10" aria-hidden="true"></div>
        <div class="absolute -right-32 -top-48 -z-10 h-[36rem] w-[36rem] rounded-full bg-brand/60 blur-3xl" aria-hidden="true"></div>
        <div class="absolute -bottom-64 -left-40 -z-10 h-[30rem] w-[30rem] rounded-full bg-accent/20 blur-3xl" aria-hidden="true"></div>

        <div class="container-site grid items-center gap-12 py-16 sm:py-20 lg:grid-cols-[1.1fr_0.9fr] lg:py-24">
            <div data-reveal>
                <p class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-3 py-1 text-xs font-medium text-white/80">
                    <span class="h-1.5 w-1.5 rounded-full bg-accent"></span> {{ $company['tagline'] }} · Since {{ $company['founded'] }}
                </p>
                <h1 class="mt-6 font-display text-4xl font-bold leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Good hands for <span class="text-accent">the good life.</span>
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-8 text-white/75">
                    {{ $company['legal_name'] }} has remained at the forefront of providing innovative, collaborative risk solutions to strategic sectors of the Nigerian economy, from personal and private wealth management to commerce and heavy industries.
                </p>
                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('services.index') }}" class="btn-primary btn-lg !bg-accent hover:!bg-accent-dark">Explore our services <x-icon name="arrow-right" class="h-4 w-4" /></a>
                    <a href="{{ route('contact', ['service' => 'Request a proposal']) }}" class="btn-ghost-light btn-lg">Request a proposal</a>
                </div>
                <ul class="mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-white/70">
                    <li class="flex items-center gap-2"><x-icon name="check-circle" class="h-5 w-5 text-accent" /> Licensed by NAICOM</li>
                    <li class="flex items-center gap-2"><x-icon name="check-circle" class="h-5 w-5 text-accent" /> Member of NCRIB</li>
                    <li class="flex items-center gap-2"><x-icon name="check-circle" class="h-5 w-5 text-accent" /> Free, objective advice</li>
                </ul>
            </div>

            {{-- Service finder --}}
            <div data-reveal>
                <div class="rounded-2xl bg-white p-6 shadow-lift sm:p-8">
                    <p class="text-sm font-semibold text-ink-light">Find the right cover</p>
                    <h2 class="mt-1 text-2xl font-bold">What would you like to protect?</h2>
                    <ul class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3">
                        @foreach ($services->take(6) as $service)
                            <li>
                                <a href="{{ route('services.show', $service->slug) }}" class="group flex h-full flex-col items-start gap-3 rounded-xl border border-line p-4 transition hover:-translate-y-0.5 hover:border-brand hover:shadow-soft">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand/10 text-brand transition group-hover:bg-brand group-hover:text-white"><x-icon :name="$service->icon" class="h-5 w-5" /></span>
                                    <span class="text-sm font-semibold leading-5 text-ink">{{ $service->title }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-line pt-5 text-sm">
                        <a href="{{ route('services.index') }}" class="link-arrow">All {{ $services->count() }} services <x-icon name="arrow-right" class="h-4 w-4" /></a>
                        <a href="tel:{{ $company['phone_raw'] }}" class="flex items-center gap-2 font-semibold text-ink hover:text-brand"><x-icon name="phone" class="h-4 w-4" /> {{ $company['phone'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="border-b border-line bg-white">
        <dl class="container-site grid grid-cols-2 py-10 lg:grid-cols-4 lg:divide-x lg:divide-line">
            @foreach ($stats as $stat)
                <div class="flex flex-col-reverse px-4 py-4 text-center lg:py-2" data-reveal>
                    <dt class="mt-1 text-sm text-ink-light">{{ $stat['label'] }}</dt>
                    <dd class="font-display text-3xl font-bold text-brand sm:text-4xl">{{ $stat['value'] }}</dd>
                </div>
            @endforeach
        </dl>
    </section>

    {{-- About --}}
    <section class="bg-white py-20 sm:py-24">
        <div class="container-site grid items-center gap-14 lg:grid-cols-2">
            <div data-reveal>
                <x-section-heading eyebrow="About Waltham" title="A fully integrated risk management and insurance broking firm" />
                <div class="space-y-5 text-lg leading-8 text-ink-light">
                    <p>Waltham Insurance Brokers Ltd was incorporated in {{ $company['founded'] }} with registration number {{ preg_replace('/\D/', '', $company['rc_number']) }}. The firm is fully licensed by the National Insurance Commission and is a member of the Nigerian Council of Registered Insurance Brokers.</p>
                    <p>We have grown into one of the most respected broking firms in the country. We understand Nigeria's history and its present business dynamics, and our experience positions us to help clients make the right decisions to face the future.</p>
                </div>
                <a href="{{ route('about') }}" class="link-arrow mt-8">Our story <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>

            <div class="relative" data-reveal>
                <div class="absolute -inset-4 -z-10 rounded-[2rem] bg-gradient-to-br from-brand/15 via-canvas to-accent/15" aria-hidden="true"></div>
                <div class="card p-8 sm:p-10">
                    <img src="{{ asset('logo-full.png') }}" alt="" class="h-14 w-auto" width="976" height="331">
                    <dl class="mt-8 divide-y divide-line text-sm">
                        <div class="flex justify-between gap-4 py-3.5"><dt class="text-ink-light">Incorporated</dt><dd class="font-semibold">{{ $company['founded'] }}</dd></div>
                        <div class="flex justify-between gap-4 py-3.5"><dt class="text-ink-light">Registration</dt><dd class="font-semibold">{{ $company['rc_number'] }}</dd></div>
                        <div class="flex justify-between gap-4 py-3.5"><dt class="text-ink-light">Licensed by</dt><dd class="text-right font-semibold">National Insurance Commission</dd></div>
                        <div class="flex justify-between gap-4 py-3.5"><dt class="text-ink-light">Member of</dt><dd class="text-right font-semibold">NCRIB</dd></div>
                        <div class="flex justify-between gap-4 py-3.5"><dt class="text-ink-light">Head office</dt><dd class="text-right font-semibold">Garki, Abuja</dd></div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    {{-- What we do --}}
    <section class="bg-canvas py-20 sm:py-24">
        <div class="container-site">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="What we do" title="Creating value for our clients" class="!mb-0">
                    We have a culture of creating value for our clients, with a team of experts who have deep knowledge in managing and advising on risk.
                </x-section-heading>
                <a href="{{ route('what-we-do') }}" class="btn-secondary shrink-0">How we work</a>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @foreach ($pillars as $pillar)
                    <div class="card p-7" data-reveal>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand text-white"><x-icon :name="$pillar['icon']" class="h-6 w-6" /></span>
                        <h3 class="mt-6 text-lg font-semibold">{{ $pillar['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-ink-light">{{ $pillar['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="bg-white py-20 sm:py-24">
        <div class="container-site">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <x-section-heading eyebrow="Our services" title="Comprehensive insurance solutions" class="!mb-0">
                    Protection for your organisation's assets and personnel, arranged with the widest coverage at the most economic premium.
                </x-section-heading>
                <a href="{{ route('services.index') }}" class="btn-secondary shrink-0">View all services</a>
            </div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($services as $service)
                    <a href="{{ route('services.show', $service->slug) }}" class="card group flex flex-col p-6 transition hover:-translate-y-1 hover:border-brand/40 hover:shadow-lift" data-reveal>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand/10 text-brand transition group-hover:bg-brand group-hover:text-white"><x-icon :name="$service->icon" class="h-6 w-6" /></span>
                        <h3 class="mt-5 text-lg font-semibold">{{ $service->title }}</h3>
                        <p class="mt-2 flex-1 text-sm leading-6 text-ink-light">{{ $service->summary }}</p>
                        <span class="link-arrow mt-5">Learn more <x-icon name="arrow-right" class="h-4 w-4 transition group-hover:translate-x-0.5" /></span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Commitment --}}
    <section class="bg-ink py-20 text-white sm:py-24">
        <div class="container-site grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="eyebrow !text-accent">We work with clients to</p>
                <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">Our commitment to you</h2>
                <p class="mt-4 max-w-lg text-lg leading-8 text-white/70">With a rich mix of experience blended with an innovative response to the ever-changing operating environment, Waltham has continued to help its clients manage their risks efficiently.</p>
                <a href="{{ route('proposal') }}" class="btn-ghost-light btn-lg mt-8">Read our proposal</a>
            </div>
            <ol class="grid gap-4 sm:grid-cols-2">
                @foreach ($commitments as $item)
                    <li class="flex gap-4 rounded-2xl border border-white/10 bg-white/5 p-5">
                        <span class="font-display text-2xl font-bold text-accent">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="text-sm leading-6 text-white/80">{{ $item }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Vision & mission --}}
    <section class="bg-canvas py-20 sm:py-24">
        <div class="container-site grid gap-6 md:grid-cols-2">
            <div class="card p-8 sm:p-10" data-reveal>
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand text-white"><x-icon name="eye" class="h-6 w-6" /></span>
                <p class="eyebrow mt-6">Our vision</p>
                <p class="mt-3 font-display text-2xl font-semibold leading-snug">To position insurance broking in Nigeria as a key element of the financial services.</p>
            </div>
            <div class="card p-8 sm:p-10" data-reveal>
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent text-white"><x-icon name="target" class="h-6 w-6" /></span>
                <p class="eyebrow mt-6 !text-accent-dark">Our mission</p>
                <p class="mt-3 font-display text-2xl font-semibold leading-snug">To exceed our clients' expectations by defining, designing and delivering solutions that meet their needs.</p>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
