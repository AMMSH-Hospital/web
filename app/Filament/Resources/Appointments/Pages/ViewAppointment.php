<?php

namespace App\Filament\Resources\Appointments\Pages;

use App\Filament\Resources\Appointments\AppointmentResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAppointment extends ViewRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
            Action::make('approve')
                ->label('Approve')
                ->icon('heroicon-s-check-circle')
                ->hidden(function ($record) {
                    return $record->status !== 'pending';
                })
                ->action(function () {
                    $this->record->update([
                        'status' => 'approved',
                    ]);
                }),
        ];
    }
}
