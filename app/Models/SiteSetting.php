<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
        'label',
        'type',
        'sort_order',
    ];

    /**
     * Get a setting value by key, with optional fallback default.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        try {
            // Unify careers_email to contact_email fallback if careers_email does not exist
            if ($key === 'careers_email') {
                $setting = static::where('key', 'careers_email')->first();
                if ($setting && $setting->value !== null && $setting->value !== '') {
                    return $setting->value;
                }
                return static::get('contact_email', $default);
            }

            $setting = static::where('key', $key)->first();
            if ($setting && $setting->value !== null && $setting->value !== '') {
                return $setting->value;
            }
        } catch (\Throwable $e) {
            // In case table is not ready or during tests
        }

        return $default;
    }

    /**
     * Set a setting value by key.
     */
    public static function set(string $key, ?string $value, string $group = 'general', ?string $label = null, string $type = 'text'): self
    {
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'group' => $group,
                'label' => $label ?? ucwords(str_replace('_', ' ', $key)),
                'type' => $type,
            ]
        );
    }
}
