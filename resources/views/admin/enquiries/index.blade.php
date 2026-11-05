<x-admin-layout title="Enquiries management">
    <div class="mb-8 flex flex-col justify-between gap-5 lg:flex-row lg:items-end">
        <div>
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Customer inbox</p>
            <div class="flex flex-wrap items-end gap-3">
                <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Enquiries</h1>
                <span class="mb-1 rounded-full bg-brand/15 px-3 py-1 text-xs font-bold text-brand-dark">{{ $newCount }} new</span>
            </div>
            <p class="mt-2 max-w-2xl text-sm leading-6 text-ink-light">Quote requests, claim notifications and questions from the website contact form.</p>
        </div>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-ink/15 bg-white px-4 py-3 text-sm font-bold text-ink shadow-sm transition hover:border-brand hover:text-brand-dark">View contact page <span aria-hidden="true">↗</span></a>
    </div>


    <section class="mb-6 grid gap-3 sm:grid-cols-2 xl:grid-cols-4" aria-label="Enquiry summary">
        <div class="rounded-2xl border border-ink/10 bg-white p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-ink-light">All enquiries</p><p class="mt-3 text-3xl font-bold text-ink">{{ $totalCount }}</p><p class="mt-1 text-xs text-ink-light">Every message received</p></div>
        <div class="rounded-2xl border border-brand/20 bg-brand/10 p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-dark">Needs attention</p><p class="mt-3 text-3xl font-bold text-ink">{{ $newCount }}</p><p class="mt-1 text-xs text-ink-light">Waiting for a first response</p></div>
        <div class="rounded-2xl border border-ink/10 bg-white p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-ink-light">In progress</p><p class="mt-3 text-3xl font-bold text-ink">{{ $contactedCount }}</p><p class="mt-1 text-xs text-ink-light">Conversations underway</p></div>
        <div class="rounded-2xl border border-ink/10 bg-white p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-ink-light">Resolved</p><p class="mt-3 text-3xl font-bold text-ink">{{ $resolvedCount }}</p><p class="mt-1 text-xs text-ink-light">Successfully handled</p></div>
    </section>

    <section class="overflow-hidden rounded-2xl border border-ink/10 bg-white shadow-sm">
        <div class="border-b border-ink/10 bg-canvas/60 px-5 py-5 sm:px-6">
            <form method="GET" action="{{ route('admin.enquiries.index') }}" class="flex flex-col gap-3 md:flex-row">
                <label class="relative min-w-0 flex-1"><span class="sr-only">Search enquiries</span><input type="search" name="q" value="{{ $search }}" placeholder="Search by name, email, service, or message" class="w-full rounded-xl border-ink/15 bg-white px-4 py-3 text-sm text-ink placeholder:text-ink-light/70 focus:border-brand focus:ring-brand"></label>
                <label><span class="sr-only">Filter by status</span><select name="status" class="w-full rounded-xl border-ink/15 bg-white px-4 py-3 text-sm font-semibold text-ink focus:border-brand focus:ring-brand md:w-44"><option value="">All statuses</option>@foreach(['new', 'contacted', 'resolved', 'archived'] as $option)<option value="{{ $option }}" @selected($status === $option)>{{ ucfirst($option) }}</option>@endforeach</select></label>
                <button type="submit" class="rounded-xl bg-ink px-5 py-3 text-sm font-bold text-white transition hover:bg-ink-dark">Filter</button>
                @if ($search || $status)<a href="{{ route('admin.enquiries.index') }}" class="rounded-xl border border-ink/15 px-5 py-3 text-center text-sm font-bold text-ink transition hover:border-brand hover:text-brand-dark">Clear</a>@endif
            </form>
            <p class="mt-3 text-xs font-semibold text-ink-light">Showing {{ $enquiries->count() }} of {{ $enquiries->total() }} matching enquiries</p>
        </div>
        <div class="hidden grid-cols-[1.3fr_1fr_150px_110px_70px] gap-4 border-b border-ink/10 px-6 py-4 text-xs font-bold uppercase tracking-[0.14em] text-ink-light md:grid">
            <span>Contact</span><span>Enquiry type</span><span>Received</span><span>Status</span><span></span>
        </div>
        @forelse ($enquiries as $enquiry)
            <div class="grid gap-4 border-b border-ink/10 px-5 py-5 last:border-0 md:grid-cols-[1.3fr_1fr_150px_110px_70px] md:items-center md:px-6">
                <div class="min-w-0"><p class="truncate font-semibold text-ink">{{ $enquiry->name }}</p><a href="mailto:{{ $enquiry->email }}" class="block truncate text-xs text-brand-dark hover:text-brand">{{ $enquiry->email }}</a><p class="mt-2 line-clamp-1 text-xs text-ink-light md:hidden">{{ $enquiry->message }}</p></div>
                <p class="text-sm font-semibold text-ink-light">{{ $enquiry->service ?: 'General enquiry' }}</p>
                <time class="text-sm text-ink-light" datetime="{{ $enquiry->created_at->toIso8601String() }}">{{ $enquiry->created_at->format('M j, Y') }}<span class="block text-xs">{{ $enquiry->created_at->format('g:i A') }}</span></time>
                <span class="w-fit rounded-full px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide {{ $enquiry->status === 'new' ? 'bg-brand/15 text-brand-dark' : ($enquiry->status === 'resolved' ? 'bg-accent/20 text-ink' : 'bg-ink/10 text-ink-light') }}">{{ $enquiry->status }}</span>
                <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="text-sm font-bold text-brand-dark hover:text-brand md:text-right">Open <span aria-hidden="true">→</span></a>
            </div>
        @empty
            <div class="px-6 py-14 text-center"><p class="font-bold text-ink">Your inbox is clear.</p><p class="mt-1 text-sm text-ink-light">New contact submissions will appear here.</p></div>
        @endforelse
    </section>

    @if ($enquiries->hasPages())
        <div class="mt-6">{{ $enquiries->links() }}</div>
    @endif
</x-admin-layout>
