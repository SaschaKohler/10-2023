<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'events', function (Blueprint $table) {
                $table->id();
                $table->string('google_id')->nullable();
                $table->string('title')->nullable();
                $table->string('url')->nullable()->default('');
                $table->string('backgroundColor')->nullable();
                $table->string('borderColor')->nullable();
                $table->string('textColor')->nullable();
                $table->dateTime('start')->nullable();
                $table->dateTime('end')->nullable();
                $table->boolean('allDay')->default('false');
                //  $table->string('calendar')->nullable();
                $table->unsignedInteger('recurrence')->nullable()->default(10);

                $table->json('extendedProps')->nullable();
                $table->json('images')->nullable();
                $table->foreignId('user_id')->nullable()->references('id')
                    ->on('users')->cascadeOnDelete();
                $table->foreignId('calendar_id')->nullable()->constrained()->cascadeOnDelete();
                $table->softDeletes();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
