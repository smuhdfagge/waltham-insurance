@props(['tone' => 'dark', 'size' => 'md'])

@php
    // The logo mark with a live-text wordmark. `tone` describes the text colour:
    // "dark" (navy) for light backgrounds, "light" (white) for dark backgrounds.
    $mark = ['sm' => 'h-8 w-8', 'md' => 'h-10 w-10', 'lg' => 'h-12 w-12'][$size] ?? 'h-10 w-10';
    $word = ['sm' => 'text-base', 'md' => 'text-[1.1rem]', 'lg' => 'text-xl'][$size] ?? 'text-[1.1rem]';
    $light = $tone === 'light';
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5']) }}>
    <img src="{{ asset('logo-mark.png') }}" alt="" class="{{ $mark }} shrink-0" width="40" height="40">
    <span class="flex flex-col leading-none">
        <span class="font-display {{ $word }} font-bold tracking-tight {{ $light ? 'text-white' : 'text-brand' }}">Waltham</span>
        <span class="mt-1 text-[0.6rem] font-semibold uppercase tracking-[0.22em] {{ $light ? 'text-white/60' : 'text-ink-light' }}">Insurance Brokers</span>
    </span>
    <span class="sr-only">{{ config('company.legal_name') }}</span>
</span>
