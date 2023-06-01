<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public const PRICES = [
        0 => 'Бесплатно',
        1 => '1000',
        2 => '2000',
        3 => '3000',
        4 => '4000',
        5 => '5000',
        6 => '6000',
        7 => '7000',
        8 => '8000',
        9 => '9000',
        10 => 'По договоренности',
    ];

    public static function getPriceID($price): int
    {
        return array_search($price, self::PRICES, true);
    }
    public static function getPriceValue($id): string
    {
        return self::PRICES[$id];
    }
}
