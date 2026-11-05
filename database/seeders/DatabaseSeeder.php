<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedAdministrator();

        foreach (require __DIR__.'/content/services.php' as $index => $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service + ['sort_order' => $index + 1]);
        }

        foreach (require __DIR__.'/content/team.php' as $index => $member) {
            TeamMember::updateOrCreate(
                ['group' => $member['group'], 'name' => $member['name']],
                $member + ['title' => $member['role'], 'image' => null, 'sort_order' => $index + 1],
            );
        }
    }

    /**
     * Create the first administrator only when credentials are provided, so
     * no default password ever ships to production.
     */
    private function seedAdministrator(): void
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
