<x-admin-layout title="Add service">
    <div class="mb-8"><a href="{{ route('admin.services.index') }}" class="text-sm font-bold text-brand-dark hover:text-brand">← Back to services</a><h1 class="mt-4 text-3xl font-bold tracking-tight text-ink">Add service</h1><p class="mt-2 text-sm text-ink-light">This service will appear on the public insurance pages.</p></div>
    @include('admin.services.form', ['formAction' => route('admin.services.store'), 'formMethod' => 'POST'])
</x-admin-layout>
