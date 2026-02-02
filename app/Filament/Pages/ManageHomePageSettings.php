<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Settings\SettingsCluster;
use App\Settings\HomePageSettings;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageHomePageSettings extends SettingsPage
{
    protected static ?string $cluster = SettingsCluster::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = HomePageSettings::class;

    protected static ?int $navigationSort = 2;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->description('Settings for the home page hero section')
                    ->schema([
                        TextInput::make('hero_title')
                            ->required(),
                        Textarea::make('hero_description')
                            ->rows(3),
                        FileUpload::make('hero_image')
                            ->image(),
                    ]),
                Section::make('Our Services')
                    ->description('Manage the services displayed on the home page')
                    ->schema([
                        Repeater::make('our_services')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->required(),
                                TextInput::make('title')
                                    ->required(),
                                Textarea::make('description')
                                    ->rows(2)
                                    ->required(),
                            ])
                            ->grid(2),
                    ]),
            ]);
    }
}
