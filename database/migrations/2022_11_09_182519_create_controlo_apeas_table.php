<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControloApeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlo_apeas', function (Blueprint $table) {
            $table->id();
            $table->string('apea_id');
            $table->foreign('apea_id')->references('id')->on('apeas');
            $table->foreignId('material_id')->constrained();
            $table->string('cod_centro_lucro');
            $table->string('desc_centro_lucro');
            $table->integer('geca_servico')->nullable();
            $table->integer('geca_requisicao')->nullable();
            $table->integer('cco');
            $table->dateTime('data');
            $table->string('material_descricao');
            $table->double('comprimento_proj');
            $table->string('tipo_consumo_proj')->nullable();
            $table->double('comprimento_real');
            $table->string('tipo_consumo_real');
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
        Schema::dropIfExists('controlo_apeas');
    }
}
