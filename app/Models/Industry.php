<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'short_description',
        'what_we_label',
        'tags',
        'badge_color',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'what_we_label' => 'array',
        'tags' => 'array',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
