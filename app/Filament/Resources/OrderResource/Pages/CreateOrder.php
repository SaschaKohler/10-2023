<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions\Concerns\HasWizard;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    use HasWizard;

    protected static string $resource = OrderResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Order Details')
                ->label(__('filament::resources/order-resource.wizard.order_details'))
                ->schema(
                    [
                    Card::make(OrderResource::getFormSchema())->columns(),
                    ]
                ),

            Step::make('Order Items')
                ->label(__('filament::resources/order-resource.wizard.order_items'))

                ->schema(
                    [
                    Card::make(OrderResource::getFormSchema('items')),
                    ]
                ),
        ];
    }

    protected function afterCreate(): void
    {
        $sum_items = collect($this->record->items)->map(
            function ($item) {
                return [
                'price' => $item['qty'] * $item['unit_price'] - $item['qty'] * $item['unit_price'] * $item['discount'] / 100
                ];
            }
        )->sum('price');

        if ($this->record->discount) {
            $this->record->total_price = $sum_items - $sum_items * $this->record->discount / 100;
        } else {
            $this->record->total_price = $sum_items;
        }


        $this->record->save();
    }
}
