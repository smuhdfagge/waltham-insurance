<x-site-layout :title="'Our services | '.config('company.legal_name')" description="Group life, fire and special perils, motor, marine, bonds, liability and other insurance services from Waltham Insurance Brokers Ltd.">
    <x-page-hero eyebrow="What we offer" title="Our services" :breadcrumb="['Services' => null]">
        Comprehensive insurance solutions tailored to protect your assets and personnel.
    </x-page-hero>

    <section class="bg-white py-16 sm:py-20">
        <div class="container-site">
            <x-section-heading eyebrow="We work with clients to" title="Our commitment to you" />
            <ol class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    'Ensure compliance with Nigerian law and international maritime law',
                    'Determine potential risk exposures',
                    'Provide a risk transfer mechanism to protect against such exposures',
                    'Provide the widest coverage at the lowest cost',
                    'Provide protection and indemnity cover against potential liabilities',
                    'Ensure smooth and quick claim settlement, to keep cash flowing in your organisation',
                ] as $item)
                    <li class="flex gap-4 rounded-2xl border border-line p-5">
                        <span class="font-display text-2xl font-bold text-accent">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="text-sm leading-6 text-ink">{{ $item }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="bg-canvas py-16 sm:py-20">
        <div class="container-site">
            <x-section-heading eyebrow="Detailed breakdown" title="Insurance services" />
            @if ($services->isEmpty())
                <div class="card p-12 text-center text-ink-light">Our service list is being updated. Please <a href="{{ route('contact') }}" class="font-semibold text-brand">contact us</a>.</div>
            @else
                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($services as $service)
                        <a href="{{ route('services.show', $service->slug) }}" class="card group flex flex-col p-7 transition hover:-translate-y-1 hover:border-brand/40 hover:shadow-lift">
                            <div class="flex items-start justify-between">
                                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand/10 text-brand transition group-hover:bg-brand group-hover:text-white"><x-icon :name="$service->icon" class="h-6 w-6" /></span>
                                <x-icon name="arrow-up-right" class="h-5 w-5 text-ink-light/50 transition group-hover:text-brand" />
                            </div>
                            <h2 class="mt-6 text-xl font-semibold">{{ $service->title }}</h2>
                            <p class="mt-2 flex-1 text-sm leading-6 text-ink-light">{{ $service->summary }}</p>
                            <span class="link-arrow mt-6">Read the details <x-icon name="arrow-right" class="h-4 w-4" /></span>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
