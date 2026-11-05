<x-site-layout :title="'Board of directors | '.config('company.legal_name')" description="Meet the board of directors guiding Waltham Insurance Brokers Ltd.">
    <x-page-hero eyebrow="Leadership" title="Board of directors" :breadcrumb="['About' => route('about'), 'Board of directors' => null]">
        Meet the distinguished leaders guiding {{ config('company.legal_name') }}
    </x-page-hero>

    <section class="bg-canvas py-16 sm:py-24">
        <div class="container-site">
            @if ($people->isEmpty())
                <div class="card p-12 text-center text-ink-light">Board profiles are being updated. Please check back soon.</div>
            @else
                <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($people as $member)
                        <li class="card flex flex-col items-center p-8 text-center {{ $loop->first ? 'sm:col-span-2 lg:col-span-3 lg:flex-row lg:text-left lg:gap-8' : '' }}" data-reveal>
                            @include('pages.partials.person-avatar', ['member' => $member, 'size' => $loop->first ? 'h-28 w-28 text-3xl' : 'h-20 w-20 text-xl'])
                            <div class="{{ $loop->first ? 'mt-5 lg:mt-0' : 'mt-5' }}">
                                <h2 class="{{ $loop->first ? 'text-2xl' : 'text-lg' }} font-semibold">{{ $member->name }}</h2>
                                <p class="mt-1 text-sm font-semibold {{ $loop->first ? 'text-accent-dark' : 'text-brand' }}">{{ $member->role }}</p>
                                @if ($member->bio)
                                    <p class="mt-3 text-sm leading-6 text-ink-light">{{ $member->bio }}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            <p class="mt-10 text-center text-sm text-ink-light">Looking for the people who run the business day to day? <a href="{{ route('management') }}" class="font-semibold text-brand hover:text-brand-dark">Meet our management team</a>.</p>
        </div>
    </section>
</x-site-layout>
