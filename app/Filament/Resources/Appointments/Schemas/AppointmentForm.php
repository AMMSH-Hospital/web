<?php

namespace App\Filament\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('patient_name')
                    ->required(),
                TextInput::make('patient_phone')
                    ->tel()
                    ->required(),
                TextInput::make('patient_email')
                    ->email(),
                Select::make('doctor_id')
                    ->relationship('doctor', 'id'),
                Select::make('department_id')
                    ->relationship('department', 'id'),
                DatePicker::make('appointment_date'),
                TextInput::make('appointment_time'),
                Textarea::make('message')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
            ]);
    }
}
