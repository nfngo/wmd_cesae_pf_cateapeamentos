<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apeas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('ref_externa_id');
            $table->char('estado_nemesis_apea_id', 2);
            $table->date('data_estado_global_apea')->nullable();
            $table->date('data_envio_proj_sp_apea')->nullable();
            $table->date('data_real_p_apea')->nullable();
            $table->date('data_plan_p_apea')->nullable();
            $table->date('data_real_c_apea')->nullable();
            $table->date('data_plan_c_apea')->nullable();
            $table->date('data_real_cadastro_apea')->nullable();
            $table->date('data_plan_cadastro_apea')->nullable();
            $table->string('tipo_cabos')->nullable();
            $table->string('peso_cabos')->nullable();
            $table->boolean('faturado')->default(false);

            $table->foreign('ref_externa_id')->references('id')->on('ref_externas');
            $table->foreign('estado_nemesis_apea_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apeas');
    }
}
