<x-admin-layout title="Edit service">
    <div class="mb-8"><a href="{{ route('admin.services.index') }}" class="text-sm font-bold text-brand-dark hover:text-brand">← Back to services</a><h1 class="mt-4 text-3xl font-bold tracking-tight text-ink">Edit service</h1><p class="mt-2 text-sm text-ink-light">Changes will update the public insurance pages.</p></div>
    @include('admin.services.form', ['formAction' => route('admin.services.update', $service), 'formMethod' => 'PUT'])
</x-admin-layout>
