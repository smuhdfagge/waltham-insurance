<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_creates_or_updates_the_administrator_from_environment_credentials(): void
    {
        config([
            'admin.email' => 'admin@example.com',
            'admin.password' => 'unique-test-password',
        ]);

        $this->seed(\Database\Seeders\AdminSeeder::class);

        $admin = User::where('email', 'admin@example.com')->firstOrFail();
        $this->assertSame('Waltham Site Administrator', $admin->name);
        $this->assertTrue(Hash::check('unique-test-password', $admin->password));
        $this->assertNotNull($admin->email_verified_at);

        $this->seed(\Database\Seeders\AdminSeeder::class);
        $this->assertSame(1, User::where('email', 'admin@example.com')->count());
    }

    public function test_it_does_not_create_an_administrator_without_both_credentials(): void
    {
        config(['admin.email' => null, 'admin.password' => null]);

        $this->seed(\Database\Seeders\AdminSeeder::class);

        $this->assertDatabaseCount('users', 0);
    }
}
