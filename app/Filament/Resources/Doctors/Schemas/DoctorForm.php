<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
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
                        TagsInput::make('tags'),
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
                            ->defaultItems(1)
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
                            ->defaultItems(1)
                            ->columnSpan(1),
                    ]),

                Section::make('Schedules')
                    ->columnSpanFull()
                    ->schema([
                        Repeater::make('schedules')
                            ->relationship('schedules')
                            ->schema([
                                Select::make('day_name')
                                    ->options([
                                        'Saturday' => 'Saturday',
                                        'Sunday' => 'Sunday',
                                        'Monday' => 'Monday',
                                        'Tuesday' => 'Tuesday',
                                        'Wednesday' => 'Wednesday',
                                        'Thursday' => 'Thursday',
                                        'Friday' => 'Friday',
                                    ])
                                    ->required(),
                                TimePicker::make('start_time')
                                    ->required(),
                                TimePicker::make('end_time')
                                    ->required(),
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ]),

                Toggle::make('status')
                    ->label('Active')
                    ->required(),
                Toggle::make('featured_on_home')
                    ->label('Featured on Home')
                    ->required(),
            ]);
    }
}
