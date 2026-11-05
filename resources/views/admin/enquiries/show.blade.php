<x-admin-layout title="View enquiry">
    <div class="mb-8"><a href="{{ route('admin.enquiries.index') }}" class="text-sm font-bold text-brand-dark hover:text-brand">← Back to enquiries</a><h1 class="mt-4 text-3xl font-bold tracking-tight text-ink">{{ $enquiry->name }}</h1><p class="mt-2 text-sm text-ink-light">Received {{ $enquiry->created_at->format('F j, Y \a\t g:i A') }}</p></div>


    <div class="grid max-w-5xl gap-6 lg:grid-cols-[1.35fr_0.65fr]">
        <article class="rounded-2xl border border-ink/10 bg-white p-6 shadow-sm sm:p-8">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-dark">Message</p>
            <p class="mt-5 whitespace-pre-line text-base leading-8 text-ink/80">{{ $enquiry->message }}</p>
            <div class="mt-8 flex flex-wrap gap-3 border-t border-ink/10 pt-6">
                <a href="mailto:{{ $enquiry->email }}?subject={{ rawurlencode('Re: your enquiry'.($enquiry->service ? ' about '.$enquiry->service : '').' – '.config('company.name')) }}" class="inline-flex items-center gap-2 rounded-xl bg-brand px-5 py-3 text-sm font-bold text-white hover:bg-brand-dark">Reply by email <span aria-hidden="true">↗</span></a>
                @if ($enquiry->phone)
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $enquiry->phone) }}" class="inline-flex items-center gap-2 rounded-xl border border-ink/15 px-5 py-3 text-sm font-bold text-ink hover:border-brand hover:text-brand-dark">Call {{ $enquiry->phone }}</a>
                @endif
            </div>
        </article>
        <aside class="space-y-6">
            <section class="rounded-2xl border border-ink/10 bg-white p-6 shadow-sm">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-dark">Contact details</p>
                <dl class="mt-5 space-y-4 text-sm"><div><dt class="font-bold text-ink-light">Email</dt><dd class="mt-1"><a href="mailto:{{ $enquiry->email }}" class="font-semibold text-brand-dark hover:text-brand">{{ $enquiry->email }}</a></dd></div><div><dt class="font-bold text-ink-light">Phone</dt><dd class="mt-1"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $enquiry->phone) }}" class="font-semibold text-brand-dark hover:text-brand">{{ $enquiry->phone }}</a></dd></div><div><dt class="font-bold text-ink-light">Service</dt><dd class="mt-1 font-semibold text-ink">{{ $enquiry->service ?: 'General enquiry' }}</dd></div></dl>
            </section>
            <section class="rounded-2xl bg-ink p-6 text-white shadow-soft">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-light">Workflow</p>
                <form method="POST" action="{{ route('admin.enquiries.update', $enquiry) }}" class="mt-5">
                    @csrf
                    @method('PATCH')
                    <label for="status" class="text-sm font-bold text-white">Status</label>
                    <select id="status" name="status" class="mt-2 w-full rounded-xl border-0 bg-white px-4 py-3 text-sm text-ink focus:ring-2 focus:ring-brand">@foreach(['new', 'contacted', 'resolved', 'archived'] as $status)<option value="{{ $status }}" @selected($enquiry->status === $status)>{{ ucfirst($status) }}</option>@endforeach</select>
                    <button type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-xl bg-brand px-4 py-3 text-sm font-bold text-white hover:bg-brand-dark">Save status</button>
                </form>
                <form method="POST" action="{{ route('admin.enquiries.destroy', $enquiry) }}" class="mt-3" onsubmit="return confirm('Remove this enquiry?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full rounded-xl border border-white/20 px-4 py-3 text-sm font-bold text-white/80 hover:bg-white/10 hover:text-white">Remove enquiry</button>
                </form>
            </section>
        </aside>
    </div>
</x-admin-layout>
