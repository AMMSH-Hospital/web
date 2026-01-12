<?php

namespace App\Filament\Resources\Appointments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AppointmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('patient_name'),
                TextEntry::make('patient_phone'),
                TextEntry::make('patient_email')
                    ->placeholder('-'),
                TextEntry::make('doctor.id')
                    ->label('Doctor')
                    ->placeholder('-'),
                TextEntry::make('department.id')
                    ->label('Department')
                    ->placeholder('-'),
                TextEntry::make('appointment_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('appointment_time')
                    ->placeholder('-'),
                TextEntry::make('message')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
