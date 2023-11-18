<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Actions\Action;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function afterCreate(): void
    {
        $event = $this->record;


        Notification::make()
            ->title('Neuer Eintrag')
            ->icon('heroicon-o-shopping-bag')
            ->body("**{$event->title} am {$event->start}**")
            ->actions(
                [
                Action::make('View')
                    ->url(EventResource::getUrl('edit', ['record' => $event])),
                ]
            )
            ->sendToDatabase(auth()->user());
    }
}
