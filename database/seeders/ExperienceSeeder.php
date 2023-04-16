<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'experience' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'experience' => '5-10',
                'created_at' => Carbon::now(),
            ],
            [
                'experience' => '10+',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
