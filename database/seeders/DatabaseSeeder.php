<?php

namespace Database\Seeders;

use App\Livewire\Guest\Merchandise;
use App\Livewire\Guest\TechShare;
use App\Models\Contributor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => Hash::make('sacode'),
        ]);

        $this->call([
            CodingCourseSeeder::class,
            ContributorSeeder::class,
            MerchandiseSeeder::class,
            TechShareSeeder::class,
            PlaygroundsSeeder::class,
        ]);
    }
}
