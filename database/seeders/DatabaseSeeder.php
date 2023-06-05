<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Resources\SpecializationCollection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GroupSpecializationsSeeder::class,
            SpecializationSeeder::class,
            MentorSeeder::class,
            MentorSpecializationSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
//         \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
