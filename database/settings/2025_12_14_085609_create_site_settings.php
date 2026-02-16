<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Identity
        $this->migrator->add('site.site_name', '');
        $this->migrator->add('site.site_description', '');
        $this->migrator->add('site.site_logo', null);
        $this->migrator->add('site.site_logo_dark', null);
        $this->migrator->add('site.site_favicon', null);
        $this->migrator->add('site.support_email', null);
        $this->migrator->add('site.maintenance_mode', false);
        $this->migrator->add('site.default_theme', '');
        $this->migrator->add('site.default_landing_page', '');

        // Footer
        $this->migrator->add('site.company_name', null);
        $this->migrator->add('site.company_address', null);
        $this->migrator->add('site.facebook_url', null);
        $this->migrator->add('site.twitter_url', null);
        $this->migrator->add('site.linkedin_url', null);
        $this->migrator->add('site.instagram_url', null);
        $this->migrator->add('site.youtube_url', null);
        $this->migrator->add('site.github_url', null);
        $this->migrator->add('site.tiktok_url', null);
        $this->migrator->add('site.privacy_policy_url', null);
        $this->migrator->add('site.terms_of_service_url', null);

        // Analytics
        $this->migrator->add('site.google_analytics_id', null);
        $this->migrator->add('site.facebook_pixel_id', null);
        $this->migrator->add('site.google_tag_manager_id', null);
    }
};
