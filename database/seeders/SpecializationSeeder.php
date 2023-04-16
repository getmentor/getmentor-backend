<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->insert([
            ['specialization' => '{"0": "Эксперт Авито"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "Сообщество Онтико"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "Наставник Яндекс.Практикума"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "Backend"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "Frontend"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "iOS"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "Android"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "System Design"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Development": "Code Review"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Management": "Agile"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Management": "Team Lead/Management"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Management": "Project Management"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Management": "Product Management"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"DevOps": "DevOps/SRE"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"DevOps": "Databases"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"DevOps": "Сети"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"DevOps": "Cloud"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"HR": "HR"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"HR": "Карьера"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"HR": "Собеседования"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"HR": "Entrepreneurship"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"HR": "DevRel"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Marketing": "Marketing"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Marketing": "Content/Copy"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"Marketing": "Content/Copy"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "Data Science/ML"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "UX/UI/Design"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "QA"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "Аналитика"}', 'created_at' => Carbon::now()],
            ['specialization' => '{"0": "Другое"}', 'created_at' => Carbon::now()],
        ]);
    }
}
