<?php

namespace App\Providers;

use App\Models\ContactSubmission;
use App\Models\Service;
use App\Support\SocialSettings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // The site is built with Tailwind, so use Laravel's Tailwind pagination links.
        Paginator::useTailwind();

        // The admin sidebar shows how many enquiries still need a reply.
        View::composer('layouts.admin', function ($view) {
            $view->with('newEnquiryCount', ContactSubmission::where('status', 'new')->count());
        });

        // The public header menu and footer list every insurance product. This
        // shares the cache key the admin clears whenever a product changes.
        // Social links and WhatsApp chat, managed in the admin.
        View::composer(['components.site-layout', 'pages.contact'], function ($view) {
            $view->with([
                'socialLinks' => SocialSettings::links(),
                'whatsappUrl' => SocialSettings::whatsappUrl(),
                'showWhatsappButton' => SocialSettings::showWhatsappButton(),
            ]);
        });

        View::composer('components.site-layout', function ($view) {
            $view->with('navServices', Cache::remember('all_services', 3600, fn () => Service::orderBy('sort_order')->get()));
        });
    }
}
