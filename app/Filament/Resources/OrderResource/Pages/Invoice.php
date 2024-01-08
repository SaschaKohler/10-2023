<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Enums\DocumentType;
use App\Enums\Font;
use App\Enums\PaymentTerms;
use App\Enums\Template;
use App\Filament\Resources\OrderResource;
use App\Models\Order;
use App\Models\Setting\DocumentDefault as InvoiceModel;
use App\Models\ZipCode;
use Barryvdh\Debugbar\Facades\Debugbar;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Support\Exceptions\Halt;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use function Filament\authorize;

class Invoice extends Page
{

    use InteractsWithFormActions;
    use InteractsWithRecord;

    protected static string $resource = OrderResource::class;

    protected static string $view = 'filament.resources.order-resource.pages.invoice';


    public ?InvoiceModel $Irecord = null;
    public ?array $data = [];


    public function mount(int | string $record): void
    {

        $this->Irecord = InvoiceModel::invoice()
            ->firstOrNew(
                [
                'company_id' => 1,
                'type' => DocumentType::Invoice->value,
                ]
            );

            // abort_unless(static::canView($this->record), 404);
        $this->record = $this->resolveRecord($record);
        // dd($this->Irecord);
        $this->fillForm();

        static::authorizeResourceAccess();
    }

    public function fillForm(): void
    {
        $data = $this->Irecord->attributesToArray();
        // dd($data);
        $this->form->fill($data);
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            // dd($data, $this->Irecord);
            $this->handleRecordUpdate($this->Irecord, $data);

        } catch (Halt $exception) {
            return;
        }

