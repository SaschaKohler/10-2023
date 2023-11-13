<?php

namespace App\Filament\Resources\EventResource\RelationManagers;

use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeesRelationManager extends RelationManager
{
    protected static string $relationship = 'employees';

    public function form(Form $form): Form
    {

        //   return UserResource::form($form);
        return $form
            ->schema(
                [
                    Forms\Components\TimePicker::make('start_at')
                        ->label(__('filament::resources/event-resource.start'))
                        ->seconds(false)
                        ->reactive(),
                Forms\Components\TimePicker::make('end_at')
                        ->label(__('filament::resources/event-resource.end'))
                        ->seconds(false)
                    ->reactive()
                    ->afterStateUpdated(
                            function (Set $get, $set) {
                                $set(
                                    'sum', Carbon::parse($get('end_at'))
                                    ->diffInSeconds($get('start_at'))
                                );
                            }
                        ),
                    Forms\Components\TimePicker::make('sum')
                        ->label(__('filament::resources/event-resource.sum'))
                        ->seconds(false)
                        ->hidden()

                ]
            );

    }

    public function table(Table $table): Table
    {

        return $table
            ->columns(
                [

                    Tables\Columns\TextColumn::make('name1')
                        ->label(__('filament::resources/event-resource.table.employees')),
                    Tables\Columns\TextColumn::make('start_at')
                        ->label(__('filament::resources/event-resource.start'))
                        ->date('H:i'),
                Tables\Columns\TextColumn::make('end_at')
                        ->label(__('filament::resources/event-resource.end'))
                        ->date('H:i'),
                Tables\Columns\TextColumn::make('sum')
                        ->label(__('filament::resources/event-resource.sum'))
                        ->date('H:i'),

                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->headerActions(
                [
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect(true)
                    ->recordSelect(
                        function (Select $select, EmployeesRelationManager $livewire) {
                            $event = $livewire->getRelationship()->getParent();
                            $excluded = [... $event->employees->pluck('name1')];
                            $select->options(
                                User::query()
                                    ->whereNotIn('name1', $excluded)
                                    ->whereIn('role_id', [1, 2])
                                    ->pluck('name1', 'id')
                            );
                            return
                            $select->getSearchResultsUsing(
                                function ($search) use ($excluded) {
                                    return
                                    User::query()
                                        ->whereNotIn('name1', $excluded)
                                        ->whereIn('role_id', [1, 2])
                                        ->where('name1', 'like', "%{$search}%")
                                        ->pluck('name1', 'id');
                                }
                            );
                        }
                    )
                    ->form(
                        fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),

                        Forms\Components\TimePicker::make('start_at')->label('start')
                            ->seconds(false),
                        Forms\Components\TimePicker::make('end_at')->label('end')
                            ->seconds(false),
                        Forms\Components\TimePicker::make('sum')->label('sum')
                            ->hidden(),
                        ]
                    )->mutateFormDataUsing(
                        function (array $data): array {
                            $data['sum'] = Carbon::parse($data['end_at'])
                            ->diffInSeconds(Carbon::parse($data['start_at']));

                            return $data;
                        }
                    )


                ]
            )
            ->actions(
                [
                Tables\Actions\DetachAction::make(),
                Tables\Actions\EditAction::make()
                    ->mutateFormDataUsing(
                        function (array $data): array {
                            $data['sum'] = Carbon::parse($data['end_at'])
                            ->diffInSeconds(Carbon::parse($data['start_at']));
                            return $data;
                        }
                    )
                ]
            )
            ->bulkActions(
                [
                ]
            );
    }
}
