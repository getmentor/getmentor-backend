<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group_specializations')->insert([
            ['name' => null, 'created_at' => Carbon::now()],
            ['name' => 'Development', 'created_at' => Carbon::now()],
            ['name' => 'Management', 'created_at' => Carbon::now()],
            ['name' => 'DevOps', 'created_at' => Carbon::now()],
            ['name' => 'HR', 'created_at' => Carbon::now()],
            ['name' => 'Marketing', 'created_at' => Carbon::now()],
        ]);
    }
}
