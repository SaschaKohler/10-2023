<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //        LIEFERANT    MATNR    KZ    SUCH    KURZTEXT    ME    EUMATLPR    EUMATEK    EUMATVK1    EUMATVK2    EUMATVK3    ZEIT    LOHNART    EULOHNSEK    EULOHNS1    EULOHNS2    EULOHNS3    ALTLIEF1    ALTLIEF2    ALTMATNR1    ALTMATNR2    CUKENNZ    CUGEWICHT    VERPEINH    MEJEVERP    PREISEINH    RABGR    HWG    WG    EANNR    ERLOESKTO    INLAGER    EUMATVK4    EULOHNS4    KALKMODE    FPREIS    SPREIS    GEAENDERT    USER    ZUSRABATT    PJVPEINH    KATALOG    USTSCHL    BESTELL    BESTELLNR    USESNR    PROABRECH    ISSKONTOF    ISUMSATZF    PEINHEIT    ARTGRUPPE    EBAY    KSTELLE    EUMATVK5    EUMATVK6    EUMATVK7    EUMATVK8    EUMATVK9    EUMATVK10    EULOHNS5    EULOHNS6    EULOHNS7    EULOHNS8    EULOHNS9    EULOHNS10    FARTIKEL    SPREISVON    SPREISBIS    ARTKAT    KRABATTGR    CANLAGER    CANRABATT    ZUSATZ_1    PEMENGE    LAGERBESTAND    LOESCHDATE    TREEKEY

        Schema::create(
            'articles', function (Blueprint $table) {
                $table->id();
                $table->string('uuid')->nullable();
                $table->string('matnr')->nullable();
                $table->string('search')->nullable();
                $table->string('short_text')->nullable();
                $table->string('unit');
                $table->decimal('lpr', 10, 2)->nullable();
                $table->decimal('ek', 10, 2)->nullable();
                $table->decimal('vk1', 10, 2)->nullable();
                $table->decimal('vk1_perc', 10, 2)->nullable();
                $table->decimal('vk2', 10, 2)->nullable();
                $table->decimal('vk2_perc', 10, 2)->nullable();
                $table->decimal('vk3', 10, 2)->nullable();
                $table->decimal('vk3_perc', 10, 2)->nullable();
                $table->index('search');
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
        Schema::dropIfExists('articles');
    }
};
