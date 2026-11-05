<x-admin-layout title="Users management">
    <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
        <div>
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-brand-dark">Workspace access</p>
            <h1 class="text-3xl font-bold tracking-tight text-ink sm:text-4xl">Users</h1>
            <p class="mt-2 max-w-2xl text-sm leading-6 text-ink-light">Everyone listed here can sign in and manage the website. New accounts can only be added from this page.</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-dark"><span class="text-lg">+</span> Add user</a>
    </div>

    <section class="mb-6 grid gap-3 sm:grid-cols-3" aria-label="User summary">
        <div class="rounded-2xl border border-ink/10 bg-white p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-ink-light">All users</p><p class="mt-3 text-3xl font-bold text-ink">{{ number_format($totalCount) }}</p><p class="mt-1 text-xs text-ink-light">Workspace accounts</p></div>
        <div class="rounded-2xl border border-brand/20 bg-brand/10 p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-dark">Verified</p><p class="mt-3 text-3xl font-bold text-ink">{{ number_format($verifiedCount) }}</p><p class="mt-1 text-xs text-ink-light">Confirmed email addresses</p></div>
        <div class="rounded-2xl border border-ink/10 bg-white p-5 shadow-sm"><p class="text-xs font-bold uppercase tracking-[0.14em] text-ink-light">Awaiting verification</p><p class="mt-3 text-3xl font-bold text-ink">{{ number_format($unverifiedCount) }}</p><p class="mt-1 text-xs text-ink-light">Email confirmation pending</p></div>
    </section>

    <section class="overflow-hidden rounded-2xl border border-ink/10 bg-white shadow-sm">
        <div class="border-b border-ink/10 bg-canvas/60 px-5 py-5 sm:px-6">
            <form method="GET" action="{{ route('admin.users.index') }}" class="flex flex-col gap-3 sm:flex-row">
                <label class="relative min-w-0 flex-1"><span class="sr-only">Search users</span><input type="search" name="q" value="{{ $search }}" placeholder="Search by name or email" class="w-full rounded-xl border-ink/15 bg-white px-4 py-3 text-sm text-ink placeholder:text-ink-light/70 focus:border-brand focus:ring-brand"></label>
                <button type="submit" class="rounded-xl bg-ink px-5 py-3 text-sm font-bold text-white transition hover:bg-ink-dark">Search</button>
                @if ($search)<a href="{{ route('admin.users.index') }}" class="rounded-xl border border-ink/15 px-5 py-3 text-center text-sm font-bold text-ink transition hover:border-brand hover:text-brand-dark">Clear</a>@endif
            </form>
            <p class="mt-3 text-xs font-semibold text-ink-light">Showing {{ $users->count() }} of {{ $users->total() }} matching users</p>
        </div>
        <div class="hidden grid-cols-[1.4fr_1.4fr_130px_130px_90px] gap-4 border-b border-ink/10 px-6 py-4 text-xs font-bold uppercase tracking-[0.14em] text-ink-light md:grid">
            <span>User</span><span>Email</span><span>Status</span><span>Joined</span><span></span>
        </div>
        @forelse ($users as $user)
            <div class="grid gap-3 border-b border-ink/10 px-5 py-5 last:border-0 md:grid-cols-[1.4fr_1.4fr_130px_130px_90px] md:items-center md:px-6">
                <div class="flex items-center gap-3"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-semibold text-white">{{ strtoupper(substr($user->name, 0, 1)) }}</span><div class="min-w-0"><p class="truncate font-semibold text-ink">{{ $user->name }}</p><p class="text-xs text-ink-light md:hidden">{{ $user->email }}</p></div></div>
                <a href="mailto:{{ $user->email }}" class="truncate text-sm font-semibold text-brand-dark hover:text-brand">{{ $user->email }}</a>
                <span class="w-fit rounded-full px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide {{ $user->email_verified_at ? 'bg-brand/15 text-brand-dark' : 'bg-accent/20 text-ink' }}">{{ $user->email_verified_at ? 'Verified' : 'Pending' }}</span>
                <time class="text-sm text-ink-light" datetime="{{ $user->created_at->toIso8601String() }}">{{ $user->created_at->format('M j, Y') }}</time>
                <div class="md:text-right">
                    @if ($user->is(auth()->user()))
                        <span class="text-xs font-bold uppercase tracking-wide text-ink-light">You</span>
                    @else
                        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Remove this user? They will no longer be able to sign in.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm font-bold text-alert hover:text-alert-dark">Remove</button>
                        </form>
                    @endif
                </div>
            </div>
        @empty
            <div class="px-6 py-14 text-center"><p class="font-bold text-ink">No users found.</p><p class="mt-1 text-sm text-ink-light">Try a different name or email search.</p></div>
        @endforelse
    </section>

    @if ($users->hasPages())
        <div class="mt-6">{{ $users->links() }}</div>
    @endif
</x-admin-layout>
