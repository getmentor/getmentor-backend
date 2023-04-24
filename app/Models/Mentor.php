<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'name',
        'email',
        'telegram_username',
        'photo_url',
        'job_title',
        'workplace',
        'about',
        'description',
        'competencies',
        'price',
        'experience',
        'menteeCount',
        'link_to_calendar',
        'privacy_policy_agreement',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function specialization(): BelongsTo
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    public function specializations(): HasMany
    {
        return $this->hasMany(Specialization::class, 'specialization_id');
    }
}
