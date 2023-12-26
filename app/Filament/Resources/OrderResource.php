<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Article;
use App\Models\Order;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                Wizard::make(
                    [
                    Wizard\Step::make('Order Deatails')
                        ->label(__('filament::resources/order-resource.wizard.order_details'))
                        ->schema(
                            [
                            Section::make(OrderResource::getFormSchema())->columns(),
                            ]
                        ),
                    Wizard\Step::make('Order Items')
                        ->label(__('filament::resources/order-resource.wizard.order_items'))
                        ->schema(
                            [
                            Section::make(OrderResource::getFormSchema('items')),
                            ]
                        ),
                    ]
                )
                ]
            )->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                 TextColumn::make('number')
                     ->label(__('filament::resources/order-resource.table.number'))
                     ->searchable()
                     ->sortable(),
                TextColumn::make('client.name1')
                    ->label(__('filament::resources/order-resource.table.client_name'))
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('status')
                    ->label(__('filament::resources/order-resource.table.status'))
                     ->badge()
                    ->colors(
                        [
                                        'danger' => 'cancelled',
                                        'warning' => 'processing',
                                        'success' => fn($state) => in_array($state, ['delivered', 'shipped']),
                                        ]
                    ),

                TextColumn::make('total_price')
                    ->label(__('filament::resources/order-resource.table.total_price'))
                    ->money('eur')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label(__('filament::resources/order-resource.table.order_created_at'))
                    ->date()
                    ->toggleable(),
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
    /**
     * @return array<int,mixed>
     */
    public static function getFormSchema(?string $section = null): array
    {
        if ($section === 'items') {
            return [
                TextInput::make('discount')
                    ->label(__('filament::resources/order-resource.form.total_discount'))
                    ->reactive()
                    ->numeric()
                    ->suffix('%'),


                Repeater::make('items')
                    ->label(__('filament::resources/order-resource.form.items'))
                    ->relationship()
                    ->schema(
                        [

                        Select::make('article_id')
                            ->label(__('filament::resources/order-resource.form.article'))
                            ->required()
                            ->reactive()
                            ->searchable()
                            ->preload()
                            ->getSearchResultsUsing(fn(string $query) => Article::where('search', 'like', mb_strtoupper("%{$query}%", 'UTF-8'))->pluck('short_text', 'id'))
                            ->getOptionLabelUsing(fn($value): ?string => Article::find($value)?->getAttribute('short_text'))
                            ->afterStateUpdated(
                                function ($state, callable $set, $get) {
                                    $set('unit_price', Article::find($state)?->vk1 ?? 0);
                                    $set('unit', Article::find($state)?->unit ?? 0);
                                    $set('sub_total', $get('qty') * $get('unit_price'));
                                }
                            )
                            ->columnSpan(
                                [
                                'md' => 10,
                                ]
                            ),
                        TextInput::make('discount')
                            ->label(__('filament::resources/order-resource.form.row_discount'))
                            ->reactive()
                            ->numeric()
                            ->inputMode('decimal')
                            ->suffix('%')
                            ->columnSpan(['md' => 3])
                            ->afterStateUpdated(
                                function ($state, callable $set, $get) {
                                    filled($state) ?
                                    $set('sub_total', round($get('sub_total') - $state / 100 * $get('sub_total'), 2)) :
                                    $set('sub_total', round($get('qty') * $get('unit_price'), 2));
                                }
                            ),

                        TextInput::make('qty')
                            ->label(__('filament::resources/order-resource.form.qty'))
                            ->numeric()
                            ->reactive()
                            ->default(1)
                            ->afterStateUpdated(
                                function ($state, $get, $set) {
                                    filled($state) ? $set('sub_total', round($get('qty') * $get('unit_price'), 2)) : 0;
                                }
                            )
                            ->columnSpan(
                                [
                                'md' => 1,
                                ]
                            )
                            ->required(),
                        TextInput::make('unit')
                            ->label(__('filament::resources/order-resource.form.unit'))
                            ->reactive()
                            // ->disabled()
                            ->columnSpan(['md' => 1]),

                        TextInput::make('unit_price')
                            ->label(__('filament::resources/order-resource.form.unit_price'))
                            // ->disabled()
                            ->reactive()
                            ->numeric()
                            ->required()
                            ->columnSpan(
                                [
                                'md' => 2,
                                ]
                            ),
                        TextInput::make('sub_total')
                            ->label(__('filament::resources/order-resource.form.sub_total'))
                            // ->disabled()
                            ->reactive()
                            ->numeric()
                            ->columnSpan(['md' => 3])
                        ]
                    )
                     ->orderable()
                    ->defaultItems(1)
                    ->disableLabel()
                    ->columns(
                        [
                        'md' => 10,
                        ]
                    )
                    ->required(),
            ];
        }

        return [
            TextInput::make('number')
                ->label(__('filament::resources/order-resource.form.number'))
                ->default('OR-' . random_int(100000, 999999))
                // ->disabled()
                ->required(),
            Select::make('status')
                ->label(__('filament::resources/order-resource.table.status'))
                ->options(
                    [
                    'new' => __('filament::resources/order-resource.form.status.options.new'),
                    'processing' => __('filament::resources/order-resource.form.status.options.processing'),
                    'delivered' => __('filament::resources/order-resource.form.status.options.delivered'),
                    'cancelled' => __('filament::resources/order-resource.form.status.options.cancelled'),
                    ]
                )
                ->required(),

            Section::make()
                ->schema(
                    [
                    Select::make('user_id')
                        ->label(__('filament::resources/order-resource.form.client_name'))
                        ->relationship('client', 'name1')
                        ->searchable()
                        ->required(),
                    ]
                )
        ];
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
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
