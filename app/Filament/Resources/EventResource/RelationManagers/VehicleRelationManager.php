<?php

namespace App\Filament\Resources\EventResource\RelationManagers;

use App\Filament\Resources\VehicleResource;
use App\Models\Vehicle;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehicleRelationManager extends RelationManager
{
    protected static string $relationship = 'vehicles';

    public function form(Form $form): Form
    {
        return VehicleResource::form($form);
    }

    public function table(Table $table): Table
    {

        return $table
            ->columns(
                [
                TextColumn::make('branding'),
                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->headerActions(
                actions: [
                AttachAction::make()
                    ->preloadRecordSelect(true)
                    ->recordSelect(
                        function (Select $select, VehicleRelationManager $livewire) {
                            $event = $livewire->getRelationship()->getParent();
                            $excluded = [... $event->vehicles->pluck('branding')];
                            $select->options(Vehicle::whereNotIn('branding', $excluded)->pluck('branding', 'id'));
                            return
                            $select->getSearchResultsUsing(
                                function ($search) use ($excluded) {
                                    return
                                    Vehicle::query()
                                        ->whereNotIn('branding', $excluded)
                                        ->where('branding', 'like', "%{$search}%")
                                        ->pluck('branding', 'id');
                                }
                            );
                        }
                    )

                ]
            )
            ->actions(
                [
                DetachAction::make(),
                EditAction::make()

                ]
            )
            ->bulkActions(
                [
                DetachBulkAction::make(),
                ]
            );


    }
}
