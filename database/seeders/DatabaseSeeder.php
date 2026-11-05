<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('WALTHAM_ADMIN_EMAIL');
        $password = env('WALTHAM_ADMIN_PASSWORD');

        if (! $email || ! $password) {
            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Waltham Site Administrator',
                'password' => $password,
                'email_verified_at' => now(),
            ],
        );
    }
}
