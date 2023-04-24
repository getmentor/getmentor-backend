<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
