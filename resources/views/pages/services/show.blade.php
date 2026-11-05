@php
    $company = config('company');
    // Descriptions are edited in the admin as Markdown. Raw HTML is escaped and
    // unsafe links are dropped, so this is safe to render.
    $body = \Illuminate\Support\Str::markdown($service->description, ['html_input' => 'escape', 'allow_unsafe_links' => false]);
@endphp

<x-site-layout :title="$service->title.' | '.$company['legal_name']" :description="$service->summary">
    <x-page-hero eyebrow="Our services" :title="$service->title" :breadcrumb="['Services' => route('services.index'), $service->title => null]">
        {{ $service->summary }}
        <x-slot:actions>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('contact', ['service' => $service->title]) }}" class="btn-primary btn-lg !bg-accent hover:!bg-accent-dark">Enquire about this cover <x-icon name="arrow-right" class="h-4 w-4" /></a>
                <a href="tel:{{ $company['phone_raw'] }}" class="btn-ghost-light btn-lg"><x-icon name="phone" class="h-4 w-4" /> {{ $company['phone'] }}</a>
            </div>
        </x-slot:actions>
    </x-page-hero>

    <section class="bg-white py-16 sm:py-20">
        <div class="container-site grid gap-12 lg:grid-cols-[1fr_360px]">
            <article>
                <div class="mb-8 flex items-center gap-4">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand/10 text-brand"><x-icon :name="$service->icon" class="h-7 w-7" /></span>
                    <h2 class="text-2xl font-bold">About this cover</h2>
                </div>
                <div class="rich-text max-w-3xl">{!! $body !!}</div>
                <p class="mt-10 max-w-3xl rounded-xl bg-canvas p-4 text-xs leading-5 text-ink-light">Cover, limits and exclusions depend on the policy arranged with the insurer. We will explain the terms of your policy in full before cover is placed.</p>
            </article>

            <aside class="space-y-4 lg:sticky lg:top-28 lg:self-start">
                <div class="card p-7">
                    <p class="eyebrow">Free advice</p>
                    <h2 class="mt-2 text-xl font-bold">Talk to us about {{ $service->title }}</h2>
                    <p class="mt-2 text-sm leading-6 text-ink-light">We give free, objective advice and negotiate wider cover at the most economic premium.</p>
                    <a href="{{ route('contact', ['service' => $service->title]) }}" class="btn-primary mt-6 w-full">Send an enquiry</a>
                    <div class="mt-6 space-y-3 border-t border-line pt-6 text-sm">
                        <a href="tel:{{ $company['phone_raw'] }}" class="flex items-center gap-3 font-semibold hover:text-brand"><x-icon name="phone" class="h-4 w-4 text-brand" /> {{ $company['phone'] }}</a>
                        @if ($company['phone_secondary'])
                            <a href="tel:{{ $company['phone_secondary_raw'] }}" class="flex items-center gap-3 font-semibold hover:text-brand"><x-icon name="phone" class="h-4 w-4 text-brand" /> {{ $company['phone_secondary'] }}</a>
                        @endif
                        <a href="mailto:{{ $company['email'] }}" class="flex items-center gap-3 font-semibold hover:text-brand"><x-icon name="mail" class="h-4 w-4 text-brand" /> {{ $company['email'] }}</a>
                    </div>
                </div>
                <a href="{{ route('claims') }}" class="flex items-center justify-between rounded-2xl bg-ink p-5 text-sm font-semibold text-white transition hover:bg-ink-dark">
                    <span>Already a client?<span class="block text-xs font-normal text-white/60">Notify us of a claim</span></span>
                    <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            </aside>
        </div>
    </section>

    @if ($related->isNotEmpty())
        <section class="bg-canvas py-16 sm:py-20">
            <div class="container-site">
                <x-section-heading eyebrow="Explore more" title="Other services" />
                <div class="grid gap-5 md:grid-cols-3">
                    @foreach ($related as $item)
                        <a href="{{ route('services.show', $item->slug) }}" class="card group p-6 transition hover:-translate-y-1 hover:shadow-lift">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand/10 text-brand"><x-icon :name="$item->icon" class="h-5 w-5" /></span>
                            <h3 class="mt-4 text-lg font-semibold group-hover:text-brand">{{ $item->title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-ink-light">{{ $item->summary }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-site-layout>
