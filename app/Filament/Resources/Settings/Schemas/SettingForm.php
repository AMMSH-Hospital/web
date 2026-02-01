<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_title'),
                Textarea::make('about')
                    ->columnSpanFull(),
                TextInput::make('contact_title'),
                TextInput::make('contact_phone')
                    ->tel(),
                TextInput::make('contact_email')
                    ->email(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('logo'),
                TextInput::make('favicon'),
                TextInput::make('facebook'),
                TextInput::make('youtube'),
            ]);
    }
}
