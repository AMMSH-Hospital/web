<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DoctorForm
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
                                Select::make('department_id')
                                    ->relationship('department', 'dept_name')
                                    ->required(),
                                TextInput::make('doctor_name')
                                    ->required(),
                                TextInput::make('designation'),
                                TextInput::make('qualification'),
                                Textarea::make('bio')
                                    ->columnSpanFull(),
                                TextInput::make('experience_year')
                                    ->numeric(),
                                TextInput::make('chamber_time'),
                                TextInput::make('phone')
                                    ->tel(),
                                TextInput::make('email')
                                    ->label('Email address')
                                    ->email(),
                            ]),

                        Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Toggle::make('status')
                                    ->label('Active')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
