<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\ZipCode;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\EventResource\RelationManagers;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [

                Forms\Components\Fieldset::make('EventData')
                    ->label(__('filament::resources/event-resource.event_data'))
                    ->schema(
                        [
                        Forms\Components\TextInput::make('title')
                            ->label(__('filament::resources/event-resource.table.title'))
                            ->required(),
                        Forms\Components\Select::make('calendar_id')
                            ->label(__('filament::resources/event-resource.table.calendar_type'))
                            ->options(
                                function () {
                                    $calendars = Calendar::all();
                                    return $calendars->mapWithKeys(
                                        function ($calendars) {
                                            return [$calendars->getKey() => static::getCleanOptionString($calendars)];
                                        }
                                    )->toArray();
                                }
                            )
                            ->required()
                            ->allowHtml()
                            ->searchable()
                            ->getSearchResultsUsing(
                                function (string $query) {
                                    $calendar = Calendar::where('type', 'like', "%{$query}%")
                                        ->limit(50)
                                        ->get();
                                    return $calendar->mapWithKeys(
                                        function ($calendar) {
                                            return [$calendar->getKey() => static::getCleanOptionString($calendar)];
                                        }
                                    )->toArray();
                                }
                            )
                            ->getOptionLabelUsing(
                                function ($value): string {
                                    $calendar = Calendar::find($value);
                                    return static::getCleanOptionString($calendar);
                                }
                            ),


                        Forms\Components\DateTimePicker::make('start')
                            ->label(__('filament::resources/event-resource.table.start'))
                            ->firstDayOfWeek(1)
                            ->seconds(false)
                            ->minutesStep(15)
                            ->required(),
                        Forms\Components\DateTimePicker::make('end')
                            ->label(__('filament::resources/event-resource.end'))
                            ->firstDayOfWeek(1)
                            ->seconds(false)
                            ->required(),
                        Forms\Components\Toggle::make('allDay')->label('allDay')
                            ->label(__('filament::resources/event-resource.all_day')),
                        Forms\Components\Select::make('recurrence')
                            ->label(__('filament::resources/event-resource.recurrence'))
                            ->options(
                                [
                                '10' => 'keine',
                                '1' => 'täglich',
                                '2' => 'wöchentlich',
                                '3' => 'alle 14 Tage',
                                '4' => 'alle 3 Wochen',
                                '5' => 'monatlich',
                                '6' => 'alle 3 Monate',
                                '7' => 'halbjährlich',
                                '8' => 'jährlich',
                                ]
                            )
                            ->required(),

                        Forms\Components\Card::make()
                            ->label(__('filament::resources/event-resource.attachments'))
                            ->schema(
                                [
                                Forms\Components\FileUpload::make('images')
                                    ->label(__('filament::resources/event-resource.images'))
                                    ->multiple()
                                    ->disk('public')
                                    ->enableOpen()
                                    ->hint('max. 2MB')
                                ]
                            )->columns(1)
                        ]
                    )->columnSpan(['lg' => 2]),

                Forms\Components\Fieldset::make('Client')
                    ->label(__('filament::resources/event-resource.client_detail.header'))
                    ->schema(
                        [
                        Forms\Components\Select::make('user_id')
                            ->label(__('filament::resources/event-resource.table.client'))
                            ->relationship(
                                'client', 'name1',
                                fn(Builder $query) => $query->where('role_id', '=', 3)
                            )
                            ->required()
                            ->searchable()
                            ->preload()
                            ->createOptionForm(
                                [
                                Forms\Components\TextInput::make('name1')
                                    ->label(__('filament::resources/event-resource.client_detail.name'))
                                    ->required(),
                                Forms\Components\TextInput::make('email')
                                    ->label(__('filament::resources/event-resource.client_detail.email'))
                                    ->required()
                                    ->email(),
                                Forms\Components\TextInput::make('phone1')
                                    ->label(__('filament::resources/event-resource.client_detail.phone1'))
                                    ->required()
                                    ->tel(),
                                Forms\Components\TextInput::make('street')
                                    ->label(__('filament::resources/event-resource.client_detail.address'))
                                    ->required()
                                ]
                            ),
                        Forms\Components\Card::make()->schema(
                            [
                            Forms\Components\Placeholder::make('Name')
                                ->label(__('filament::resources/event-resource.client_detail.name'))
                                ->content(fn(Event $record): ?string => $record->client->name1),
                            Forms\Components\Placeholder::make('email')
                                ->label(__('filament::resources/event-resource.client_detail.email'))
                                ->content(fn(Event $record): ?string => $record->client->email),
                            Forms\Components\Placeholder::make('phone1')
                                ->label(__('filament::resources/event-resource.client_detail.phone1'))
                                ->content(fn(Event $record): ?string => $record->client->phone1),
                            Forms\Components\Placeholder::make('street')
                                ->label(__('filament::resources/event-resource.client_detail.address'))
                                ->content(
                                    fn(Event $record): ?string => $record->client->street . ' / '
                                    . ZipCode::find($record->client->city)?->location ?? null
                                ),
                            Forms\Components\Placeholder::make('created_at')
                                ->label(__('filament::common.created_at'))
                                ->content(
                                    function (Event $record) {
                                        if ($record->author()->exists()) { return $record->created_at->diffForHumans() .
                                            ' -> ' . $record->author->name1;
                                        }
                                        return $record->created_at->diffForHumans();
                                    }
                                ),
                            Forms\Components\Placeholder::make('updated_at')
                                ->label(__('filament::common.updated_at'))
                                ->content(
                                    function (Event $record) {
                                        if ($record->editor()->exists()) { return $record->updated_at->diffForHumans() .
                                            ' -> ' . $record->editor->name1;
                                        }
                                        return $record->created_at->diffForHumans();
                                    }
                                )
                            ]
                        )
                            ->hidden(fn(?Event $record) => $record === null)
                            ->columns(1)
                        ]
                    )->columns(1)->columnSpan(['lg' => 1]),
                ]
            )->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                //
                Tables\Columns\TextColumn::make('title')
                    ->label(__('filament::resources/event-resource.table.title'))
                    ->sortable()
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('start')
                    ->label(__('filament::resources/event-resource.table.start'))
                    ->sortable()
                    ->date('d.M.y'),
                Tables\Columns\TextColumn::make('end')
                    ->label(__('filament::resources/event-resource.end'))
                    ->sortable()
                    ->date('d.M.y'),
                Tables\Columns\TextColumn::make('client.name1')
                    ->label(__('filament::resources/event-resource.table.client'))
                    ->searchable(isIndividual:true, isGlobal:false)
                ]
            )
            ->filters(
                [
                //
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
                    ]
                ),
                ]
            );
    }

    public static function getRelations(): array
    {
        return [
            //
            RelationManagers\AddressesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

    private static function getCleanOptionString(Model $model): string
    {

        return //Purify::clean(
            view('filament.components.select-calendar-result')
            ->with('type', $model?->type)
            ->with('description', $model?->description)
            ->with('color', $model?->color)
            ->render();
    }
}
