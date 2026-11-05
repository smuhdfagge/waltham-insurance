<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-xl border border-transparent bg-alert px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-alert-dark focus:outline-none focus:ring-2 focus:ring-alert focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
