@props(['eyebrow' => null, 'title' => null, 'bold' => null, 'light' => null, 'align' => 'left', 'tone' => 'dark'])

@php
    // `bold` / `light` are kept for backwards compatibility with older views.
    $heading = $title ?? trim(($bold ?? '').' '.($light ?? ''));
    $centered = $align === 'center';
@endphp

<div {{ $attributes->merge(['class' => 'mb-10 max-w-3xl '.($centered ? 'mx-auto text-center' : '')]) }}>
    @if ($eyebrow)
        <p class="eyebrow {{ $tone === 'light' ? '!text-brand-light' : '' }}">{{ $eyebrow }}</p>
    @endif
    <h2 class="mt-3 font-display text-3xl font-bold leading-tight tracking-tight sm:text-4xl {{ $tone === 'light' ? 'text-white' : 'text-ink' }}">{{ $heading }}</h2>
    @if (trim($slot))
        <p class="mt-4 text-lg leading-8 {{ $tone === 'light' ? 'text-white/70' : 'text-ink-light' }}">{{ $slot }}</p>
    @endif
</div>
