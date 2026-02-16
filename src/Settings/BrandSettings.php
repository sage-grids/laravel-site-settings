<?php

namespace SageGrids\SiteSettings\Settings;

use Spatie\LaravelSettings\Settings;

class BrandSettings extends Settings
{
    public string $brand_name = '';

    public string $tagline = '';

    /** @var string[] */
    public array $target_audience = [];

    public string $value_proposition = '';

    public string $elevator_pitch = '';

    /** @var array<string, string> e.g. ['primary' => '#000000', 'secondary' => '#ffffff'] */
    public array $color_palette = [];

    /** @var array<string, string> e.g. ['heading' => 'Playfair Display', 'body' => 'Inter'] */
    public array $typography = [];

    public static function group(): string
    {
        return 'brand';
    }
}
