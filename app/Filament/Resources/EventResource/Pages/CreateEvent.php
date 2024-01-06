<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Actions\Action;

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


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['author_id'] = auth()->id();

        return $data;
    }

}
