<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Throwable;

class SiteSetting extends Model
{
    private const CACHE_KEY = 'site_settings';

    protected $fillable = ['key', 'value'];

    /**
     * Every saved setting as [key => value], cached until the next save.
     * Returns an empty array if the table doesn't exist yet (e.g. before
     * migrations run), so the public site keeps working.
     */
    public static function values(): array
    {
        try {
            return Cache::rememberForever(self::CACHE_KEY, function () {
                if (! Schema::hasTable('site_settings')) {
                    return [];
                }

                return static::query()->pluck('value', 'key')->all();
            });
        } catch (Throwable) {
            return [];
        }
    }

    /**
     * Save several settings at once and clear the cache.
     */
    public static function putMany(array $settings): void
    {
        foreach ($settings as $key => $value) {
            static::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        Cache::forget(self::CACHE_KEY);
    }
}
