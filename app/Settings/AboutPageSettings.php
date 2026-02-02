<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutPageSettings extends Settings
{
    public ?string $about_title = null;

    public ?string $about_description = null;

    public ?string $mission = null;

    public ?string $vision = null;

    public array $experience_counters = [];

    public array $facilities = [];

    public static function group(): string
    {
        return 'about_page';
    }
}
