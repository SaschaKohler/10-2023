<?php

namespace App\Providers\Filament;

use App\Filament\Resources\UserResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            // ->navigation(
            //     function (NavigationBuilder $builder): NavigationBuilder {
            //         return $builder->items(
            //             [
            //             NavigationItem::make('Dashboard')
            //                 ->icon('heroicon-s-home')
            //                 ->url(fn (): string => Dashboard::getUrl())
            //             ]
            //         );
            //     }
            // )
            // ->navigation(
            //     function (NavigationBuilder $builder): NavigationBuilder {
            //         return $builder->groups(
            //             [
            //             NavigationGroup::make('Projekte')
            //             ->items(
            //                 [
            //                 ...UserResource::getNavigationItems()
            //                 ]
            //             ),
            //
            //             NavigationGroup::make('Buchführung')
            //             ->items(
            //                 [
            //                 ...UserResource::getNavigationItems()
            //                 ]
            //             )
            //
            //             ]
            //         );
            //     }
            // )
            ->userMenuItems(
                [
                'profile' => MenuItem::make()->label('Edit profile'),
                 MenuItem::make()
                     ->label('Kundenstamm')
                     ->url(fn (): string => UserResource::getUrl())
                     ->icon('heroicon-s-users'),
                // 'calendars' => MenuItem::make()
                //             ->label(__('filament::layout.buttons.manage_calendars.label'))
                //             ->url(CalendarResource::getUrl())
                //             ->icon('heroicon-s-calendar'),
                //
                        // 'vehicles' => MenuItem::make()
                        //     ->label(__('filament::layout.buttons.manage_vehicles.label'))
                        //     ->url(VehicleResource::getUrl())
                        //     ->icon('heroicon-s-truck')
                ]
            )
            ->renderHook(
                'panels::user-menu.before',
                fn (): string => Blade::render('@livewire(\'database-notifications\')'),
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages(
                [
                    Pages\Dashboard::class,
                    ]
            )
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->plugin(
                FilamentFullCalendarPlugin::make()
                    ->selectable()
                    ->editable()
            )
            ->widgets(
                [
                    Widgets\AccountWidget::class,
                    Widgets\FilamentInfoWidget::class,
                    // Widgets\RadarChartWidget::class,
                    ]
            )
            ->middleware(
                [
                    EncryptCookies::class,
                    AddQueuedCookiesToResponse::class,
                    StartSession::class,
                    AuthenticateSession::class,
                    ShareErrorsFromSession::class,
                    VerifyCsrfToken::class,
                    SubstituteBindings::class,
                    DisableBladeIconComponents::class,
                    DispatchServingFilamentEvent::class,
                    ]
            )
            ->authMiddleware(
                [
                    Authenticate::class,
                    ]
            );
    }
}
