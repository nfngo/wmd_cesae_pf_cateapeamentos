<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabos', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->decimal('perc_mix_cabo');
            $table->decimal('perc_lme_cobre');
            $table->decimal('perc_lme_chumbo');
            $table->decimal('perc_peso_cobre');
            $table->decimal('perc_peso_chumbo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabos');
    }
}
