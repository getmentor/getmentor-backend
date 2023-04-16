<?php

namespace Database\Factories;

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
        return [
            ['specialization' => '{"0": "Эксперт Авито"}'],
            ['specialization' => '{"0": "Сообщество Онтико"}'],
            ['specialization' => '{"0": "Наставник Яндекс.Практикума"}'],
            ['specialization' => '{"Development": "Backend"}'],
            ['specialization' => '{"Development": "Frontend"}'],
            ['specialization' => '{"Development": "iOS"}'],
            ['specialization' => '{"Development": "Android"}'],
            ['specialization' => '{"Development": "System Design"}'],
            ['specialization' => '{"Development": "Code Review"}'],
            ['specialization' => '{"Management": "Agile"}'],
            ['specialization' => '{"Management": "Team Lead/Management"}'],
            ['specialization' => '{"Management": "Project Management"}'],
            ['specialization' => '{"Management": "Product Management"}'],
            ['specialization' => '{"DevOps": "DevOps/SRE"}'],
            ['specialization' => '{"DevOps": "Databases"}'],
            ['specialization' => '{"DevOps": "Сети"}'],
            ['specialization' => '{"DevOps": "Cloud"}'],
            ['specialization' => '{"HR": "HR"}'],
            ['specialization' => '{"HR": "Карьера"}'],
            ['specialization' => '{"HR": "Собеседования"}'],
            ['specialization' => '{"HR": "Entrepreneurship"}'],
            ['specialization' => '{"HR": "DevRel"}'],
            ['specialization' => '{"Marketing": "Marketing"}'],
            ['specialization' => '{"Marketing": "Content/Copy"}'],
            ['specialization' => '{"Marketing": "Content/Copy"}'],
            ['specialization' => '{"0": "Data Science/ML"}'],
            ['specialization' => '{"0": "UX/UI/Design"}'],
            ['specialization' => '{"0": "QA"}'],
            ['specialization' => '{"0": "Аналитика"}'],
            ['specialization' => '{"0": "Другое"}'],
        ];
    }
}
