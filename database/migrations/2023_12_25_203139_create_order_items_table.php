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
            'order_items', function (Blueprint $table) {
                $table->id();
                $table->foreignId('order_id')->nullable()->constrained()->cascadeOnDelete();
                $table->foreignId('article_id')->nullable()->constrained()->cascadeOnDelete();
                $table->integer('qty');
                $table->decimal('unit_price', 10, 2);
                $table->decimal('sub_total', 10, 2);
                $table->decimal('discount', 10, 2)->nullable();
                $table->unsignedInteger('sort')->default(0);
                $table->string('unit')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};

