<x-admin-layout title="Insurance services">
    <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
        <div>
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Public content</p>
            <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Insurance services</h1>
            <p class="mt-2 text-sm leading-6 text-ink-light">Manage the insurance services shown on your website.</p>
        </div>
        <a href="{{ route('admin.services.create') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-dark"><span class="text-lg">+</span> Add service</a>
    </div>


    <section class="overflow-hidden rounded-2xl border border-ink/10 bg-white shadow-sm">
        <div class="hidden grid-cols-[1fr_1.4fr_100px_140px] gap-4 border-b border-ink/10 px-6 py-4 text-xs font-bold uppercase tracking-[0.14em] text-ink-light md:grid">
            <span>Service</span><span>Summary</span><span>Order</span><span class="text-right">Actions</span>
        </div>
        @forelse ($services as $service)
            <div class="grid gap-4 border-b border-ink/10 px-5 py-5 last:border-0 md:grid-cols-[1fr_1.4fr_100px_140px] md:items-center md:px-6">
                <div class="flex items-center gap-3">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand/10 text-brand"><x-icon :name="$service->icon" class="h-6 w-6" /></span>
                    <div><p class="font-semibold text-ink">{{ $service->title }}</p><p class="text-xs text-ink-light">/{{ $service->slug }}</p></div>
                </div>
                <p class="text-sm leading-6 text-ink-light">{{ $service->summary }}</p>
                <p class="text-sm font-bold text-ink">{{ $service->sort_order }}</p>
                <div class="flex items-center gap-3 md:justify-end">
                    <a href="{{ route('admin.services.edit', $service) }}" class="text-sm font-bold text-brand-dark hover:text-brand">Edit</a>
                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Remove this service?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm font-bold text-alert hover:text-alert-dark">Remove</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="px-6 py-14 text-center"><p class="font-bold text-ink">No services yet.</p><p class="mt-1 text-sm text-ink-light">Add the first service to populate the public insurance pages.</p></div>
        @endforelse
    </section>
</x-admin-layout>
