@props(['eyebrow' => null, 'title', 'breadcrumb' => null])

<section class="relative isolate overflow-hidden bg-ink">
    <div class="hero-grid absolute inset-0 -z-10" aria-hidden="true"></div>
    <div class="absolute -right-40 -top-40 -z-10 h-[28rem] w-[28rem] rounded-full bg-brand/30 blur-3xl" aria-hidden="true"></div>
    <div class="container-site py-16 sm:py-20">
        @if ($breadcrumb)
            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-white/60">
                <ol class="flex flex-wrap items-center gap-2">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    @foreach ($breadcrumb as $label => $url)
                        <li aria-hidden="true">/</li>
                        <li>@if ($url)<a href="{{ $url }}" class="hover:text-white">{{ $label }}</a>@else<span class="text-white/90" aria-current="page">{{ $label }}</span>@endif</li>
                    @endforeach
                </ol>
            </nav>
        @endif
        <div class="max-w-3xl">
            @if ($eyebrow)
                <p class="eyebrow !text-brand-light">{{ $eyebrow }}</p>
            @endif
            <h1 class="mt-3 font-display text-4xl font-bold leading-[1.1] tracking-tight text-white sm:text-5xl">{{ $title }}</h1>
            @if (trim($slot))
                <p class="mt-5 max-w-2xl text-lg leading-8 text-white/75">{{ $slot }}</p>
            @endif
            {{ $actions ?? '' }}
        </div>
    </div>
</section>
