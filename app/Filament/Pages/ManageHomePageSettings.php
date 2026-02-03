<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Settings\SettingsCluster;
use App\Settings\HomePageSettings;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
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
                        RichEditor::make('hero_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'link', 'textColor'],
                            ]),
                        Textarea::make('hero_description')
                            ->rows(3),
                        FileUpload::make('hero_image')
                            ->disk('public')
                            ->directory('home_page_settings')
                            ->image(),
                    ]),
                Section::make('Our Services')
                    ->description('Manage the services displayed on the home page')
                    ->schema([
                        Repeater::make('our_services')
                            ->schema([
                                FileUpload::make('image')
                                    ->disk('public')
                                    ->directory('home_page_settings/our_services')
                                    ->image()
                                    ->required(),
                                TextInput::make('title')
                                    ->required(),
                                Textarea::make('description')
                                    ->rows(2)
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
