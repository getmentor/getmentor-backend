<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'price',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function mentor(): HasMany
    {
        return $this->hasMany(Mentor::class, 'mentor_id');
    }
}
