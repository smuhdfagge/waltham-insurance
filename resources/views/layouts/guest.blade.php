<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">

        <title>Sign in · {{ config('company.name') }}</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-canvas font-sans text-ink antialiased">
        <div class="grid min-h-screen lg:grid-cols-[0.9fr_1.1fr]">
            <aside class="relative isolate hidden overflow-hidden bg-ink px-10 py-10 text-white lg:flex lg:flex-col lg:justify-between xl:px-16">
                <div class="hero-grid absolute inset-0 -z-10" aria-hidden="true"></div>
                <div class="absolute -right-32 -top-32 -z-10 h-96 w-96 rounded-full bg-brand/40 blur-3xl" aria-hidden="true"></div>
                <div>
                    <a href="{{ route('home') }}" class="inline-flex"><x-logo tone="light" size="lg" /></a>
                    <div class="mt-24 max-w-md">
                        <p class="eyebrow !text-brand-light">Admin workspace</p>
                        <h1 class="mt-5 font-display text-5xl font-bold leading-tight text-white">Keep your risk strategy moving.</h1>
                        <p class="mt-6 max-w-sm text-base leading-8 text-white/70">Manage services, leadership profiles and client enquiries from one place.</p>
                    </div>
                </div>
                <p class="flex items-center gap-2 text-sm text-white/60"><x-icon name="lock" class="h-4 w-4" /> Authorised staff only. Activity may be monitored.</p>
            </aside>

            <main class="flex min-h-screen flex-col justify-center px-5 py-8 sm:px-10 lg:px-16 xl:px-24">
                <div class="mx-auto w-full max-w-md">
                    <div class="mb-10 lg:hidden">
                        <a href="{{ route('home') }}" class="inline-flex"><x-logo /></a>
                    </div>
                    <div class="rounded-2xl border border-line bg-white p-6 shadow-soft sm:p-8">
                        {{ $slot }}
                    </div>
                    <p class="mt-6 text-center text-sm text-ink-light"><a href="{{ route('home') }}" class="font-semibold hover:text-brand">← Back to the website</a></p>
                </div>
            </main>
        </div>
    </body>
</html>
