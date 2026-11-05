<x-site-layout :title="'Proposal for your insurances | '.config('company.legal_name')" description="Waltham's professional approach to managing your organisation's insurance needs, with free and objective advice.">
    <x-page-hero eyebrow="Our proposal" title="Proposal for your insurances" :breadcrumb="['Proposal' => null]">
        Our professional approach to managing your insurance needs.
        <x-slot:actions>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('contact', ['service' => 'Request a proposal']) }}" class="btn-primary btn-lg !bg-accent hover:!bg-accent-dark">Request a proposal <x-icon name="arrow-right" class="h-4 w-4" /></a>
                <a href="{{ route('services.index') }}" class="btn-ghost-light btn-lg">View our services</a>
            </div>
        </x-slot:actions>
    </x-page-hero>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site grid gap-14 lg:grid-cols-[1.15fr_0.85fr]">
            <div class="space-y-6 text-lg leading-8 text-ink-light">
                <p class="font-display text-2xl font-semibold leading-snug text-ink">Changing circumstances and requirements have led to new attitudes and methods of dealing with risks.</p>
                <p>Accordingly, in the context of your organisation it is necessary to obtain correct underwriting data as well as a proper description of your various operations.</p>
                <p>Imbued with a high sense of professionalism and objectivity, our capabilities in insurance broking are founded upon our expertise in handling various classes of insurance, our in-depth knowledge of the market and the ascertained insurance requirements of our diverse clients.</p>
                <p>We turn the challenges of our clients into innovative, creative and practical solutions through our commitment to developing a thorough knowledge and understanding of the insurance business risks to which our clients are exposed, and provide them with specific services tailored to their respective needs.</p>
                <p>Given our knowledge of the insurance market, we are in a position to negotiate wider coverage at the most economic premium cost, resulting in substantial savings in your insurance premium.</p>
                <p>We possess the requisite professional expertise for handling all classes of insurance, and we provide <strong class="font-semibold text-ink">free, objective advice</strong> for the protection of your organisation's <strong class="font-semibold text-ink">assets and personnel</strong> on the classes of insurance we are duly authorised to handle.</p>
            </div>
            <aside class="lg:sticky lg:top-28 lg:self-start">
                <div class="card p-7">
                    <p class="eyebrow">Classes we handle</p>
                    <ul class="mt-5 divide-y divide-line">
                        @foreach ($services as $service)
                            <li>
                                <a href="{{ route('services.show', $service->slug) }}" class="group flex items-center justify-between gap-3 py-3 text-sm font-semibold hover:text-brand">
                                    <span class="flex items-center gap-3"><x-icon :name="$service->icon" class="h-4 w-4 text-brand" /> {{ $service->title }}</span>
                                    <x-icon name="arrow-right" class="h-4 w-4 text-ink-light/50 group-hover:text-brand" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
