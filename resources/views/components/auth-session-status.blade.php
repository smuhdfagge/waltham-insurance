@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm font-semibold text-brand-dark']) }}>
        {{ $status }}
    </div>
@endif
