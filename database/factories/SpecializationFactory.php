<?php

namespace Database\Factories;

use Arr;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class SpecializationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return Arr::random([
            ['name' => 'Эксперт Авито', 'created_at' => Carbon::now()],
            ['name' => 'Сообщество Онтико', 'created_at' => Carbon::now()],
            ['name' => 'Наставник Яндекс.Практикума', 'created_at' => Carbon::now()],
            ['name' => 'Backend', 'created_at' => Carbon::now()],
            ['name' => 'Frontend', 'created_at' => Carbon::now()],
            ['name' => 'iOS', 'created_at' => Carbon::now()],
            ['name' => 'Android', 'created_at' => Carbon::now()],
            ['name' => 'System Design', 'created_at' => Carbon::now()],
            ['name' => 'Code Review', 'created_at' => Carbon::now()],
            ['name' => 'Agile', 'created_at' => Carbon::now()],
            ['name' => 'Team Lead/Management', 'created_at' => Carbon::now()],
            ['name' => 'Project Management', 'created_at' => Carbon::now()],
            ['name' => 'Product Management', 'created_at' => Carbon::now()],
            ['name' => 'DevOps/SRE', 'created_at' => Carbon::now()],
            ['name' => 'Databases', 'created_at' => Carbon::now()],
            ['name' => 'Сети', 'created_at' => Carbon::now()],
            ['name' => 'Cloud', 'created_at' => Carbon::now()],
            ['name' => 'HR', 'created_at' => Carbon::now()],
            ['name' => 'Карьера', 'created_at' => Carbon::now()],
            ['name' => 'Собеседования', 'created_at' => Carbon::now()],
            ['name' => 'Entrepreneurship', 'created_at' => Carbon::now()],
            ['name' => 'DevRel', 'created_at' => Carbon::now()],
            ['name' => 'Marketing', 'created_at' => Carbon::now()],
            ['name' => 'Content/Copy', 'created_at' => Carbon::now()],
            ['name' => 'Data Science/ML', 'created_at' => Carbon::now()],
            ['name' => 'UX/UI/Design', 'created_at' => Carbon::now()],
            ['name' => 'QA', 'created_at' => Carbon::now()],
            ['name' => 'Аналитика', 'created_at' => Carbon::now()],
            ['name' => 'Другое', 'created_at' => Carbon::now()],
        ]);
    }
}
