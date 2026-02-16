# Laravel Site Settings

Reusable site settings and brand settings for Laravel applications, powered by [spatie/laravel-settings](https://github.com/spatie/laravel-settings).

## Installation

```bash
composer require sage-grids/laravel-site-settings
```

The service provider is auto-discovered by Laravel.

## Publish & Run Migrations

```bash
php artisan vendor:publish --tag=site-settings-settings
php artisan migrate
```

## Settings Classes

### SiteSettings (group: `site`)

General site identity, footer, and analytics settings:

- **Identity**: `site_name`, `site_description`, `site_logo`, `site_logo_dark`, `site_favicon`, `support_email`, `maintenance_mode`, `default_theme`, `default_landing_page`
- **Footer**: `company_name`, `company_address`, `facebook_url`, `twitter_url`, `linkedin_url`, `instagram_url`, `youtube_url`, `github_url`, `tiktok_url`, `privacy_policy_url`, `terms_of_service_url`
- **Analytics**: `google_analytics_id`, `facebook_pixel_id`, `google_tag_manager_id`

### BrandSettings (group: `brand`)

Brand identity and voice settings:

- `brand_name` (string)
- `tagline` (string)
- `target_audience` (array of one-line descriptions)
- `value_proposition` (string)
- `elevator_pitch` (string)
- `color_palette` (array, e.g. `['primary' => '#000', 'secondary' => '#fff']`)
- `typography` (array, e.g. `['heading' => 'Playfair Display', 'body' => 'Inter']`)

## Usage

```php
use SageGrids\SiteSettings\Settings\SiteSettings;
use SageGrids\SiteSettings\Settings\BrandSettings;

// Read
$siteName = app(SiteSettings::class)->site_name;
$brandName = app(BrandSettings::class)->brand_name;

// Write
$settings = app(SiteSettings::class);
$settings->site_name = 'My Site';
$settings->save();
```

## Migrating from GeneralSettings

If you previously used `App\Settings\GeneralSettings` with the `general` group, create a one-time migration in your app that copies `general.*` values to `site.*` in the `settings` table, then remove the old `general.*` keys. See `database/settings/2026_02_16_000000_migrate_general_to_site_settings.php` in the host app for an example.
