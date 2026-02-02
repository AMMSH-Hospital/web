<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name = 'Al Mutmainnah';

    public bool $site_active = true;

    public static array $faqs = [];

    public ?string $phone = null;

    public ?string $mail = null;

    public ?string $address = null;

    public ?string $whatsapp = null;

    public array $socials = [];

    public static function group(): string
    {
        return 'general';
    }
}
