<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroupSpecializations extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function specializations(): HasMany
    {
        return $this->hasMany(Specialization::class);
    }
}
