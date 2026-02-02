<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('about_page.about_title', '');
        $this->migrator->add('about_page.about_description', '');
        $this->migrator->add('about_page.about_image', '');
        $this->migrator->add('about_page.about_video', '');
        $this->migrator->add('about_page.mission', '');
        $this->migrator->add('about_page.vision', '');
        $this->migrator->add('about_page.experience_counters', []);
        $this->migrator->add('about_page.facilities', []);
    }
};
