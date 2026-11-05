<x-admin-layout title="Social & WhatsApp">
    @php
        $input = 'mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand';
    @endphp

    <div class="mb-8">
        <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Website settings</p>
        <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Social media &amp; WhatsApp</h1>
        <p class="mt-2 max-w-2xl text-sm leading-6 text-ink-light">Links you add here appear in the website header, footer and contact page. Leave a field empty to hide that network.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.social.update') }}" class="grid max-w-5xl gap-6 xl:grid-cols-[1.2fr_0.8fr]" x-data="{ number: @js(old('whatsapp_number', $values['whatsapp_number'])), message: @js(old('whatsapp_message', $values['whatsapp_message'])) }">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="rounded-xl border border-alert/20 bg-alert/10 px-4 py-3 text-sm text-alert-dark xl:col-span-2"><p class="font-bold">Please check the form.</p><ul class="mt-1 list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif

        <section class="rounded-2xl border border-ink/10 bg-white p-6 shadow-sm sm:p-8" aria-labelledby="social-title">
            <h2 id="social-title" class="text-xl font-bold text-ink">Social media profiles</h2>
            <p class="mt-1 text-sm text-ink-light">Paste the full address of each profile page.</p>
            <div class="mt-6 space-y-5">
                @foreach ($networks as $network => $meta)
                    @php $field = 'social_'.$network; @endphp
                    <label class="block">
                        <span class="flex items-center gap-2 text-sm font-bold text-ink"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-canvas text-ink"><x-social-icon :network="$network" /></span>{{ $meta['label'] }}</span>
                        <input type="url" name="{{ $field }}" value="{{ old($field, $values[$field]) }}" placeholder="{{ $meta['placeholder'] }}" inputmode="url" autocomplete="off" class="{{ $input }} @error($field) !border-alert @enderror">
                        @error($field)<span class="mt-1 block text-xs text-alert">{{ $message }}</span>@enderror
                    </label>
                @endforeach
            </div>
        </section>

        <div class="space-y-6">
            <section class="rounded-2xl border border-ink/10 bg-white p-6 shadow-sm sm:p-8" aria-labelledby="whatsapp-title">
                <h2 id="whatsapp-title" class="flex items-center gap-2 text-xl font-bold text-ink"><span class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#25D366] text-white"><x-social-icon network="whatsapp" class="h-5 w-5" /></span> WhatsApp chat</h2>
                <p class="mt-1 text-sm text-ink-light">Visitors tap “Chat on WhatsApp” to start a conversation with this number.</p>

                <label class="mt-6 block">
                    <span class="text-sm font-bold text-ink">WhatsApp number</span>
                    <input type="tel" name="whatsapp_number" x-model="number" placeholder="0803 661 3580" autocomplete="off" class="{{ $input }} @error('whatsapp_number') !border-alert @enderror">
                    <span class="mt-1 block text-xs text-ink-light">Local numbers starting with 0 are converted to +234 automatically.</span>
                    @error('whatsapp_number')<span class="mt-1 block text-xs text-alert">{{ $message }}</span>@enderror
                </label>

                <label class="mt-5 block">
                    <span class="text-sm font-bold text-ink">Pre-filled message <span class="font-normal text-ink-light">(optional)</span></span>
                    <textarea name="whatsapp_message" x-model="message" rows="3" maxlength="300" class="{{ $input }}"></textarea>
                    <span class="mt-1 block text-xs text-ink-light">Shown in the visitor’s chat box, ready to send.</span>
                </label>

                <label class="mt-5 flex items-start gap-3 rounded-xl border border-ink/10 bg-canvas p-4">
                    <input type="hidden" name="whatsapp_button" value="0">
                    <input type="checkbox" name="whatsapp_button" value="1" @checked(old('whatsapp_button', $values['whatsapp_button']) === '1') class="mt-0.5 rounded border-ink/30 text-brand focus:ring-brand">
                    <span class="text-sm"><span class="font-bold text-ink">Show the floating chat button</span><span class="mt-0.5 block text-xs text-ink-light">A green WhatsApp button in the bottom corner of every public page.</span></span>
                </label>

                @if ($whatsappUrl)
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand hover:text-brand-dark">Test the saved chat link <x-icon name="external" class="h-4 w-4" /></a>
                @endif
            </section>

            <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-xl border border-ink/15 px-5 py-3 text-sm font-bold text-ink hover:bg-canvas">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-ink px-5 py-3 text-sm font-bold text-white hover:bg-ink-dark">Save settings</button>
            </div>
        </div>
    </form>
</x-admin-layout>
