<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $sum_items = round(
            collect($this->record->items)->map(
                function ($item) {
                    return [
                    'price' => $item['qty'] * $item['unit_price'] - $item['qty'] * $item['unit_price'] * $item['discount'] / 100
                    ];
                }
            )->sum('price'), 2
        );

        if ($this->record->discount) {
            $this->record->total_price = round($sum_items - $sum_items * $this->record->discount / 100, 2);
        } else {
            $this->record->total_price = $sum_items;
        }

        $this->record->save();
    }

}
