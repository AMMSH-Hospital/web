<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutPageSettings extends Settings
{
    public string $about_description;

    public string $mission;

    public string $vision;

    public array $experience_counters;

    public array $facilities;

    public static function group(): string
    {
        return 'about_page';
    }
}
