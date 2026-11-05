<section class="bg-white py-20 sm:py-24">
    <div class="container-site">
        <div class="relative isolate overflow-hidden rounded-3xl bg-brand px-6 py-14 text-center shadow-lift sm:px-12 sm:py-16">
            <div class="hero-grid absolute inset-0 -z-10 opacity-60" aria-hidden="true"></div>
            <div class="absolute -right-24 -top-24 -z-10 h-72 w-72 rounded-full bg-accent/30 blur-3xl" aria-hidden="true"></div>
            <h2 class="mx-auto max-w-2xl text-3xl font-bold text-white sm:text-4xl">Let's talk about protecting your organisation.</h2>
            <p class="mx-auto mt-4 max-w-xl text-lg leading-8 text-white/80">We provide free, objective advice on protecting your assets and personnel, and negotiate wider cover at the most economic premium.</p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <a href="{{ route('contact', ['service' => 'Request a proposal']) }}" class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-6 py-3.5 text-base font-semibold text-brand shadow-sm transition hover:bg-canvas">Request a proposal <x-icon name="arrow-right" class="h-4 w-4" /></a>
                <a href="tel:{{ config('company.phone_raw') }}" class="btn-ghost-light btn-lg"><x-icon name="phone" class="h-4 w-4" /> {{ config('company.phone') }}</a>
            </div>
        </div>
    </div>
</section>
