<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenteeExperience extends Model
{
    use HasFactory;

    public const MENTEE_EXPERIENCE = [
        0 => 'Junior',
        1 => 'Middle',
        2 => 'Senior',
        3 => 'Менеджер',
        4 => 'Менеджер Менеджеров',
        5 => 'C - level',
    ];

    public static function getMenteeExperienceID($menteeExperience): int
    {
        return array_search($menteeExperience, self::MENTEE_EXPERIENCE, true);
    }
    public static function getMenteeExperienceValue($id): string
    {
        return self::MENTEE_EXPERIENCE[$id];
    }

    public static function getAll()
    {
        return self::MENTEE_EXPERIENCE;
    }
}
