<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\Specialization;
use Carbon\Carbon;
use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentors = Mentor::all()->toArray();
        $maxIdSpecialization = count(Specialization::all()->toArray()) - 1;

        $insertRelationShipMentorSpecialization = function ($mentor, $maxIdSpecialization) {
            return DB::table('mentor_specialization')->insert([
                [
                    'mentor_id' => $mentor['id'],
                    'specialization_id' => random_int(1, $maxIdSpecialization),
                    'created_at' => Carbon::now()
                ],
            ]);
        };

        foreach ($mentors as $mentor) {
            $maxIter = random_int(1, 4);
            for ($i = 1; $i <= $maxIter; $i++) {
                $insertRelationShipMentorSpecialization($mentor, $maxIdSpecialization);
            }
        }
    }
}
