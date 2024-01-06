<?php

namespace App\Filament\Resources\EventResource\RelationManagers;

use App\Models\ZipCode;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Squire\Models\Country;

class AddressesRelationManager extends RelationManager
{
    protected static string $relationship = 'addresses';



    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('filament::common.address_of_event');
    }


    public function form(Form $form): Form
    {

        return $form
            ->schema(
                [
                TextInput::make('manager')
                    ->label(__('filament::forms/components/address-form.manager')),
                TextInput::make('street')
                    ->label(__('filament::forms/components/address-form.street')),
                Select::make('zip')
                    ->label(__('filament::common.zip'))
                    ->reactive()
                    ->searchable()
                    ->getSearchResultsUsing(fn(string $query) => ZipCode::where('zip', 'like', "%{$query}%")->pluck('zip', 'id'))
                    ->getOptionLabelUsing(fn($value): ?string => ZipCode::find($value)?->getAttribute('zip'))
                    ->afterStateUpdated(
                        function (Set $set, $state) {
                            if (filled($state)) {
                                $set('city', ZipCode::find($state)->getAttribute('id'));
                            }
                        }
                    ),
                Select::make('city')
                    ->label(__('filament::common.city'))
                    ->reactive()
                    ->searchable()
                    ->getSearchResultsUsing(fn(string $query) => ZipCode::where('location', 'like', "%{$query}%")->pluck('location', 'id'))
                    ->getOptionLabelUsing(fn($value): ?string => ZipCode::find($value)?->getAttribute('location'))
                    ->afterStateUpdated(
                        function (Set $set, $state) {
                            if (filled($state)) {
                                $set('zip', ZipCode::find($state)->getAttribute('id'));
                            }
                        }
                    ),

                Select::make('country')
                    ->label(__('filament::forms/components/address-form.country'))
                    ->searchable()
                    ->getSearchResultsUsing(fn(string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
                    ->getOptionLabelUsing(fn($value): ?string => Country::find($value)?->getAttribute('name'))
                    ->default('Österreich')
                ]
            );
    }

    public function table(Table $table): Table
    {

        return $table
            ->heading(__('filament::common.address_of_event'))
            ->columns(
                [
                TextColumn::make('street')
                    ->label(__('filament::forms/components/address-form.street')),


                TextColumn::make('zip')
                    ->label(__('filament::forms/components/address-form.zip'))
                    ->getStateUsing(fn($record): ?string => ZipCode::find($record->zip)?->zip ?? null),


                TextColumn::make('city')
                    ->label(__('filament::forms/components/address-form.city'))
                    ->getStateUsing(fn($record): ?string => ZipCode::find($record->city)?->location ?? null),


                TextColumn::make('country')
                    ->label(__('filament::forms/components/address-form.country'))
                    ->formatStateUsing(fn($state): ?string => Country::find($state)?->name ?? null),
                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->headerActions(
                [
                AttachAction::make(),
                // CreateAction::make(),
                ]
            )
            ->actions(
                [
                EditAction::make(),
                DetachAction::make(),
                ]
            )
            ->bulkActions(
                [
                DetachBulkAction::make(),
                ]
            );
    }
}
