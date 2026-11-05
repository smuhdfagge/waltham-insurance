@php
    $company = config('company');
    $highlights = [
        ['icon' => 'shield-check', 'title' => 'Licensed and registered', 'text' => 'Fully licensed by the National Insurance Commission.'],
        ['icon' => 'award', 'title' => 'NCRIB member', 'text' => 'Member of the Nigerian Council of Registered Insurance Brokers.'],
        ['icon' => 'sparkles', 'title' => 'Innovative solutions', 'text' => 'Innovative, collaborative solutions for strategic sectors of the economy.'],
        ['icon' => 'globe', 'title' => 'National reach', 'text' => 'Services for local and international customers.'],
    ];
@endphp

<x-site-layout :title="'About us | '.$company['legal_name']" :description="'Learn about the history and heritage of '.$company['legal_name'].', a NAICOM-licensed insurance broker founded in '.$company['founded'].'.'">
    <x-page-hero eyebrow="About us" title="Our story and heritage" :breadcrumb="['About us' => null]">
        Our history, our values and our commitment to excellence in insurance broking.
    </x-page-hero>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site grid gap-14 lg:grid-cols-[1.15fr_0.85fr]">
            <div>
                <x-section-heading eyebrow="Introduction" :title="$company['tagline']" />
                <div class="space-y-5 text-lg leading-8 text-ink-light">
                    <p>{{ $company['legal_name'] }} has remained at the forefront of providing innovative, collaborative solutions to various strategic sectors of the Nigerian economy. Our industry specialty services range from personal and private wealth management to commerce and heavy industries.</p>
                    <p>Since 1991, Waltham has grown into a fully integrated risk management and insurance broking firm, and ranks among the most respected broking firms in the country. We have historical experience of Nigeria, understand its present business dynamics, and our experience positions us to help our clients make the right decisions to face the future.</p>
                    <p>With a rich mix of experience blended with an innovative response to the ever-changing operating environment, Waltham has continued to help its clients manage their risks efficiently.</p>
                </div>
            </div>
            <aside class="lg:pt-16">
                <div class="card p-8">
                    <p class="eyebrow">At a glance</p>
                    <dl class="mt-6 grid grid-cols-2 gap-6">
                        <div><dt class="text-sm text-ink-light">Incorporated</dt><dd class="mt-1 font-display text-3xl font-bold">{{ $company['founded'] }}</dd></div>
                        <div><dt class="text-sm text-ink-light">Registration</dt><dd class="mt-1 font-display text-3xl font-bold">{{ preg_replace('/\D/', '', $company['rc_number']) }}</dd></div>
                        <div><dt class="text-sm text-ink-light">Licensed by</dt><dd class="mt-1 font-display text-3xl font-bold">NAICOM</dd></div>
                        <div><dt class="text-sm text-ink-light">Member of</dt><dd class="mt-1 font-display text-3xl font-bold">NCRIB</dd></div>
                    </dl>
                </div>
                <div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-1">
                    <a href="{{ route('directors') }}" class="card group flex items-center justify-between p-5 transition hover:border-brand/40"><span class="flex items-center gap-3 text-sm font-semibold"><x-icon name="award" class="h-5 w-5 text-brand" /> Board of directors</span><x-icon name="arrow-right" class="h-4 w-4 text-ink-light group-hover:text-brand" /></a>
                    <a href="{{ route('management') }}" class="card group flex items-center justify-between p-5 transition hover:border-brand/40"><span class="flex items-center gap-3 text-sm font-semibold"><x-icon name="users" class="h-5 w-5 text-brand" /> Management profile</span><x-icon name="arrow-right" class="h-4 w-4 text-ink-light group-hover:text-brand" /></a>
                </div>
            </aside>
        </div>
    </section>

    <section class="bg-canvas py-16 sm:py-20">
        <div class="container-site grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($highlights as $item)
                <div class="card p-6" data-reveal>
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand/10 text-brand"><x-icon :name="$item['icon']" class="h-5 w-5" /></span>
                    <h3 class="mt-5 text-lg font-semibold">{{ $item['title'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-ink-light">{{ $item['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site max-w-4xl">
            <x-section-heading eyebrow="Our journey" title="History of the company" align="center" />
            <ol class="relative space-y-10 border-l-2 border-line pl-8">
                <li class="relative">
                    <span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-brand ring-4 ring-white"></span>
                    <p class="font-display text-xl font-bold text-brand">{{ $company['founded'] }}</p>
                    <p class="mt-2 text-base leading-7 text-ink-light">Waltham Insurance Brokers Ltd is incorporated with registration number {{ preg_replace('/\D/', '', $company['rc_number']) }}, fully licensed by the National Insurance Commission and a member of the Nigerian Council of Registered Insurance Brokers.</p>
                </li>
                <li class="relative">
                    <span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-brand ring-4 ring-white"></span>
                    <p class="font-display text-xl font-bold text-brand">1991 onwards</p>
                    <p class="mt-2 text-base leading-7 text-ink-light">The firm grows into a fully integrated risk management and insurance broking business, serving sectors from personal and private wealth management to commerce and heavy industries.</p>
                </li>
                <li class="relative">
                    <span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-accent ring-4 ring-white"></span>
                    <p class="font-display text-xl font-bold text-accent-dark">Today</p>
                    <p class="mt-2 text-base leading-7 text-ink-light">Ranked among the most respected broking firms in Nigeria, Waltham continues to help local and international clients manage their risks efficiently.</p>
                </li>
            </ol>
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
