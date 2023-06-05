<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->insert([
            ['name' => 'Эксперт Авито', 'sponsor' => true, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'Сообщество Онтико', 'sponsor' => true, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'Наставник Яндекс.Практикума', 'sponsor' => true, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'Backend', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'Frontend', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'iOS', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'Android', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'System Design', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'Code Review', 'sponsor' => false, 'group_specializations_id' => 2, 'created_at' => Carbon::now()],
            ['name' => 'Agile', 'sponsor' => false, 'group_specializations_id' => 3, 'created_at' => Carbon::now()],
            ['name' => 'Team Lead/Management', 'sponsor' => false, 'group_specializations_id' => 3, 'created_at' => Carbon::now()],
            ['name' => 'Project Management', 'sponsor' => false, 'group_specializations_id' => 3, 'created_at' => Carbon::now()],
            ['name' => 'Product Management', 'sponsor' => false, 'group_specializations_id' => 3, 'created_at' => Carbon::now()],
            ['name' => 'DevOps/SRE', 'sponsor' => false, 'group_specializations_id' => 4, 'created_at' => Carbon::now()],
            ['name' => 'Databases', 'sponsor' => false, 'group_specializations_id' => 4, 'created_at' => Carbon::now()],
            ['name' => 'Сети', 'sponsor' => false, 'group_specializations_id' => 4, 'created_at' => Carbon::now()],
            ['name' => 'Cloud', 'sponsor' => false, 'group_specializations_id' => 4, 'created_at' => Carbon::now()],
            ['name' => 'HR', 'sponsor' => false, 'group_specializations_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'Карьера', 'sponsor' => false, 'group_specializations_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'Собеседования', 'sponsor' => false, 'group_specializations_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'Entrepreneurship', 'sponsor' => false, 'group_specializations_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'DevRel', 'sponsor' => false, 'group_specializations_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'Marketing', 'sponsor' => false, 'group_specializations_id' => 6, 'created_at' => Carbon::now()],
            ['name' => 'Content/Copy', 'sponsor' => false, 'group_specializations_id' => 6, 'created_at' => Carbon::now()],
            ['name' => 'Data Science/ML', 'sponsor' => false, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'UX/UI/Design', 'sponsor' => false, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'QA', 'sponsor' => false, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'Аналитика', 'sponsor' => false, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
            ['name' => 'Другое', 'sponsor' => false, 'group_specializations_id' => 1, 'created_at' => Carbon::now()],
        ]);
    }
}
