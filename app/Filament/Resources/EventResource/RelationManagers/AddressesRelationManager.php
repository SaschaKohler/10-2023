<?php

namespace App\Filament\Resources\EventResource\RelationManagers;

use App\Models\ZipCode;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Squire\Models\Country;

class AddressesRelationManager extends RelationManager
{
    protected static string $relationship = 'addresses';

    public function form(Form $form): Form
    {

        return $form
            ->schema(
                [
                Forms\Components\TextInput::make('manager')
                    ->label(__('filament::forms/components/address-form.manager')),
                Forms\Components\TextInput::make('street')
                    ->label(__('filament::forms/components/address-form.street')),
                Forms\Components\Select::make('zip')
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
                Forms\Components\Select::make('city')
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

                Forms\Components\Select::make('country')
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
            ->columns(
                [
                Tables\Columns\TextColumn::make('street')
                    ->label(__('filament::forms/components/address-form.street')),


                Tables\Columns\TextColumn::make('zip')
                    ->label(__('filament::forms/components/address-form.zip'))
                    ->getStateUsing(fn($record): ?string => ZipCode::find($record->zip)?->zip ?? null),


                Tables\Columns\TextColumn::make('city')
                    ->label(__('filament::forms/components/address-form.city'))
                    ->getStateUsing(fn($record): ?string => ZipCode::find($record->city)?->location ?? null),


                Tables\Columns\TextColumn::make('country')
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
                Tables\Actions\AttachAction::make(),
                Tables\Actions\CreateAction::make(),
                ]
            )
            ->actions(
                [
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                ]
            )
            ->bulkActions(
                [
                Tables\Actions\DetachBulkAction::make(),
                ]
            );
    }
}
