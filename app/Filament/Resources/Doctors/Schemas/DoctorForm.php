<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('department_id')
                    ->relationship('department', 'id'),
                TextInput::make('doctor_name')
                    ->required(),
                TextInput::make('designation'),
                TextInput::make('qualification'),
                TextInput::make('experience_year')
                    ->numeric(),
                TextInput::make('chamber_time'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('bio')
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
