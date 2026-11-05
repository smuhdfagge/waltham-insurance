@props(['tone' => 'dark', 'size' => 'md'])

@php
    // On light backgrounds use the full-colour logo artwork. On dark backgrounds
    // the navy wordmark would disappear, so show the mark with a white wordmark.
    $height = ['sm' => 'h-10', 'md' => 'h-14', 'lg' => 'h-16'][$size] ?? 'h-14';
    $mark = ['sm' => 'h-8 w-8', 'md' => 'h-10 w-10', 'lg' => 'h-12 w-12'][$size] ?? 'h-10 w-10';
@endphp

@if ($tone === 'light')
    <span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5']) }}>
        <img src="{{ asset('logo-mark.png') }}" alt="" class="{{ $mark }} shrink-0" width="40" height="40">
        <span class="flex flex-col leading-none">
            <span class="font-display text-[1.1rem] font-bold tracking-tight text-white">Waltham</span>
            <span class="mt-1 text-[0.6rem] font-semibold uppercase tracking-[0.22em] text-white/60">Insurance Brokers</span>
        </span>
        <span class="sr-only">{{ config('company.legal_name') }}</span>
    </span>
@else
    <img {{ $attributes->merge(['class' => $height.' w-auto']) }} src="{{ asset('logo-full.png') }}" alt="{{ config('company.legal_name') }}" width="976" height="331">
@endif
