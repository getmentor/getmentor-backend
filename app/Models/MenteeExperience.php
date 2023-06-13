<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenteeExperience extends Model
{
    use HasFactory;

    public const MENTEEEXPERIENCE = [
        0 => 'Junior',
        1 => 'Middle',
        2 => 'Senior',
        3 => 'Менеджер',
        4 => 'Менеджер Менеджеров',
        5 => 'C - level',
    ];

    public static function getMenteeExperienceID($menteeExperience): int
    {
        return array_search($menteeExperience, self::MENTEEEXPERIENCE, true);
    }
    public static function getMenteeExperienceValue($id): string
    {
        return self::MENTEEEXPERIENCE[$id];
    }

    public static function getAll()
    {
        return self::MENTEEEXPERIENCE;
    }
}
