<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Settings\SettingsCluster;
use App\Settings\AboutPageSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageAboutPageSettings extends SettingsPage
{
    protected static ?string $cluster = SettingsCluster::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = AboutPageSettings::class;

    protected static ?int $navigationSort = 3;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('About Page')
                    ->description('About page settings')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('about_title'),
                        TextInput::make('about_description'),
                        TextInput::make('mission'),
                        TextInput::make('vision'),
                    ]),
                Section::make('Experience Counters')
                    ->schema([
                        Repeater::make('experience_counters')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('label')
                                    ->required(),
                                TextInput::make('count')
                                    ->required(),
                            ])
                            ->defaultItems(1),
                    ]),
                Section::make('Facilities')
                    ->schema([
                        Repeater::make('facilities')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('description')
                                    ->required(),
                                TextInput::make('icon')
                                    ->required(),
                            ])
                            ->defaultItems(1),
                    ]),
            ]);
    }
}
