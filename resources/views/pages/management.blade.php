<x-site-layout :title="'Management | '.config('company.legal_name')" description="Meet the experienced professionals who manage Waltham Insurance Brokers Ltd.">
    <x-page-hero eyebrow="Our team" title="Management profile" :breadcrumb="['About' => route('about'), 'Management' => null]">
        Experienced professionals driving excellence at Waltham Insurance Brokers.
    </x-page-hero>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site">
            @if ($people->isEmpty())
                <div class="card p-12 text-center text-ink-light">Management profiles are being updated. Please check back soon.</div>
            @else
                <div class="grid gap-10 lg:grid-cols-[260px_1fr]">
                    <nav class="hidden lg:block" aria-label="Management team">
                        <ul class="sticky top-28 space-y-1">
                            @foreach ($people as $member)
                                <li><a href="#{{ \Illuminate\Support\Str::slug($member->name) }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-semibold text-ink hover:bg-canvas">@include('pages.partials.person-avatar', ['member' => $member, 'size' => 'h-8 w-8 text-[11px] !ring-2']) {{ $member->name }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    <div class="space-y-6">
                        @foreach ($people as $member)
                            <article id="{{ \Illuminate\Support\Str::slug($member->name) }}" class="card scroll-mt-28 p-6 sm:p-10" data-reveal>
                                <header class="flex flex-col gap-5 sm:flex-row sm:items-center">
                                    @include('pages.partials.person-avatar', ['member' => $member, 'size' => 'h-20 w-20 text-xl'])
                                    <div>
                                        <h2 class="text-2xl font-semibold">{{ $member->name }}</h2>
                                        <p class="mt-1 text-sm font-semibold text-brand">{{ $member->role }}</p>
                                    </div>
                                </header>
                                @if ($member->bio)
                                    <div class="mt-6 max-w-3xl space-y-4 text-base leading-8 text-ink-light">
                                        @foreach (preg_split("/\R{2,}/", trim($member->bio)) as $paragraph)
                                            <p>{{ $paragraph }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    @include('pages.partials.cta')
</x-site-layout>
