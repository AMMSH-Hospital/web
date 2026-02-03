<?php

use Spatie\LaravelSettings\Settings;
use Spatie\LaravelSettings\SettingsContainer;

if (! function_exists('enToBnNumber')) {
    function enToBnNumber($number)
    {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

        return str_replace($en, $bn, $number);
    }
}

if (! function_exists('settings')) {
    function settings(string $group): Settings
    {
        /** @var SettingsContainer $container */
        $container = app(SettingsContainer::class);
        foreach ($container->getSettingClasses() as $settingsClass) {
            if ($settingsClass::group() === $group) {
                return app($settingsClass);
            }
        }

        throw new InvalidArgumentException("Settings group [{$group}] not found.");
    }
}
