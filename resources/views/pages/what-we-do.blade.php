@php
    $company = config('company');
    $pillars = [
        ['icon' => 'users', 'title' => 'Client-centric approach', 'text' => 'Our client-centric and data-driven approach enhances our processes in developing best-in-class risk solutions.'],
        ['icon' => 'chart', 'title' => 'Data-driven processes', 'text' => "For more than 30 years, Waltham's pedigree has been associated with providing innovative risk solutions to a cross-section of consumer segments."],
        ['icon' => 'globe', 'title' => 'Industry experience', 'text' => 'The ownership structure of the company is well positioned to provide excellent services to our local and international customers.'],
    ];
@endphp

<x-site-layout :title="'What we do | '.$company['legal_name']" description="Waltham creates value for clients through expert risk management, insurance broking and advisory services.">
    <x-page-hero eyebrow="Our expertise" title="What we do" :breadcrumb="['About' => route('about'), 'What we do' => null]">
        Creating value for our clients through expert risk management and advisory.
    </x-page-hero>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site grid items-start gap-14 lg:grid-cols-[1.1fr_0.9fr]">
            <div>
                <x-section-heading eyebrow="Our culture" title="Creating value for our clients" />
                <div class="space-y-5 text-lg leading-8 text-ink-light">
                    <p>At Waltham Insurance Brokers Limited we have a culture of creating value for our clients. Waltham has a team of experts with deep knowledge in managing and advising on risks. For more than 30 years, Waltham's pedigree has been associated with providing innovative risk solutions to a cross-section of consumer segments.</p>
                    <p>Our client-centric and data-driven approach enhances our processes in developing best-in-class risk solutions.</p>
                    <p>The ownership structure of the company is well positioned to provide excellent services to our local and international customers.</p>
                </div>
            </div>
            <div class="rounded-2xl bg-ink p-8 text-white sm:p-10">
                <p class="eyebrow !text-accent">How we help</p>
                <ul class="mt-6 space-y-4">
                    @foreach (['Identify and assess the risks your organisation is exposed to', 'Design risk transfer programmes that fit your operations', 'Negotiate the widest cover at the most economic premium', 'Support you through every claim to a quick, fair settlement'] as $item)
                        <li class="flex gap-3 text-sm leading-6 text-white/80"><span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-accent text-white"><x-icon name="check" class="h-3 w-3" /></span>{{ $item }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('services.index') }}" class="btn-ghost-light mt-8">See our services <x-icon name="arrow-right" class="h-4 w-4" /></a>
            </div>
        </div>
    </section>

    <section class="bg-canvas py-16 sm:py-20">
        <div class="container-site grid gap-6 md:grid-cols-3">
            @foreach ($pillars as $pillar)
                <div class="card p-7" data-reveal>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand text-white"><x-icon :name="$pillar['icon']" class="h-6 w-6" /></span>
                    <h2 class="mt-6 text-lg font-semibold">{{ $pillar['title'] }}</h2>
                    <p class="mt-2 text-sm leading-6 text-ink-light">{{ $pillar['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
