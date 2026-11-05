@php
    $initials = collect(preg_split('/\s+/', preg_replace('/[^\pL\s]/u', '', $member->name)))
        ->reject(fn ($part) => in_array(strtolower($part), ['alhaji', 'nze', 'mr', 'mrs', 'dr'], true) || $part === '')
        ->map(fn ($part) => mb_substr($part, 0, 1))->take(2)->implode('');
    $size = $size ?? 'h-20 w-20 text-xl';
@endphp
<span class="relative flex {{ $size }} shrink-0 items-center justify-center overflow-hidden rounded-full bg-gradient-to-br from-brand to-ink font-display font-semibold text-white ring-4 ring-white shadow-soft">
    <span aria-hidden="true">{{ $initials }}</span>
    @if ($member->image)
        <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="absolute inset-0 h-full w-full object-cover" loading="lazy" onerror="this.remove()">
    @endif
</span>
