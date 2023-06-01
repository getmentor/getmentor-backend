<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public const EXPERIENCES = [
        1 => '2-5',
        2 => '5-10',
        3 => '10+',
    ];

    public static function getExperienceID($experience): int
    {
        return array_search($experience, self::EXPERIENCES, true);
    }
    public static function getExperienceAttribute($id): string
    {
        return self::EXPERIENCES[$id];
    }
}
