<?php

namespace App\Support;

use App\Models\SiteSetting;

/**
 * Social media links and WhatsApp chat settings.
 *
 * Values saved in the admin (Social & WhatsApp page) win. Until a value has
 * been saved there, the default from config/company.php (COMPANY_* in .env)
 * is used.
 */
class SocialSettings
{
    /** Networks the admin can configure, in display order. */
    public const NETWORKS = [
        'facebook' => ['label' => 'Facebook', 'placeholder' => 'https://facebook.com/walthaminsurance'],
        'x' => ['label' => 'X (Twitter)', 'placeholder' => 'https://x.com/walthaminsurance'],
        'linkedin' => ['label' => 'LinkedIn', 'placeholder' => 'https://linkedin.com/company/walthaminsurance'],
        'instagram' => ['label' => 'Instagram', 'placeholder' => 'https://instagram.com/walthaminsurance'],
        'youtube' => ['label' => 'YouTube', 'placeholder' => 'https://youtube.com/@walthaminsurance'],
        'tiktok' => ['label' => 'TikTok', 'placeholder' => 'https://tiktok.com/@walthaminsurance'],
    ];

    public const WHATSAPP_KEYS = ['whatsapp_number', 'whatsapp_message', 'whatsapp_button'];

    /** Every editable key, prefixed as stored in site_settings. */
    public static function keys(): array
    {
        return array_merge(
            array_map(fn ($network) => 'social_'.$network, array_keys(self::NETWORKS)),
            self::WHATSAPP_KEYS,
        );
    }

    /** Current value of a setting, falling back to the config default. */
    public static function get(string $key): ?string
    {
        $saved = SiteSetting::values();

        if (array_key_exists($key, $saved)) {
            return $saved[$key];
        }

        $default = match (true) {
            str_starts_with($key, 'social_') => config('company.'.substr($key, 7)),
            $key === 'whatsapp_number' => config('company.whatsapp_number'),
            $key === 'whatsapp_message' => config('company.whatsapp_message'),
            $key === 'whatsapp_button' => '1',
            default => null,
        };

        return $default === null ? null : (string) $default;
    }

    /**
     * Configured networks as a list of ['key', 'label', 'url'] (empty ones skipped).
     */
    public static function links(): array
    {
        $links = [];

        foreach (self::NETWORKS as $network => $meta) {
            $url = trim((string) self::get('social_'.$network));

            if ($url !== '') {
                $links[] = ['key' => $network, 'label' => $meta['label'], 'url' => $url];
            }
        }

        return $links;
    }

    /**
     * The wa.me chat link, or null when no WhatsApp number is set.
     * Local Nigerian numbers (0803…) are converted to international format.
     */
    public static function whatsappUrl(): ?string
    {
        $digits = preg_replace('/\D+/', '', (string) self::get('whatsapp_number'));

        if ($digits === '') {
            return null;
        }

        if (str_starts_with($digits, '0')) {
            $digits = config('company.whatsapp_country_code', '234').substr($digits, 1);
        }

        $message = trim((string) self::get('whatsapp_message'));

        return 'https://wa.me/'.$digits.($message !== '' ? '?text='.rawurlencode($message) : '');
    }

    /** Whether the floating "Chat on WhatsApp" button should show. */
    public static function showWhatsappButton(): bool
    {
        return self::whatsappUrl() !== null && self::get('whatsapp_button') === '1';
    }
}
