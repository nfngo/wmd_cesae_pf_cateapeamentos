<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lmes', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->decimal('usd_ton_cobre')->nullable();
            $table->decimal('usd_ton_chumbo')->nullable();
            $table->decimal('rate_usd_euro')->nullable();
            $table->decimal('preco_venda_plastico')->nullable();
            $table->decimal('preco_metal_kg_cabo_plastico')->nullable();
            $table->decimal('lme_cobre_kg_plastico')->nullable();
            $table->decimal('lme_chumbo_kg_plastico')->nullable();
            $table->decimal('preco_venda_chumbo')->nullable();
            $table->decimal('preco_metal_kg_cabo_chumbo')->nullable();
            $table->decimal('lme_cobre_kg_chumbo')->nullable();
            $table->decimal('lme_chumbo_kg_chumbo')->nullable();
            $table->decimal('custo_mix')->nullable();
            $table->decimal('custo_venda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lme');
    }
}
