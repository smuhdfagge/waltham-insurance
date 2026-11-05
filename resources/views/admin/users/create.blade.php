<x-admin-layout title="Add user">
    <div class="mb-8"><a href="{{ route('admin.users.index') }}" class="text-sm font-bold text-brand-dark hover:text-brand">← Back to users</a><h1 class="mt-4 text-3xl font-bold tracking-tight text-ink">Add user</h1><p class="mt-2 text-sm text-ink-light">This person will be able to sign in and manage the whole website. Share the password with them privately.</p></div>

    <form method="POST" action="{{ route('admin.users.store') }}" class="max-w-3xl rounded-2xl border border-ink/10 bg-white p-6 shadow-sm sm:p-8">
        @csrf
        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-alert/20 bg-alert/10 px-4 py-3 text-sm text-alert-dark"><p class="font-bold">Please check the form.</p><ul class="mt-1 list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <div class="grid gap-6 sm:grid-cols-2">
            <label class="block"><span class="text-sm font-bold text-ink">Full name</span><input name="name" value="{{ old('name') }}" required autocomplete="off" class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"></label>
            <label class="block"><span class="text-sm font-bold text-ink">Email address</span><input type="email" name="email" value="{{ old('email') }}" required autocomplete="off" class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"><span class="mt-1 block text-xs text-ink-light">They’ll use this to sign in.</span></label>
            <label class="block"><span class="text-sm font-bold text-ink">Password</span><input type="password" name="password" required autocomplete="new-password" class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"><span class="mt-1 block text-xs text-ink-light">At least 8 characters. They can change it from their profile.</span></label>
            <label class="block"><span class="text-sm font-bold text-ink">Confirm password</span><input type="password" name="password_confirmation" required autocomplete="new-password" class="mt-2 w-full rounded-xl border-ink/20 bg-white px-4 py-3 text-sm focus:border-brand focus:ring-brand"></label>
        </div>
        <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end"><a href="{{ route('admin.users.index') }}" class="inline-flex items-center justify-center rounded-xl border border-ink/15 px-5 py-3 text-sm font-bold text-ink hover:bg-canvas">Cancel</a><button type="submit" class="inline-flex items-center justify-center rounded-xl bg-ink px-5 py-3 text-sm font-bold text-white hover:bg-ink-dark">Add user</button></div>
    </form>
</x-admin-layout>
