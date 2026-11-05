<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Support\SocialSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSocialSettingsController extends Controller
{
    public function edit(): View
    {
        $values = collect(SocialSettings::keys())->mapWithKeys(fn ($key) => [$key => SocialSettings::get($key)])->all();

        return view('admin.settings.social', [
            'networks' => SocialSettings::NETWORKS,
            'values' => $values,
            'whatsappUrl' => SocialSettings::whatsappUrl(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $rules = [
            'whatsapp_number' => ['nullable', 'string', 'max:25', 'regex:/^\+?[0-9\s\-()]{7,25}$/'],
            'whatsapp_message' => ['nullable', 'string', 'max:300'],
            'whatsapp_button' => ['nullable', 'boolean'],
        ];

        foreach (array_keys(SocialSettings::NETWORKS) as $network) {
            $rules['social_'.$network] = ['nullable', 'url:http,https', 'max:255'];
        }

        $data = $request->validate($rules, [
            'whatsapp_number.regex' => 'Enter a phone number using digits, spaces or a leading +, for example 0803 661 3580.',
            'social_*.url' => 'Enter a full web address starting with https://',
        ]);

        $settings = [];

        foreach (SocialSettings::keys() as $key) {
            $settings[$key] = $key === 'whatsapp_button'
                ? ($request->boolean('whatsapp_button') ? '1' : '0')
                : trim((string) ($data[$key] ?? ''));
        }

        SiteSetting::putMany($settings);

        return redirect()->route('admin.settings.social')->with('status', 'Social media and WhatsApp settings saved.');
    }
}
