<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-xl border border-transparent bg-brand px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-dark focus:bg-brand-dark focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2 focus:ring-offset-canvas active:bg-brand-dark']) }}>
    {{ $slot }}
</button>
