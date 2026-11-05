<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Create the first administrator only when credentials are provided, so
     * no default password ever ships to production.
     */
    public function run(): void
    {
        $email = config('admin.email');
        $password = config('admin.password');

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
