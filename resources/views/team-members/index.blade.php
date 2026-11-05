<x-admin-layout title="Team management">
    <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
        <div>
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Public content</p>
            <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Directors &amp; management</h1>
            <p class="mt-2 text-sm leading-6 text-ink-light">Manage the people shown on the Board of directors and Management pages.</p>
        </div>
        <a href="{{ route('team-members.create') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-dark"><span class="text-lg">+</span> Add person</a>
    </div>


    <section class="overflow-hidden rounded-2xl border border-ink/10 bg-white shadow-sm">
        <div class="hidden grid-cols-[1fr_1fr_110px_140px] gap-4 border-b border-ink/10 px-6 py-4 text-xs font-bold uppercase tracking-[0.14em] text-ink-light md:grid">
            <span>Person</span><span>Role</span><span>Order</span><span class="text-right">Actions</span>
        </div>
        @forelse ($teamMembers as $teamMember)
            <div class="grid gap-4 border-b border-ink/10 px-5 py-5 last:border-0 md:grid-cols-[1fr_1fr_110px_140px] md:items-center md:px-6">
                <div class="flex items-center gap-3">
                    @include('pages.partials.person-avatar', ['member' => $teamMember, 'size' => 'h-12 w-12 text-sm !ring-0 !shadow-none'])
                    <div><p class="font-semibold text-ink">{{ $teamMember->name }}</p><p class="text-xs text-ink-light">{{ $teamMember->title ?: 'Team member' }}</p></div>
                </div>
                <p class="text-sm font-semibold text-ink-light">{{ $teamMember->role }} <span class="ml-1 rounded-full bg-canvas px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-ink-light">{{ \App\Models\TeamMember::GROUPS[$teamMember->group] ?? $teamMember->group }}</span></p>
                <p class="text-sm font-bold text-ink">{{ $teamMember->sort_order }}</p>
                <div class="flex items-center gap-3 md:justify-end">
                    <a href="{{ route('team-members.edit', $teamMember) }}" class="text-sm font-bold text-brand-dark hover:text-brand">Edit</a>
                    <form method="POST" action="{{ route('team-members.destroy', $teamMember) }}" onsubmit="return confirm('Remove this team member?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm font-bold text-alert hover:text-alert-dark">Remove</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="px-6 py-14 text-center"><p class="font-bold text-ink">No team members yet.</p><p class="mt-1 text-sm text-ink-light">Add the first person to populate both public team sections.</p></div>
        @endforelse
    </section>
</x-admin-layout>