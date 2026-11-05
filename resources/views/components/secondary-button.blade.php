<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center rounded-xl border border-ink/15 bg-white px-5 py-3 text-sm font-bold text-ink shadow-sm transition hover:bg-canvas focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2 disabled:opacity-25']) }}>
    {{ $slot }}
</button>
