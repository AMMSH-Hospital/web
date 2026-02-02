<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DoctorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Basic Information')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('department.dept_name')
                            ->label('Department')
                            ->placeholder('-'),

                        TextEntry::make('doctor_name'),

                        TextEntry::make('designation')
                            ->placeholder('-'),

                        TextEntry::make('experience_year')
                            ->label('Experience (Years)')
                            ->numeric()
                            ->placeholder('-'),

                        TextEntry::make('chamber_time')
                            ->placeholder('-'),

                        TextEntry::make('phone')
                            ->placeholder('-'),

                        TextEntry::make('email')
                            ->label('Email address')
                            ->placeholder('-'),

                        TextEntry::make('bio')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),

                Section::make('Qualifications')
                    ->schema([
                        TextEntry::make('qualification')
                            ->label('Featured Qualification')
                            ->placeholder('-'),

                        RepeatableEntry::make('qualifications')
                            ->label('All Qualifications')
                            ->schema([
                                TextEntry::make('qualification')
                                    ->statePath('')
                                    ->hiddenLabel(),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Professional Experience')
                    ->schema([
                        TextEntry::make('professional_experience')
                            ->label('Featured Experience')
                            ->placeholder('-'),

                        RepeatableEntry::make('professional_experiences')
                            ->schema([
                                TextEntry::make('title')
                                    ->label('Title'),

                                TextEntry::make('organization')
                                    ->label('Organization'),

                                TextEntry::make('duration')
                                    ->label('Duration'),

                                TextEntry::make('description')
                                    ->label('Description')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),

                Section::make('Meta Data')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('tags')
                            ->label('Tags')
                            ->columnSpanFull()
                            ->badge()
                            ->placeholder('-'),

                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),

                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),

                        IconEntry::make('status')
                            ->boolean(),
                    ]),
            ]);
    }
}
