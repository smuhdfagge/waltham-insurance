<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AdminSeeder::class);

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
}
