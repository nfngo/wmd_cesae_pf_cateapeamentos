<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('apea_id');
            $table->foreign('apea_id')->references('id')->on('apeas');
            $table->decimal('bald_proj_real');
            $table->decimal('bald_m_o_real');
            $table->decimal('bald_materiais_real');
            $table->decimal('apea_proj_real');
            $table->decimal('custo_total_real');
            $table->decimal('bald_proj_real_final');
            $table->decimal('bald_m_o_real_final');
            $table->decimal('bald_materiais_real_final');
            $table->decimal('apea_proj_real_final');
            $table->decimal('custo_total_real_final');
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
        Schema::dropIfExists('custos');
    }
}
