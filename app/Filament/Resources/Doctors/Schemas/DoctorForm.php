<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Select::make('department_id')
                            ->relationship('department', 'dept_name')
                            ->required(),
                        TextInput::make('doctor_name')
                            ->required(),
                        TextInput::make('designation'),
                        Textarea::make('bio')
                            ->columnSpanFull(),
                        TextInput::make('experience_year')
                            ->numeric(),
                        TextInput::make('chamber_time'),
                        TextInput::make('phone'),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email(),
                    ]),

                Section::make('Qualifications')
                    ->schema([
                        TextInput::make('qualification')->label('Featured Qualification (Summary)'),
                        Repeater::make('qualifications')
                            ->hiddenLabel()
                            ->simple(
                                TextInput::make('qualification'),
                            )
                            ->minItems(1)
                            ->columnSpan(1),

                    ]),

                Section::make('Professional Experience')
                    ->schema([
                        TextInput::make('professional_experience')->label('Featured Professional Experience (Summary)'),
                        Repeater::make('professional_experiences')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('organization'),
                                TextInput::make('duration'),
                                Textarea::make('description'),
                            ])
                            ->minItems(1)
                            ->columnSpan(1),
                    ]),
                Toggle::make('status')
                    ->label('Active')
                    ->required(),
            ]);
    }
}
