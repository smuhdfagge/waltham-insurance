@php
    $company = config('company');
@endphp

<x-site-layout :title="'Contact us | '.$company['legal_name']" :description="'Contact '.$company['legal_name'].' in Garki, Abuja for insurance broking and risk management advice.'">
    <x-page-hero eyebrow="Get in touch" title="Contact us" :breadcrumb="['Contact' => null]">
        We would love to hear from you. Request a proposal, ask about a class of insurance or notify us of a claim.
    </x-page-hero>

    <section class="bg-canvas py-16 sm:py-20">
        <div class="container-site grid gap-8 lg:grid-cols-[0.85fr_1.15fr]">
            <div class="space-y-5">
                <div class="card p-6">
                    <div class="flex gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand/10 text-brand"><x-icon name="phone" class="h-5 w-5" /></span>
                        <div>
                            <h2 class="text-sm text-ink-light">Phone</h2>
                            <a href="tel:{{ $company['phone_raw'] }}" class="mt-0.5 block text-lg font-semibold hover:text-brand">{{ $company['phone'] }}</a>
                            @if ($company['phone_secondary'])
                                <a href="tel:{{ $company['phone_secondary_raw'] }}" class="block text-lg font-semibold hover:text-brand">{{ $company['phone_secondary'] }}</a>
                            @endif
                            @if ($company['hours'])
                                <p class="mt-1 text-xs text-ink-light">{{ $company['hours'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card p-6">
                    <div class="flex gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand/10 text-brand"><x-icon name="mail" class="h-5 w-5" /></span>
                        <div class="min-w-0">
                            <h2 class="text-sm text-ink-light">Email</h2>
                            <a href="mailto:{{ $company['email'] }}" class="mt-0.5 block break-all text-lg font-semibold hover:text-brand">{{ $company['email'] }}</a>
                        </div>
                    </div>
                </div>
                @if ($whatsappUrl ?? null)
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="card group flex items-center gap-4 p-6 transition hover:border-[#25D366]/60">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#25D366] text-white"><x-social-icon network="whatsapp" class="h-6 w-6" /></span>
                        <span class="flex-1"><span class="block text-sm text-ink-light">WhatsApp</span><span class="mt-0.5 block text-lg font-semibold group-hover:text-[#128C7E]">Chat on WhatsApp</span></span>
                        <x-icon name="arrow-up-right" class="h-5 w-5 text-ink-light/50 group-hover:text-[#128C7E]" />
                    </a>
                @endif
                <div class="card p-6">
                    <div class="flex gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-accent/15 text-accent-dark"><x-icon name="map-pin" class="h-5 w-5" /></span>
                        <div>
                            <h2 class="text-sm text-ink-light">{{ $company['head_office']['name'] }}</h2>
                            <p class="mt-0.5 text-base font-semibold leading-7">{{ $company['head_office']['address'] }}</p>
                        </div>
                    </div>
                </div>
                @if (! empty($socialLinks))
                    <div class="card p-6">
                        <h2 class="text-sm text-ink-light">Follow us</h2>
                        <ul class="mt-3 flex flex-wrap gap-2">
                            @foreach ($socialLinks as $link)
                                <li><a href="{{ $link['url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-lg border border-line px-3 py-2 text-sm font-semibold text-ink transition hover:border-brand hover:text-brand"><x-social-icon :network="$link['key']" /> {{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="rounded-2xl bg-ink p-6 text-sm leading-6 text-white/75">
                    <p class="flex items-center gap-2 font-semibold text-white"><x-icon name="shield-check" class="h-5 w-5 text-accent" /> {{ $company['legal_name'] }}</p>
                    <p class="mt-2">{{ $company['rc_number'] }}. Licensed by the {{ $company['license'] }} and a member of the {{ $company['membership'] }}.</p>
                </div>
            </div>

            <div id="enquiry" class="card scroll-mt-28 p-6 sm:p-10">
                <h2 class="text-2xl font-bold">Send us a message</h2>
                <p class="mt-2 text-sm text-ink-light">Fields marked <span class="text-alert">*</span> are required.</p>
                <div class="mt-8">
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>

    @if (! empty($company['map_query']))
        <section class="bg-canvas pb-20">
            <div class="container-site">
                <div class="overflow-hidden rounded-2xl border border-line shadow-soft">
                    <iframe src="https://www.google.com/maps?q={{ urlencode($company['map_query']) }}&output=embed" class="h-[420px] w-full border-0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" title="Map showing the {{ $company['legal_name'] }} head office"></iframe>
                </div>
            </div>
        </section>
    @endif
</x-site-layout>
