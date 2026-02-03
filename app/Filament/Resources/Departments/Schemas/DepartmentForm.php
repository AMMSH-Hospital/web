<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        Section::make()
                            ->columnSpan(2)
                            ->schema([
                                TextInput::make('dept_name')
                                    ->label('Department Name')
                                    ->required(),

                                Textarea::make('description')
                                    ->label('Description'),

                                Repeater::make('services')
                                    ->defaultItems(1)
                                    ->simple(
                                        TextInput::make('name')->required(),
                                    ),

                                TextInput::make('beds_count')
                                    ->label('Beds Count'),

                                Repeater::make('extra_infos')
                                    ->defaultItems(1)
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        TextInput::make('description')->required(),
                                        Toggle::make('featured')->required(),
                                    ]),
                            ]),

                        Grid::make(1)
                            ->schema([
                                Section::make()
                                    ->columnSpan(1)
                                    ->schema([
                                        TextInput::make('contact_phone')
                                            ->label('Contact Phone'),
                                        TextInput::make('contact_mail')
                                            ->label('Contact Mail')
                                            ->email(),
                                    ]),
                                Section::make()
                                    ->columnSpan(1)
                                    ->schema([
                                        FileUpload::make('image')
                                            ->directory('departments')
                                            ->disk('public')
                                            ->label('Image')
                                            ->image(),

                                        Toggle::make('status')
                                            ->label('Active')
                                            ->required(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
