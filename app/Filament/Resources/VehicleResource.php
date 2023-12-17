<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Models\Vehicle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected  static ?string $navigationLabel = 'Fahrzeuge';
    protected static ?string $navigationGroup = 'Stammdaten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                Card::make()
                    ->schema(
                        [
                        FileUpload::make('image')
                            ->label(__('filament::resources/vehicle-resource.image'))
                            ->avatar()
                            ->disk('public')
                            ->columnSpan(4),
                        TextInput::make('branding')
                            ->label(__('filament::resources/vehicle-resource.branding'))
                            ->required()
                            ->columnSpan(3),
                        TextInput::make('license_plate')
                            ->label(__('filament::resources/vehicle-resource.license_plate'))
                            ->required()
                            ->columns(1),


                        Fieldset::make('details')
                            ->label(__('filament::resources/vehicle-resource.details'))
                            ->schema(
                                [
                                Select::make('type')
                                    ->label(__('filament::resources/vehicle-resource.type'))
                                    ->options(
                                        [
                                        1 => __('filament::resources/vehicle-resource.type_options.pkw'),
                                        2 => __('filament::resources/vehicle-resource.type_options.traktor'),
                                        3 => __('filament::resources/vehicle-resource.type_options.drescher'),
                                        4 => __('filament::resources/vehicle-resource.type_options.pritsche'),
                                        5 => __('filament::resources/vehicle-resource.type_options.anhaenger'),
                                        6 => __('filament::resources/vehicle-resource.type_options.pickup'),
                                        ]
                                    )
                                    ->required()
                                    ->columns(3),
                                TextInput::make('owner')
                                    ->label(__('filament::resources/vehicle-resource.owner'))
                                    ->required()
                                    ->string()
                                    ->maxLength(25)
                                    ->columns(2),


                                DatePicker::make('permit')
                                    ->label(__('filament::resources/vehicle-resource.permit'))
                                    ->required(),
                                Select::make('insurance_type')
                                    ->label(__('filament::resources/vehicle-resource.insurance_type'))
                                    ->options(
                                        [
                                        1 => 'keine',
                                        2 => 'Teilkasko',
                                        3 => 'Vollkasko',
                                        ]
                                    )
                                    ->required(),
                                DatePicker::make('inspection')
                                    ->label(__('filament::resources/vehicle-resource.inspection')),
                                TextInput::make('insurance_company')
                                    ->label(__('filament::resources/vehicle-resource.insurance_company')),
                                TextInput::make('insurance_manager')
                                    ->label(__('filament::resources/vehicle-resource.insurance_manager')),

                                ]
                            )->columnSpan(4)


                        ]
                    )
                ]
            )->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('branding')
                    ->label(__('filament::resources/vehicle-resource.image')),
                    // ->disk('public')
                Tables\Columns\TextColumn::make('branding')
                    ->label(__('filament::resources/vehicle-resource.branding'))
                    ->wrap(),
                Tables\Columns\TextColumn::make('permit')
                    ->label(__('filament::resources/vehicle-resource.permit'))
                    ->date()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('license_plate')
                    ->label(__('filament::resources/vehicle-resource.license_plate')),
                Tables\Columns\TextColumn::make('inspection')
                    ->label(__('filament::resources/vehicle-resource.inspection'))
                    ->date()
                    ->sortable()

                ]
            )
            ->filters(
                [
                ]
            )
            ->actions(
                [
                Tables\Actions\EditAction::make(),
                ]
            )
            ->bulkActions(
                [
                Tables\Actions\BulkActionGroup::make(
                    [
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    ]
                ),
                ]
            );
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes(
                [
                SoftDeletingScope::class,
                ]
            );
    }
}
