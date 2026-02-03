<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Settings\SettingsCluster;
use App\Settings\GeneralSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $cluster = SettingsCluster::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = GeneralSettings::class;

    protected static ?int $navigationSort = 1;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('General Settings')
                    ->description('General settings for the site')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required(),
                        TextInput::make('phone')
                            ->label('Phone'),
                        TextInput::make('mail')
                            ->label('Mail'),
                        TextInput::make('whatsapp')
                            ->label('Whatsapp'),
                        Textarea::make('address')
                            ->label('Address')
                            ->rows(3)
                            ->columnSpanFull(),
                        Repeater::make('faqs')
                            ->label('FAQ')
                            ->schema([
                                TextInput::make('question')
                                    ->label('Question')
                                    ->required(),
                                TextInput::make('answer')
                                    ->label('Answer')
                                    ->required(),
                            ])
                            ->columnSpanFull(),
                        Toggle::make('site_active')
                            ->columnSpanFull()
                            ->label('Site Active'),
                    ]),
            ]);
    }
}
