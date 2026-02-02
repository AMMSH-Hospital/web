<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSettings extends Settings
{
    public ?string $hero_title = null;

    public ?string $hero_description = null;

    public ?string $hero_image = null;

    public array $our_services = [];

    public static function group(): string
    {
        return 'home_page';
    }
}
