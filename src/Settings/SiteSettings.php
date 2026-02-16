<?php

namespace SageGrids\SiteSettings\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    // Identity
    public string $site_name = '';

    public string $site_description = '';

    public ?string $site_logo = null;

    public ?string $site_logo_dark = null;

    public ?string $site_favicon = null;

    public ?string $support_email = null;

    public bool $maintenance_mode = false;

    public string $default_theme = '';

    public string $default_landing_page = '';

    // Footer
    public ?string $company_name = null;

    public ?string $company_address = null;

    public ?string $facebook_url = null;

    public ?string $twitter_url = null;

    public ?string $linkedin_url = null;

    public ?string $instagram_url = null;

    public ?string $youtube_url = null;

    public ?string $github_url = null;

    public ?string $tiktok_url = null;

    public ?string $privacy_policy_url = null;

    public ?string $terms_of_service_url = null;

    // Analytics
    public ?string $google_analytics_id = null;

    public ?string $facebook_pixel_id = null;

    public ?string $google_tag_manager_id = null;

    public static function group(): string
    {
        return 'site';
    }
}
