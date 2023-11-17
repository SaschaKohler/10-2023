<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use App\Models\ZipCode;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        return $form
            ->schema(
                [

                Forms\Components\Tabs::make('required')
                    ->tabs(
                        [
                        Forms\Components\Tabs\Tab::make('required')
                            ->label(__('filament::resources/user-resource.required'))
                            ->schema(
                                [
                                Forms\Components\TextInput::make('name1')
                                    ->label(__('filament::resources/user-resource.name'))
                                    ->required()
                                    ->lazy(),
                                //                                    ->afterStateUpdated(fn(string $context, $state, callable $set) => $set('search', Str::upper($state)) ),
                                //->afterStateUpdated(fn(string $context, $state, callable $set) => $context === 'create' ? $set('search', Str::upper($state)) : null),

                                Forms\Components\TextInput::make('email')
                                    //  ->required()
                                    ->email(),
                                //     ->unique(table: User::class, column: 'email' ,ignoreRecord: true),
                                Forms\Components\TextInput::make('phone1')
                                    ->label(__('filament::resources/user-resource.phone1'))
                                    ->required(),
                                //                                Forms\Components\TextInput::make('password')
                                //                                    ->password()
                                //                                    ->minLength(8)
                                //                                    ->dehydrateStateUsing(static fn(null|string $state): null|string => filled($state) ? Hash::make($state) : null)
                                //                                    ->required(static fn(Page $livewire): bool => $livewire instanceof CreateUser)
                                //                                    ->dehydrated(static fn(null|string $state): bool => filled($state))
                                //                                    ->label(static fn(Page $livewire): string => $livewire instanceof EditUser ? 'New Password' : 'Password')
                                ]
                            ),
                        Forms\Components\Tabs\Tab::make('extended')
                            ->label(__('filament::resources/user-resource.extended'))
                            ->schema(
                                [
                                Forms\Components\TextInput::make('street')
                                    ->label(__('filament::common.street'))
                                    ->columnSpan(2),

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
                                    )
                                    ->columnSpan(1),

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

                                Forms\Components\TextInput::make('phone2')
                                    ->label(__('filament::common.phone2'))
                                    ->tel(),
                                Forms\Components\TextInput::make('phone3')
                                    ->label(__('filament::common.phone3')),
                                Forms\Components\TextInput::make('phone4')
                                    ->label(__('filament::common.phone4')),
                                Forms\Components\TextInput::make('email1')
                                    ->label(__('filament::common.email1')),
                                Forms\Components\DatePicker::make('dob')
                                    ->label(__('filament::common.dob')),
                                Forms\Components\ColorPicker::make('color')
                                    ->label(__('filament::common.color'))
                                    ->rgb(),


                                ]
                            )->columns(2),
                        Forms\Components\Tabs\Tab::make('bank account')
                            ->label(__('filament::resources/user-resource.bank_account'))
                            ->schema(
                                [
                                Forms\Components\TextInput::make('iban'),
                                Forms\Components\TextInput::make('bic'),


                                ]
                            ),

                        Forms\Components\Tabs\Tab::make('manager')
                            ->label(__('filament::resources/user-resource.manager'))
                            ->schema(
                                [
                                Forms\Components\Select::make('title2')
                                    ->label(__('filament::resources/user-resource.title2'))
                                    ->options(
                                        [
                                        'Herr' => 'Herr',
                                        'Frau' => 'Frau'
                                        ]
                                    ),
                                Forms\Components\TextInput::make('manager')
                                    ->label(__('filament::resources/user-resource.manager_name'))
                                ]
                            ),
                        ]
                    )->columnSpan(['lg' => 2]),

                //
                Forms\Components\Card::make()
                    ->schema(
                        [
                        //   Forms\Components\TextInput::make('search')->columnSpan(['lg' => 1]),
                        Forms\Components\Select::make('role_id')
                            ->label(__('filament::common.role_id'))
                            ->options(
                                [
                                '1' => __('filament::common.role.admin'),
                                '2' => __('filament::common.role.employee'),
                                '3' => __('filament::common.role.client'),
                                '4' => __('filament::common.role.supplier'),
                                '5' => __('filament::common.role.dealer'),
                                '6' => __('filament::common.role.guest'),
                                ]
                            )
                            ->default(3)
                        ]
                    )->columnSpan(['lg' => 1]),


                ]
            )->columns(3);

    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns(
                [

                Split::make(
                    [

                        TextColumn::make('name1')
                            ->label(__('filament::resources/user-resource.name'))
                            ->sortable()
                            ->weight(FontWeight::Bold)
                            ->searchable(isIndividual: true, isGlobal: false),
                        TextColumn::make('email')
                            ->searchable(isIndividual: true, isGlobal: false)
                            ->toggleable()
                            ->icon('heroicon-m-envelope')
                            ->visibleFrom('md'),
                        TextColumn::make('phone1')
                            ->icon('heroicon-m-phone')
                            ->visibleFrom('md'),
                        TextColumn::make('events.title')
                            ->label(__('filament::resources/user-resource.table.events'))
                            ->wrap()
                            ->visibleFrom('md'),
                        ]
                ),
                        Stack::make(
                            [
                            TextColumn::make('email')
                                ->searchable(isIndividual: true, isGlobal: false)
                                ->toggleable()
                                ->icon('heroicon-m-envelope'),
                            TextColumn::make('phone1')
                                ->icon('heroicon-m-phone'),
                            ]
                        )->hiddenFrom('md')

                        ]
            )
            ->filters(
                [
                //
                Filter::make('role_id')
                    ->form(
                        [
                        Select::make('role_id')
                            ->label(__('filament::common.role_id'))
                            ->options(
                                [
                                '1' => __('filament::common.role.admin'),
                                '2' => __('filament::common.role.employee'),
                                '3' => __('filament::common.role.client'),
                                '4' => __('filament::common.role.supplier'),
                                '5' => __('filament::common.role.dealer'),
                                '6' => __('filament::common.role.guest'),
                                ]
                            )
                        ]
                    )->query(
                        function ($query, array $data) {
                            return $query->when(
                                $data['role_id'],
                                fn($query) => $query->where('role_id', '=', $data['role_id'])
                            );
                        }
                    ),
                TrashedFilter::make(),

                ]
            )
            ->actions(
                [
                ActionGroup::make(
                    [
                    EditAction::make(),
                    DeleteAction::make()
                    ]
                )
                ]
            )
            ->bulkActions(
                [
                DeleteBulkAction::make(),
                RestoreBulkAction::make()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
