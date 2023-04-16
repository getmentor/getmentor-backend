<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'specialization',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(Mentor::class, 'mentor_id');
    }
}
