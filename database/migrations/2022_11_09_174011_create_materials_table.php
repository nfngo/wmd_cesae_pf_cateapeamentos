<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('bainha');
            $table->string('diametro');
            $table->integer('pares');
            $table->double('cobre');
            $table->double('chumbo');
            $table->double('aco');
            $table->double('plastico');
            $table->double('gel');
            $table->double('peso_kg_m');
            $table->string('comentarios');
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
        Schema::dropIfExists('materials');
    }
}
