<?php

namespace App\Filament\Resources\Appointments\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AppointmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Patient Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('patient_name')
                                    ->label('Name'),
                                TextEntry::make('patient_phone')
                                    ->label('Phone'),
                                TextEntry::make('patient_email')
                                    ->label('Email')
                                    ->placeholder('-'),
                                TextEntry::make('date_of_birth')
                                    ->label('Date of Birth')
                                    ->date()
                                    ->placeholder('-'),
                                TextEntry::make('gender')
                                    ->label('Gender')
                                    ->formatStateUsing(fn (?string $state): string => ucfirst($state ?? ''))
                                    ->placeholder('-'),
                                TextEntry::make('patient_type')
                                    ->label('Patient Type')
                                    ->formatStateUsing(fn (?string $state): string => ucfirst($state ?? ''))
                                    ->badge()
                                    ->color(fn (string $state): string => match ($state) {
                                        'new' => 'success',
                                        'returning' => 'info',
                                        default => 'gray',
                                    }),
                            ]),
                    ]),

                Section::make('Appointment Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('doctor.doctor_name')
                                    ->label('Doctor')
                                    ->placeholder('-'),
                                TextEntry::make('department.dept_name')
                                    ->label('Department')
                                    ->placeholder('-'),
                                TextEntry::make('appointment_type')
                                    ->label('Appointment Type')
                                    ->placeholder('-'),
                                TextEntry::make('status')
                                    ->badge()
                                    ->color(fn (string $state): string => match ($state) {
                                        'approved' => 'success',
                                        'rejected' => 'danger',
                                        'completed' => 'info',
                                        default => 'warning',
                                    }),
                                TextEntry::make('appointment_date')
                                    ->date()
                                    ->placeholder('-'),
                                TextEntry::make('appointment_time')
                                    ->placeholder('-'),
                            ]),
                    ]),

                Section::make('Additional Information')
                    ->schema([
                        TextEntry::make('message')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        ImageEntry::make('medical_records')
                            ->disk('public')
                            // ->directory('medical-records')
                            ->label('Medical Records')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->dateTime()
                                    ->placeholder('-'),
                                TextEntry::make('updated_at')
                                    ->dateTime()
                                    ->placeholder('-'),
                            ]),
                    ]),
            ]);
    }
}
