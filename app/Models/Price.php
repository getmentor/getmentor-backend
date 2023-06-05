<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public const PRICES = [
        0 => 'Бесплатно',
        1 => '1 000',
        2 => '3 000',
        3 => '5 000',
        4 => '7 000',
        5 => '10 000',
        6 => 'По договоренности',
    ];

    public static function getPriceID($price): int
    {
        return array_search($price, self::PRICES, true);
    }
    public static function getPriceValue($id): string
    {
        return self::PRICES[$id];
    }

    public static function getAll()
    {
        return self::PRICES;
    }
}
