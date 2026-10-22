<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'designation_rank' => 'integer',
        'sort_order' => 'integer',
    ];

    public const DESIGNATION_HIERARCHY = [
        'CEO' => 1,
        'Project Manager' => 2,
        'Operation Manager' => 3,
        'Team Lead' => 4,
        'QA Lead' => 5,
        'Senior Data Annotator' => 6,
        'Data Annotator' => 7,
    ];

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    protected static function booted(): void
    {
        static::saving(function (TeamMember $member) {
            if ($member->designation_id) {
                $designation = Designation::find($member->designation_id);
                if ($designation) {
                    $member->role = $designation->name;
                    $member->designation_rank = $designation->rank;
                }
            } elseif (! empty($member->role)) {
                $designation = Designation::where('name', $member->role)->first();
                if ($designation) {
                    $member->designation_id = $designation->id;
                    $member->designation_rank = $designation->rank;
                } else {
                    $member->designation_rank = static::getDesignationRank($member->role);
                }
            } else {
                $member->designation_rank = 99;
            }

            if (! isset($member->sort_order) || $member->sort_order === 0) {
                $member->sort_order = $member->designation_rank;
            }
            if (empty($member->department_badge)) {
                $member->department_badge = $member->role ?? 'Team';
            }
            if (empty($member->badge_color)) {
                $member->badge_color = 'blue';
            }
            if (empty($member->category)) {
                $member->category = 'general';
            }
            if (! isset($member->is_active)) {
                $member->is_active = true;
            }
            if (empty($member->gender)) {
                $member->gender = 'man';
            }
        });
    }

    public static function getDesignationRank(?string $role): int
    {
        if (empty($role)) {
            return 99;
        }

        $trimmed = trim($role);

        // Check if a Designation with this name exists in the database first
        $dbDesignation = Designation::where('name', $trimmed)->first();
        if ($dbDesignation) {
            return $dbDesignation->rank;
        }

        $lower = strtolower($trimmed);

        // Exact matches
        $exactMap = [
            'ceo' => 1,
            'founder & ceo' => 1,
            'chief executive officer' => 1,
            'project manager' => 2,
            'operation manager' => 3,
            'operations manager' => 3,
            'team lead' => 4,
            'qa lead' => 5,
            'quality assurance lead' => 5,
            'senior data annotator' => 6,
            'sr. data annotator' => 6,
            'sr data annotator' => 6,
            'data annotator' => 7,
        ];

        if (isset($exactMap[$lower])) {
            return $exactMap[$lower];
        }

        // Keyword matches in order of specificity
        if (str_contains($lower, 'ceo') || str_contains($lower, 'chief executive')) {
            return 1;
        }

        if (str_contains($lower, 'project manager') || $lower === 'pm') {
            return 2;
        }

        if (str_contains($lower, 'operation manager') || str_contains($lower, 'operations manager') || str_contains($lower, 'vp of operations')) {
            return 3;
        }

        if (str_contains($lower, 'qa') || str_contains($lower, 'quality assurance') || str_contains($lower, 'quality control')) {
            return 5;
        }

        if (str_contains($lower, 'team lead') || (str_contains($lower, 'lead') && ! str_contains($lower, 'qa'))) {
            return 4;
        }

        if (str_contains($lower, 'senior data annotator') || (str_contains($lower, 'senior') && (str_contains($lower, 'annotat') || str_contains($lower, 'specialist')))) {
            return 6;
        }

        if (str_contains($lower, 'data annotator') || str_contains($lower, 'annotat')) {
            return 7;
        }

        return 99;
    }

    public function scopeInHierarchyOrder($query)
    {
        return $query->orderBy('designation_rank', 'asc')
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc');
    }

    public function getImageUrlAttribute(): string
    {
        if (! empty($this->image)) {
            if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
                return $this->image;
            }

            if (str_starts_with($this->image, 'image/') || str_starts_with($this->image, '/image/')) {
                return asset($this->image);
            }

            return asset('storage/'.$this->image);
        }

        $gender = strtolower($this->gender ?? 'man');
        if (in_array($gender, ['women', 'woman', 'female'])) {
            return asset('image/avatars/avatar-women.svg');
        }

        return asset('image/avatars/avatar-man.svg');
    }
}
