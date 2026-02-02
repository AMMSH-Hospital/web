<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DepartmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Department Details')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('dept_name')
                            ->label('Department Name'),

                        IconEntry::make('status')
                            ->label('Active')
                            ->boolean(),

                        TextEntry::make('beds_count')
                            ->label('Beds Count')
                            ->placeholder('-'),

                        TextEntry::make('description')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),

                Section::make('Services')
                    ->schema([
                        RepeatableEntry::make('services')
                            ->schema([
                                TextEntry::make('name')
                                    ->statePath('')
                                    ->hiddenLabel(),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Extra Information')
                    ->schema([
                        RepeatableEntry::make('extra_infos')
                            ->hiddenLabel()
                            ->schema([
                                TextEntry::make('title')
                                    ->label('Title'),

                                TextEntry::make('description')
                                    ->label('Description')
                                    ->columnSpanFull(),

                                IconEntry::make('featured')
                                    ->label('Featured')
                                    ->boolean(),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),

                Section::make('Media & Meta')
                    ->columns(2)
                    ->schema([
                        ImageEntry::make('image')
                            ->placeholder('-'),

                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),

                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),
                    ]),
            ]);
    }
}
