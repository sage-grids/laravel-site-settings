<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('brand.brand_name', '');
        $this->migrator->add('brand.tagline', '');
        $this->migrator->add('brand.target_audience', json_encode([]));
        $this->migrator->add('brand.value_proposition', '');
        $this->migrator->add('brand.elevator_pitch', '');
        $this->migrator->add('brand.color_palette', json_encode([]));
        $this->migrator->add('brand.typography', json_encode([]));
    }
};
