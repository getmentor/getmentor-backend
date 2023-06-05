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
        'name',
        'sponsor',
        'group_specializations_id',
        'created_at',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function mentors(): HasMany
    {
        return $this->hasMany(Mentor::class, 'mentor_id');
    }
    public function groupSpecializations(): BelongsTo
    {
        return $this->belongsTo(GroupSpecializations::class, 'group_specializations_id');
    }

    public function getGroupName()
    {
        return GroupSpecializations::findOrFail($this->group_specializations_id)->name;
    }
}
