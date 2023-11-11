<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create(
            'event_user', function (Blueprint $table) {
                $table->id();
                $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
                $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
                // $table->time('hours')->nullable();
                $table->time('start_at')->nullable()->default(Carbon::parse('07:00')->format('H:i'));
                $table->time('end_at')->nullable()->default(Carbon::parse('16:00')->format('H:i'));
                $table->integer('sum')->nullable()->default(32400);

            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('event_user');
    }
};
