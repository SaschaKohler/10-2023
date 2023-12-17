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
            'vehicles', function (Blueprint $table) {
                $table->id();
                $table->string('owner')->default('Dirneder GmbH')->nullable();
                $table->integer('type');
                $table->string('branding')->nullable();
                $table->text('image')->nullable();
                $table->date('permit')->nullable();
                $table->text('license_plate')->nullable();
                $table->integer('insurance_type')->default(1);
                $table->date('inspection')->nullable();
                $table->string('insurance_company')->nullable();
                $table->string('insurance_manager')->nullable();
                $table->softDeletes();

                $table->timestamps();
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
        Schema::dropIfExists('vehicles');
    }
};
