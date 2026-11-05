@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-ink/20 bg-white text-ink placeholder:text-ink-light/60 focus:border-brand focus:ring-brand rounded-lg shadow-sm']) }}>
