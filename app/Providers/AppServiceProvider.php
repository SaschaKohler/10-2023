<?php

namespace App\Providers;

use Filament\Notifications\Livewire\DatabaseNotifications;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        // DatabaseNotifications::trigger('filament::jjjnotifications.database-notifications-trigger');

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        DatabaseNotifications::trigger('filament.notifications.database-notifications-trigger');
        // Model::unguard();
        Pdf::default()
            ->format(Format::A4);
    }
}
