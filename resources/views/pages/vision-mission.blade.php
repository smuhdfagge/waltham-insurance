<x-site-layout :title="'Vision & mission | '.config('company.legal_name')" description="The vision and mission that guide Waltham Insurance Brokers Ltd.">
    <x-page-hero eyebrow="Our purpose" title="Vision and mission" :breadcrumb="['About' => route('about'), 'Vision & mission' => null]">
        The guiding principles and aspirations that drive everything we do.
    </x-page-hero>

    <section class="bg-canvas py-16 sm:py-24">
        <div class="container-site grid gap-6 lg:grid-cols-2">
            <article class="card relative overflow-hidden p-8 sm:p-12" data-reveal>
                <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-brand/10" aria-hidden="true"></div>
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand text-white"><x-icon name="eye" class="h-7 w-7" /></span>
                <h2 class="mt-8 text-sm font-semibold uppercase tracking-[0.16em] text-brand">Our vision</h2>
                <p class="mt-4 font-display text-3xl font-semibold leading-tight">To position insurance broking in Nigeria as a key element of the financial services.</p>
            </article>
            <article class="card relative overflow-hidden p-8 sm:p-12" data-reveal>
                <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-accent/10" aria-hidden="true"></div>
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-accent text-white"><x-icon name="target" class="h-7 w-7" /></span>
                <h2 class="mt-8 text-sm font-semibold uppercase tracking-[0.16em] text-accent-dark">Our mission</h2>
                <p class="mt-4 font-display text-3xl font-semibold leading-tight">To exceed our clients' expectations by defining, designing and delivering solutions that meet their needs.</p>
            </article>
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