        $this->getSavedNotification()->send();
    }

    protected function getSavedNotification(): Notification
    {
        return Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'));
    }

    public function form(Form $form): Form
    {
        return $form
            ->live()
            ->schema(
                [
                $this->getGeneralSection(),
                $this->getContentSection(),
                $this->getTemplateSection(),
                ]
            )
            ->model($this->Irecord)
            ->statePath('data')
            ->operation('edit');
    }

    protected function getGeneralSection(): Component
    {
        return Section::make('General')
            ->schema(
                [
                // TextInput::make('number_prefix')
                //     ->nullable(),
                // Select::make('number_digits')
                //     ->softRequired()
                //     ->options(InvoiceModel::availableNumberDigits()),
                // TextInput::make('number_next')
                //     ->softRequired()
                //     ->maxLength(static fn (Get $get) => $get('number_digits'))
                //     ->hint(
                //         static function (Get $get, $state) {
                //             $number_prefix = $get('number_prefix');
                //             $number_digits = $get('number_digits');
                //             $number_next = $state;
                //
                //             return InvoiceModel::getNumberNext(true, true, $number_prefix, $number_digits, $number_next);
                //         }
                //     ),
                Select::make('payment_terms')
                    ->options(PaymentTerms::class),
                ]
            )->columns();
    }

    protected function getContentSection(): Component
    {
        return Section::make('Content')
            ->schema(
                [
                TextInput::make('header')
                    ->nullable(),
                TextInput::make('subheader')
                    ->nullable(),
                Textarea::make('terms')
                    ->nullable(),
                Textarea::make('footer')
                    ->nullable(),
                ]
            )->columns();
    }


    protected function getTemplateSection(): Component
    {
        return Section::make('Template')
            ->description('Choose the template and edit the column names.')
            ->schema(
                [
                Grid::make(1)
                    ->schema(
                        [
                        FileUpload::make('logo')
                            ->openable()
                            ->maxSize(1024)
                            // ->localizeLabel()
                            ->visibility('public')
                            ->disk('public')
                            ->directory('logos/document')
                            ->imageResizeMode('contain')
                            ->imageCropAspectRatio('3:2')
                            ->panelAspectRatio('3:2')
                            ->panelLayout('integrated')
                            ->removeUploadedFileButtonPosition('center bottom')
                            ->uploadButtonPosition('center bottom')
                            ->uploadProgressIndicatorPosition('center bottom')
                            ->getUploadedFileNameForStorageUsing(
                                static fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(Auth::user()->id . '_'),
                            )
                            ->extraAttributes(
                                [
                                'class' => 'aspect-[3/2] w-[9.375rem] max-w-full',
                                ]
                            )
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/gif']),
                        Checkbox::make('show_logo'),
                            // ->localizeLabel(),
                        ColorPicker::make('accent_color'),
                            // ->localizeLabel(),
                        Select::make('font')
                            // ->softRequired()
                            // ->localizeLabel()
                            ->allowHtml()
                            ->options(
                                collect(Font::cases())
                                    ->mapWithKeys(
                                        static fn ($case) => [
                                        $case->value => "<span style='font-family:{$case->getLabel()}'>{$case->getLabel()}</span>",
                                        ]
                                    ),
                            ),
                        Select::make('template')
                            ->options(Template::class),
                        Select::make('item_qty.option')
                            // ->softRequired()
                            // ->localizeLabel('Item Name')
                            ->options(InvoiceModel::getAvailableItemQtyOptions())
                            ->afterStateUpdated(
                                static function (Get $get, Set $set, $state, $old) {
                                    if ($state !== 'other' && $old === 'other' && filled($get('item_qty.custom'))) {
                                        $set('item_qty.old_custom', $get('item_qty.custom'));
                                        $set('item_qty.custom', null);
                                    }

                                    if ($state === 'other' && $old !== 'other') {
                                        $set('item_qty.custom', $get('item_qty.old_custom'));
                                    }
                                }
                            ),
                        Select::make('item_name.option')
                            // ->softRequired()
                            // ->localizeLabel('Item Name')
                            ->options(InvoiceModel::getAvailableItemNameOptions())
                            ->afterStateUpdated(
                                static function (Get $get, Set $set, $state, $old) {
                                    if ($state !== 'other' && $old === 'other' && filled($get('item_name.custom'))) {
                                        $set('item_name.old_custom', $get('item_name.custom'));
                                        $set('item_name.custom', null);
                                    }

                                    if ($state === 'other' && $old !== 'other') {
                                        $set('item_name.custom', $get('item_name.old_custom'));
                                    }
                                }
                            ),
                        TextInput::make('item_name.custom')
                            ->hiddenLabel()
                            ->disabled(static fn (callable $get) => $get('item_name.option') !== 'other')
                            ->nullable(),
                        Select::make('unit_name.option')
                            // ->softRequired()
                            // ->localizeLabel('Unit Name')
                            ->options(InvoiceModel::getAvailableUnitNameOptions())
                            ->afterStateUpdated(
                                static function (Get $get, Set $set, $state, $old) {
                                    if ($state !== 'other' && $old === 'other' && filled($get('unit_name.custom'))) {
                                        $set('unit_name.old_custom', $get('unit_name.custom'));
                                        $set('unit_name.custom', null);
                                    }

                                    if ($state === 'other' && $old !== 'other') {
                                        $set('unit_name.custom', $get('unit_name.old_custom'));
                                    }
                                }
                            ),
                        TextInput::make('unit_name.custom')
                            ->hiddenLabel()
                            ->disabled(static fn (callable $get) => $get('unit_name.option') !== 'other')
                            ->nullable(),
                        Select::make('price_name.option')
                            // ->softRequired()
                            // ->localizeLabel('Price Name')
                            ->options(InvoiceModel::getAvailablePriceNameOptions())
                            ->afterStateUpdated(
                                static function (Get $get, Set $set, $state, $old) {
                                    if ($state !== 'other' && $old === 'other' && filled($get('price_name.custom'))) {
                                        $set('price_name.old_custom', $get('price_name.custom'));
                                        $set('price_name.custom', null);
                                    }

                                    if ($state === 'other' && $old !== 'other') {
                                        $set('price_name.custom', $get('price_name.old_custom'));
                                    }
                                }
                            ),
                        TextInput::make('price_name.custom')
                            ->hiddenLabel()
                            ->disabled(static fn (callable $get) => $get('price_name.option') !== 'other')
                            ->nullable(),
                        Select::make('amount_name.option')
                            // ->softRequired()
                            // ->localizeLabel('Amount Name')
                            ->label('Amount')
                            ->options(InvoiceModel::getAvailableAmountNameOptions())
                            ->afterStateUpdated(
                                static function (Get $get, Set $set, $state, $old) {
                                    if ($state !== 'other' && $old === 'other' && filled($get('amount_name.custom'))) {
                                        $set('amount_name.old_custom', $get('amount_name.custom'));
                                        $set('amount_name.custom', null);
                                    }

                                    if ($state === 'other' && $old !== 'other') {
                                        $set('amount_name.custom', $get('amount_name.old_custom'));
                                    }
                                }
                            ),
                        TextInput::make('amount_name.custom')
                            ->hiddenLabel()
                            ->disabled(static fn (callable $get) => $get('amount_name.option') !== 'other')
                            ->nullable(),
                        ]
                    )->columnSpan(1),
                Grid::make()
                    ->schema(
                        [
                        ViewField::make('preview.default')
                            ->columnSpan(2)
                            ->hiddenLabel()
                            ->visible(static fn (callable $get) => $get('template') === 'default')
                            ->view('filament.company.components.invoice-layouts.default'),
                        ViewField::make('preview.modern')
                            ->columnSpan(2)
                            ->hiddenLabel()
                            ->visible(static fn (callable $get) => $get('template') === 'modern')
                            ->view('filament.company.components.invoice-layouts.modern'),
                        ViewField::make('preview.classic')
                            ->columnSpan(2)
                            ->hiddenLabel()
                            ->visible(static fn (callable $get) => $get('template') === 'classic')
                            ->view('filament.company.components.invoice-layouts.classic'),
                        ]
                    )->columnSpan(2),
                ]
            )->columns(3);
    }

    protected function handleRecordUpdate(InvoiceModel $record, array $data): InvoiceModel
    {
        $record->update($data);

        return $record;
    }

    /**
     * @return array<Action | ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction(),
            $this->getPrintFormAction(),
        ];
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->keyBindings(['mod+s']);
    }

    protected function getPrintFormAction(): Action
    {
        return Action::make('Print')
            ->button()
            ->color('success')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-printer')
            ->icon('heroicon-o-printer')

            ->action(fn (Order $order) => redirect()->route('invoices.print', ['id' => $order->id ]));
            // ->url(route('invoices.pay', ['invoice' => $this->data['id']]))
            // ->url(fn (Order $order): string => OrderResource::getUrl('check-order', [ $order->id ]));


    }


    public static function canView(Model $record): bool
    {
        try {
            return authorize('update', $record)->allowed();
        } catch (AuthorizationException $exception) {
            return $exception->toResponse()->allowed();
        }
    }
}
