<?php

namespace App\Models;

use Database\Factories\DesignationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    /** @use HasFactory<DesignationFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'rank' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saved(function (Designation $designation) {
            // Keep team members in sync whenever designation name or rank changes
            TeamMember::where('designation_id', $designation->id)
                ->orWhere('role', $designation->name)
                ->update([
                    'role' => $designation->name,
                    'designation_rank' => $designation->rank,
                    'designation_id' => $designation->id,
                ]);
        });
    }

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('rank', 'asc')->orderBy('name', 'asc');
    }
}
