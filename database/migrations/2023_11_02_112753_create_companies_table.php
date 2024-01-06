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
            'companies', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->foreignId('user_id')->index();
                $table->text('name')->nullable();
                $table->text('street')->nullable();
                $table->text('zip')->nullable();
                $table->tinyText('country')->nullable();
                $table->text('phone1')->nullable();
                $table->tinyText('city')->nullable();
                $table->text('fax1')->nullable();
                $table->text('phone2')->nullable();
                $table->text('konto')->nullable();
                $table->integer('blz')->nullable();
                $table->text('bank')->nullable();
                $table->string('email')->nullable();
                $table->text('uident')->nullable();
                $table->text('iban')->nullable();
                $table->text('bic')->nullable();
                $table->text('banknr')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
