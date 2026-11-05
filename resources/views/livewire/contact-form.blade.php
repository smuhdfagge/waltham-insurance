<form wire:submit.prevent="submitForm" class="space-y-5" novalidate>
    @if ($successMessage)
        <div class="flex gap-3 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-4 text-sm font-medium text-emerald-800" role="status">
            <x-icon name="check-circle" class="h-5 w-5 shrink-0" />
            <span>{{ $successMessage }}</span>
        </div>
    @endif

    <div class="grid gap-5 md:grid-cols-2">
        <div>
            <label for="name" class="field-label">Full name <span class="text-alert">*</span></label>
            <input id="name" type="text" wire:model="name" autocomplete="name" class="field-input @error('name') !border-alert @enderror" placeholder="Your full name" @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>
            @error('name') <p id="name-error" class="mt-1.5 text-sm text-alert">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="email" class="field-label">Email address <span class="text-alert">*</span></label>
            <input id="email" type="email" wire:model="email" autocomplete="email" class="field-input @error('email') !border-alert @enderror" placeholder="you@example.com" @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>
            @error('email') <p id="email-error" class="mt-1.5 text-sm text-alert">{{ $message }}</p> @enderror
        </div>
    </div>

    <div class="grid gap-5 md:grid-cols-2">
        <div>
            <label for="phone" class="field-label">Phone number <span class="font-normal text-ink-light">(optional)</span></label>
            <input id="phone" type="tel" wire:model="phone" autocomplete="tel" class="field-input @error('phone') !border-alert @enderror" placeholder="0803 000 0000" @error('phone') aria-invalid="true" aria-describedby="phone-error" @enderror>
            @error('phone') <p id="phone-error" class="mt-1.5 text-sm text-alert">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="service" class="field-label">Subject</label>
            <select id="service" wire:model="service" class="field-input">
                <option value="">Choose an option</option>
                <optgroup label="General">
                    @foreach ($generalOptions as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </optgroup>
                @if ($products->isNotEmpty())
                    <optgroup label="Insurance services">
                        @foreach ($products as $product)
                            <option value="{{ $product }}">{{ $product }}</option>
                        @endforeach
                    </optgroup>
                @endif
            </select>
            @error('service') <p class="mt-1.5 text-sm text-alert">{{ $message }}</p> @enderror
        </div>
    </div>

    <div>
        <label for="message" class="field-label">Message <span class="text-alert">*</span></label>
        <textarea id="message" wire:model="message" rows="5" class="field-input @error('message') !border-alert @enderror" placeholder="Tell us about the insurance cover or risk you would like to discuss." @error('message') aria-invalid="true" aria-describedby="message-error" @enderror></textarea>
        @error('message') <p id="message-error" class="mt-1.5 text-sm text-alert">{{ $message }}</p> @enderror
    </div>

    <div class="hidden" aria-hidden="true">
        <input type="text" wire:model="website" tabindex="-1" autocomplete="off">
    </div>

    <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">
        <p class="flex items-center gap-2 text-xs text-ink-light"><x-icon name="lock" class="h-4 w-4" /> Your details are only used to respond to your enquiry.</p>
        <button type="submit" class="btn-primary btn-lg shrink-0" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="submitForm">Send enquiry</span>
            <span wire:loading wire:target="submitForm">Sending…</span>
        </button>
    </div>
</form>
