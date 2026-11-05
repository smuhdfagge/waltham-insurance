<x-admin-layout title="Gallery management">
    <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
        <div>
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Public content</p>
            <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Gallery</h1>
            <p class="mt-2 text-sm leading-6 text-ink-light">Manage the images shown on the home page and public gallery.</p>
        </div>
        <a href="{{ route('gallery-images.create') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-dark"><span class="text-lg">+</span> Add image</a>
    </div>


    <section class="overflow-hidden rounded-2xl border border-ink/10 bg-white shadow-sm">
        <div class="hidden grid-cols-[1.4fr_1fr_110px_140px] gap-4 border-b border-ink/10 px-6 py-4 text-xs font-bold uppercase tracking-[0.14em] text-ink-light md:grid">
            <span>Image</span><span>Category</span><span>Order</span><span class="text-right">Actions</span>
        </div>
        @forelse ($galleryImages as $galleryImage)
            <div class="grid gap-4 border-b border-ink/10 px-5 py-5 last:border-0 md:grid-cols-[1.4fr_1fr_110px_140px] md:items-center md:px-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset($galleryImage->image_url) }}" alt="{{ $galleryImage->title }}" class="h-14 w-20 rounded-xl object-cover">
                    <div class="min-w-0"><p class="truncate font-semibold text-ink">{{ $galleryImage->title }}</p><p class="truncate text-xs text-ink-light">{{ $galleryImage->description ?: 'No description' }}</p></div>
                </div>
                <p class="text-sm font-semibold text-ink-light">{{ $galleryImage->category }}</p>
                <p class="text-sm font-bold text-ink">{{ $galleryImage->sort_order }}</p>
                <div class="flex items-center gap-3 md:justify-end">
                    <a href="{{ route('gallery-images.edit', $galleryImage) }}" class="text-sm font-bold text-brand-dark hover:text-brand">Edit</a>
                    <form method="POST" action="{{ route('gallery-images.destroy', $galleryImage) }}" onsubmit="return confirm('Remove this gallery image?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm font-bold text-alert hover:text-alert-dark">Remove</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="px-6 py-14 text-center"><p class="font-bold text-ink">No gallery images yet.</p><p class="mt-1 text-sm text-ink-light">Add the first image to populate the public gallery.</p></div>
        @endforelse
    </section>
</x-admin-layout>