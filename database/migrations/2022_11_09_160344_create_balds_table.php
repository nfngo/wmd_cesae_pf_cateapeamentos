<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balds', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('ref_externa_id');
            $table->char('estado_nemesis_bald_id', 2);
            $table->date('data_estado_global_bald')->nullable();
            $table->date('data_envio_proj_sp_bald')->nullable();
            $table->date('data_real_p_bald')->nullable();
            $table->date('data_plan_p_bald')->nullable();
            $table->date('data_real_c_bald')->nullable();
            $table->date('data_plan_c_bald')->nullable();
            $table->date('data_real_cadastro_bald')->nullable();
            $table->date('data_plan_cadastro_bald')->nullable();

            $table->foreign('ref_externa_id')->references('id')->on('ref_externas');
            $table->foreign('estado_nemesis_bald_id')->references('id')->on('estados');
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
        Schema::dropIfExists('balds');
    }
}
