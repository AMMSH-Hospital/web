<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSettings extends Settings
{
    public string $hero_title;

    public string $hero_description;

    public string $hero_image;

    public array $our_services;

    public static function group(): string
    {
        return 'home_page';
    }
}
