<?php

namespace SageGrids\SiteSettings;

use Illuminate\Support\ServiceProvider;

class SiteSettingsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Register package settings classes for Spatie auto-discovery
        $autoDiscover = config('settings.auto_discover_settings', []);
        $packageSettingsPath = __DIR__.'/Settings';

        if (! in_array($packageSettingsPath, $autoDiscover)) {
            config([
                'settings.auto_discover_settings' => array_merge($autoDiscover, [$packageSettingsPath]),
            ]);
        }

        // Publish settings migrations so consuming app can run them
        $this->publishes([
            __DIR__.'/../database/settings/' => database_path('settings'),
        ], 'site-settings-settings');
    }
}
