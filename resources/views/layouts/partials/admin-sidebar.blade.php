<div>
    <a href="{{ route('dashboard') }}" class="mb-10 flex px-2">
        <x-logo tone="light" />
    </a>
    <p class="mb-3 px-3 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/40">Workspace</p>
    <nav class="space-y-1" aria-label="Admin navigation">
        @foreach ($navItems as $item)
            @php $isActive = request()->routeIs($item['active']); @endphp
            <a href="{{ route($item['route']) }}"
               @if ($isActive) aria-current="page" @endif
               class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition {{ $isActive ? 'bg-white/10 text-white ring-1 ring-white/10' : 'text-white/65 hover:bg-white/5 hover:text-white' }}">
                <x-icon :name="$item['icon']" class="h-5 w-5 {{ $isActive ? 'text-brand-light' : '' }}" />
                <span class="flex-1">{{ $item['label'] }}</span>
                @if (! empty($item['badge']))
                    <span class="rounded-full bg-brand px-2 py-0.5 text-[11px] font-semibold text-white" title="{{ $item['badge'] }} new">{{ $item['badge'] > 99 ? '99+' : $item['badge'] }}</span>
                @endif
            </a>
        @endforeach
    </nav>
</div>

<div class="mt-10 space-y-3">
    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
        <div class="flex items-center gap-3">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-semibold text-white">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
            <div class="min-w-0">
                <p class="truncate text-sm font-semibold text-white">{{ Auth::user()->name }}</p>
                <p class="truncate text-xs text-white/55">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-lg border border-white/15 px-3 py-2 text-xs font-semibold text-white/80 transition hover:bg-white/10 hover:text-white"><x-icon name="logout" class="h-4 w-4" /> Sign out</button>
        </form>
    </div>
    <a href="{{ route('home') }}" target="_blank" rel="noopener" class="flex items-center gap-1.5 px-3 text-xs font-semibold text-brand-light hover:text-white">View public website <x-icon name="external" class="h-3.5 w-3.5" /></a>
</div>
