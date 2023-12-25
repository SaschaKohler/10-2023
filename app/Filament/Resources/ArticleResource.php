<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Artikel';
    protected static ?string $navigationGroup = 'Stammdaten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                //
                Forms\Components\Card::make()
                    ->schema(
                        [
                        Forms\Components\TextInput::make('search')
                            ->label(__('filament::resources/article-resource.form.search'))
                            ->columnSpan(2),
                        Forms\Components\TextInput::make('short_text')
                            ->label(__('filament::resources/article-resource.form.short_text'))
                            ->columnSpan(3),

                        Forms\Components\TextInput::make('unit')
                            ->label(__('filament::resources/article-resource.form.unit'))
                            ->columnSpan(1),

                        Forms\Components\Fieldset::make('Pricing')
                            ->label(__('filament::resources/article-resource.form.pricing'))
                            ->schema(
                                [
                                Forms\Components\TextInput::make('ek')
                                    ->label(__('filament::resources/article-resource.form.ek'))
                                    ->reactive()
                                    ->prefix('€')
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->minValue(0)
                                    ->afterStateUpdated(
                                        function ($state, $get, $set) {
                                            if (filled($state)) {
                                                $set('vk1', round($get('ek') * $get('vk1_perc') / 100 + $get('ek'), 2));
                                                $set('vk2', round($get('ek') * $get('vk2_perc') / 100 + $get('ek'), 2));
                                                $set('vk3', round($get('ek') * $get('vk3_perc') / 100 + $get('ek'), 2));

                                            }
                                        }
                                    )
                                    ->columnSpan(2),


                                Forms\Components\TextInput::make('lpr')
                                    ->label(__('filament::resources/article-resource.form.lpr'))
                                    ->prefix('€')
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->columnSpan(1),
                                ]
                            )->columns(3),

                        Forms\Components\Fieldset::make('Calculations')
                            ->label(__('filament::resources/article-resource.form.calculations'))
                            ->schema(
                                [
                                Forms\Components\TextInput::make('vk1')
                                    ->label(__('filament::resources/article-resource.form.vk1'))
                                    ->reactive()
                                    // ->disabled()
                                    ->prefix('€')
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->afterStateUpdated(
                                        function ($state, callable $set, $get) {
                                            ($state > 0) ? $set('vk1_perc', round(100 - ($get('ek') / $state * 100), 2)) : 0;
                                        }
                                    )->columnSpan(2),

                                Forms\Components\TextInput::make('vk1_perc')
                                    ->label(__('filament::resources/article-resource.form.vk1_perc'))
                                    ->reactive()
                                    ->suffix('%')
                                    ->numeric()
                                    ->afterStateUpdated(fn($state, callable $set, $get) => $set('vk1', round($get('ek') + $get('ek') * ($state / 100), 2)))
                                    ->columnSpan(1),

                                Forms\Components\TextInput::make('vk2')
                                    ->label(__('filament::resources/article-resource.form.vk2'))
                                    ->reactive()
                                    // ->disabled()
                                    ->prefix('€')
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->afterStateUpdated(
                                        function ($state, callable $set, $get) {
                                            ($state > 0) ? $set('vk2_perc', round(100 - ($get('ek') / $state * 100), 2)) : 0;
                                        }
                                    )->columnSpan(2),

                                Forms\Components\TextInput::make('vk2_perc')
                                    ->label(__('filament::resources/article-resource.form.vk2_perc'))
                                    ->reactive()
                                    ->suffix('%')
                                    ->numeric()
                                    ->afterStateUpdated(fn($state, callable $set, $get) => $set('vk2', round($get('ek') + $get('ek') * ($state / 100), 2)))
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('vk3')
                                    ->label(__('filament::resources/article-resource.form.vk3'))
                                    ->reactive()
                                    // ->disabled()
                                    ->prefix('€')
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->afterStateUpdated(
                                        function ($state, callable $set, $get) {
                                            ($state > 0) ? $set('vk3_perc', round(100 - ($get('ek') / $state * 100), 2)) : 0;
                                        }
                                    )->columnSpan(2),


                                Forms\Components\TextInput::make('vk3_perc')
                                    ->label(__('filament::resources/article-resource.form.vk3_perc'))
                                    ->reactive()
                                    ->suffix('%')
                                    ->numeric()
                                    ->afterStateUpdated(fn($state, callable $set, $get) => $set('vk3', round($get('ek') + $get('ek') * ($state / 100), 2)))
                                    ->columnSpan(1),


                                ]
                            )->columns(3)


                        ]
                    )->columns(4)

                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                 Tables\Columns\TextColumn::make('search')
                     ->label(__('filament::resources/article-resource.table.search'))
                     ->wrap()
                     ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('short_text')
                    ->label(__('filament::resources/article-resource.table.short_text'))
                    ->wrap()
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('unit')
                    ->label(__('filament::resources/article-resource.table.unit')),
                Tables\Columns\TextColumn::make('lpr')
                    ->label(__('filament::resources/article-resource.table.lpr'))
                    ->numeric(2,',','.')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ek')
                    ->label(__('filament::resources/article-resource.table.ek'))
                    ->numeric(2,',','.'),
                Tables\Columns\TextColumn::make('vk1')
                    ->label(__('filament::resources/article-resource.table.vk1'))
                    ->numeric(2,',','.'),
                Tables\Columns\TextColumn::make('vk2')
                    ->label(__('filament::resources/article-resource.table.vk2'))
                    ->numeric(2,',','.')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('vk3')
                    ->label(__('filament::resources/article-resource.table.vk3'))
                    ->numeric(2,',','.')
                    ->toggleable(isToggledHiddenByDefault: true),
                //
                ]
            )
            ->filters(
                [
                Tables\Filters\Filter::make('Article')
                    ->form(
                        [
                        Forms\Components\TextInput::make('Article')
                            ->label(__('filament::resources/article-resource.table.filters.article')),

                        ]
                    )
                    ->query(
                        function ($query, array $data) {
                            return $query->when(
                                $data['Article'],
                                fn($query) => $query->where('search', 'like', strtoupper("%{$data['Article']}%"))
                            );

                        }
                    )
                    ->indicateUsing(
                        function (array $data): array {
                            $indicators = [];

                            if ($data['Article'] ?? null) {
                                $indicators['Article'] = __('filament::resources/article-resource.table.filters.article');
                            }
                            return $indicators;
                        }
                    ),
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
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
