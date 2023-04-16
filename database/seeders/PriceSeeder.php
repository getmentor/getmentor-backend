<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            ['price' => 'Бесплатно', 'created_at' => Carbon::now()],
            ['price' => '1000', 'created_at' => Carbon::now()],
            ['price' => '2000', 'created_at' => Carbon::now()],
            ['price' => '3000', 'created_at' => Carbon::now()],
            ['price' => '4000', 'created_at' => Carbon::now()],
            ['price' => '5000', 'created_at' => Carbon::now()],
            ['price' => '6000', 'created_at' => Carbon::now()],
            ['price' => '7000', 'created_at' => Carbon::now()],
            ['price' => '8000', 'created_at' => Carbon::now()],
            ['price' => '9000', 'created_at' => Carbon::now()],
            ['price' => 'По договоренности', 'created_at' => Carbon::now()],
        ]);
    }
}
