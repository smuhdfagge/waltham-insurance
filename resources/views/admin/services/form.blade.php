<form method="POST" action="{{ $formAction }}" class="max-w-3xl rounded-2xl border border-ink/10 bg-white p-6 shadow-sm sm:p-8">
    @csrf
    @if ($formMethod !== 'POST') @method($formMethod) @endif
    @if ($errors->any())
        <div class="mb-6 rounded-xl border border-alert/20 bg-alert/10 px-4 py-3 text-sm text-alert-dark"><p class="font-bold">Please check the form.</p><ul class="mt-1 list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    <div class="grid gap-6 sm:grid-cols-2">
        <label class="block"><span class="text-sm font-bold text-ink">Service name</span><input name="title" value="{{ old('title', $service->title) }}" required class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"></label>
        <label class="block"><span class="text-sm font-bold text-ink">URL slug</span><input name="slug" value="{{ old('slug', $service->slug) }}" required class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"><span class="mt-1 block text-xs text-ink-light">Use lowercase words separated by hyphens.</span></label>
        <label class="block sm:col-span-2"><span class="text-sm font-bold text-ink">Summary</span><textarea name="summary" rows="3" maxlength="500" required class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand">{{ old('summary', $service->summary) }}</textarea><span class="mt-1 block text-xs text-ink-light">A short description used on service cards, the menu and search previews.</span></label>
        <label class="block sm:col-span-2"><span class="text-sm font-bold text-ink">Description</span><textarea name="description" rows="14" required class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 font-mono text-[13px] leading-6 focus:border-brand focus:ring-brand">{{ old('description', $service->description) }}</textarea><span class="mt-1 block text-xs text-ink-light">Leave a blank line between paragraphs. Start a line with <code class="rounded bg-canvas px-1">- </code> for a bullet point or <code class="rounded bg-canvas px-1">### </code> for a sub-heading.</span></label>
        @php
            $iconChoices = ['shield' => 'Shield', 'shield-check' => 'Shield with tick', 'heart' => 'Heart', 'flame' => 'Flame', 'lock' => 'Lock', 'document' => 'Document', 'car' => 'Car', 'home' => 'Home', 'health' => 'Health', 'plane' => 'Plane', 'briefcase' => 'Briefcase', 'ship' => 'Ship', 'scale' => 'Scales', 'building' => 'Building', 'users' => 'People', 'globe' => 'Globe', 'wallet' => 'Wallet', 'gauge' => 'Gauge'];
            $currentIcon = old('icon', $service->icon ?: 'shield');
        @endphp
        <div class="block sm:col-span-2" x-data="{ icon: @js($currentIcon) }">
            <span class="text-sm font-bold text-ink">Icon</span>
            <input type="hidden" name="icon" :value="icon" value="{{ $currentIcon }}">
            <div class="mt-2 flex flex-wrap gap-2" role="radiogroup" aria-label="Service icon">
                @foreach ($iconChoices as $key => $label)
                    <button type="button" role="radio" x-on:click="icon = '{{ $key }}'" :aria-checked="(icon === '{{ $key }}').toString()" title="{{ $label }}"
                            :class="icon === '{{ $key }}' ? 'border-brand bg-brand text-white' : 'border-ink/20 bg-white text-ink hover:border-brand hover:text-brand'"
                            class="flex h-11 w-11 items-center justify-center rounded-xl border transition">
                        <x-icon :name="$key" class="h-5 w-5" />
                        <span class="sr-only">{{ $label }}</span>
                    </button>
                @endforeach
            </div>
            <span class="mt-1 block text-xs text-ink-light">Shown on service cards and in the website menu.</span>
        </div>
        <label class="block"><span class="text-sm font-bold text-ink">Display order</span><input type="number" min="0" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}" required class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"><span class="mt-1 block text-xs text-ink-light">Lower numbers appear first.</span></label>
    </div>
    <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end"><a href="{{ route('admin.services.index') }}" class="inline-flex items-center justify-center rounded-xl border border-ink/15 px-5 py-3 text-sm font-bold text-ink hover:bg-canvas">Cancel</a><button type="submit" class="inline-flex items-center justify-center rounded-xl bg-ink px-5 py-3 text-sm font-bold text-white hover:bg-ink-dark">{{ $formMethod === 'POST' ? 'Add service' : 'Save changes' }}</button></div>
</form>
