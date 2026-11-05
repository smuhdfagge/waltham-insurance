@php
    $company = config('company');
    $steps = [
        ['icon' => 'shield', 'title' => 'Make everyone and everything safe', 'text' => 'Get help for anyone who is hurt and take reasonable steps to prevent further loss or damage.'],
        ['icon' => 'phone', 'title' => 'Notify us immediately', 'text' => 'Call or email us as soon as an incident happens that is likely to result in a claim. Quote your policy number if you have it.'],
        ['icon' => 'camera', 'title' => 'Gather the evidence', 'text' => 'Photos, receipts, police reports and witness details all help the insurer assess and settle your claim.'],
        ['icon' => 'user-circle', 'title' => 'We handle the insurer for you', 'text' => 'We present your claim, follow up with the insurer and work for a smooth and quick settlement.'],
    ];
    $documents = [
        'Your policy number and contact details',
        'Date, time and location of the incident',
        'A short description of what happened',
        'Photos or video of any damage',
        'A police report for theft, burglary or road accidents',
        'Receipts, valuations or proof of ownership',
        'Details of anyone else involved, including witnesses',
    ];
@endphp

<x-site-layout :title="'Claims | '.$company['legal_name']" :description="'How to notify '.$company['legal_name'].' of a claim, and how we support you to a smooth and quick settlement.'">
    <x-page-hero eyebrow="Claims" title="We are with you when you need to claim" :breadcrumb="['Claims' => null]">
        Ensuring smooth and quick claim settlement is part of our commitment to you, so your organisation's cash flow continues.
        <x-slot:actions>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="tel:{{ $company['phone_raw'] }}" class="btn-primary btn-lg !bg-accent hover:!bg-accent-dark"><x-icon name="phone" class="h-4 w-4" /> Call {{ $company['phone'] }}</a>
                <a href="{{ route('contact', ['service' => 'Claim notification']) }}#enquiry" class="btn-ghost-light btn-lg">Notify us online</a>
            </div>
        </x-slot:actions>
    </x-page-hero>

    <section class="bg-white py-16 sm:py-24">
        <div class="container-site">
            <x-section-heading eyebrow="How claims work" title="Four steps to a claim" />
            <ol class="grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($steps as $step)
                    <li class="card relative p-6" data-reveal>
                        <div class="flex items-center justify-between">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand text-white"><x-icon :name="$step['icon']" class="h-5 w-5" /></span>
                            <span class="font-display text-3xl font-bold text-ink/10">0{{ $loop->iteration }}</span>
                        </div>
                        <h3 class="mt-5 text-lg font-semibold">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-ink-light">{{ $step['text'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="bg-canvas py-16 sm:py-24">
        <div class="container-site grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
            <div class="card p-8 sm:p-10">
                <h2 class="text-2xl font-bold">What to have ready</h2>
                <p class="mt-2 text-ink-light">Don't wait until you have everything. Notify us first and send the rest when you can.</p>
                <ul class="mt-6 space-y-3">
                    @foreach ($documents as $item)
                        <li class="flex gap-3 text-sm leading-6">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand/10 text-brand"><x-icon name="check" class="h-3 w-3" /></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="space-y-5">
                <div class="rounded-2xl bg-ink p-8 text-white">
                    <p class="eyebrow !text-accent">Call us</p>
                    <a href="tel:{{ $company['phone_raw'] }}" class="mt-3 block font-display text-3xl font-bold text-white hover:text-accent">{{ $company['phone'] }}</a>
                    @if ($company['phone_secondary'])
                        <a href="tel:{{ $company['phone_secondary_raw'] }}" class="mt-1 block font-display text-xl font-semibold text-white/80 hover:text-accent">{{ $company['phone_secondary'] }}</a>
                    @endif
                    <p class="mt-3 text-sm leading-6 text-white/70">For serious incidents such as road accidents, fire, flood or burglary, please call so we can act quickly.</p>
                </div>
                <div class="card p-8">
                    <p class="eyebrow">Email us</p>
                    <a href="mailto:{{ $company['email'] }}?subject={{ rawurlencode('Claim notification') }}" class="mt-3 block break-all text-xl font-bold hover:text-brand">{{ $company['email'] }}</a>
                    <p class="mt-3 text-sm leading-6 text-ink-light">Include your name, policy number and a short description of what happened.</p>
                </div>
            </div>
        </div>
    </section>
</x-site-layout>
