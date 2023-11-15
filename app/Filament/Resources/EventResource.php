<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\ZipCode;
use Filament\Forms;
use Filament\Forms\Form;
use App\Filament\Resources\EventResource\RelationManagers;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
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

                        Forms\Components\Section::make()
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
                            ->live()
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
                                    ->required(),

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
                            ),
                        Forms\Components\Section::make()->schema(
                            [
                            Forms\Components\Placeholder::make('Name')
                                ->label(__('filament::resources/event-resource.client_detail.name'))
                                ->content(fn(Event $record): ?string => $record->client->name1 ?? "-"),
                            Forms\Components\Placeholder::make('email')
                                ->label(__('filament::resources/event-resource.client_detail.email'))
                                ->content(fn(Event $record): ?string => $record->client->email ?? "-"),
                            Forms\Components\Placeholder::make('phone1')
                                ->label(__('filament::resources/event-resource.client_detail.phone1'))
                                ->content(fn(Event $record): ?string => $record->client->phone1 ?? "-"),
                            Forms\Components\Placeholder::make('street')
                                ->label(__('filament::resources/event-resource.client_detail.address'))
                                ->content(
                                    fn(Event $record): ?string => $record->client->street ?? "-" . ' / '
                                    . ZipCode::find($record->client->city ?? null)?->location ?? null
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
                    Split::make(
                        [
                        TextColumn::make('title')
                            ->weight(FontWeight::Bold)
                            ->label(__('filament::resources/event-resource.table.title'))
                            ->sortable()
                            ->searchable(isIndividual: true, isGlobal: false),
                        TextColumn::make('start')
                            ->label(__('filament::resources/event-resource.table.start'))
                            ->sortable()
                            ->date('d.M.y'),
                        TextColumn::make('end')
                            ->label(__('filament::resources/event-resource.end'))
                            ->sortable()
                            ->date('d.M.y')
                            ->toggleable(),
                        TextColumn::make('client.name1')
                            ->label(__('filament::resources/event-resource.table.client'))
                            ->searchable(isIndividual:true, isGlobal:false)
                        ]
                    )->visibleFrom('md'),
                    Stack::make(
                        [
                        TextColumn::make('title')
                            ->weight(FontWeight::Bold)
                            ->label(__('filament::resources/event-resource.table.title'))
                            ->sortable()
                            ->searchable(isIndividual: true, isGlobal: false),
                        TextColumn::make('start')
                            ->label(__('filament::resources/event-resource.table.start'))
                            ->sortable()
                            ->date('d.M.y'),
                        TextColumn::make('client.name1')
                            ->badge()
                            ->label(__('filament::resources/event-resource.table.client'))
                            ->searchable(isIndividual:true, isGlobal:false)

                        ]
                    )->hiddenFrom('md')
                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->actions(
                [
                Tables\Actions\ActionGroup::make(
                    [
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                    ]
                )
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
            RelationManagers\AddressesRelationManager::class,
            RelationManagers\EmployeesRelationManager::class
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
