<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'addresses', function (Blueprint $table) {
                $table->id();
                $table->string('street')->nullable();
                $table->string('zip')->nullable();
                $table->string('city')->nullable();
                $table->string('country')->nullable();
                $table->string('manager')->nullable();

                $table->string('full_address')->storedAs(
                    "(street,city,zip)"
                );

                $table->timestamps();
            }
        );

        Schema::create(
            'addressables', function (Blueprint $table) {
                $table->foreignId('address_id');
                $table->morphs('addressable');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('addressables');
    }
};
