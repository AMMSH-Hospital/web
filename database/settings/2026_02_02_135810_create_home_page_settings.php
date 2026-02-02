<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home_page.hero_title', '');
        $this->migrator->add('home_page.hero_description', '');
        $this->migrator->add('home_page.hero_image', '');
        $this->migrator->add('home_page.our_services', []);
    }
};
