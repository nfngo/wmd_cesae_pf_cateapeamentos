<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acls', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('designacao');
            $table->tinyInteger('id_gr');
            $table->string('designacao_gr');
            $table->string('id_cco');
            $table->string('cco');
            $table->string('sp_fft');
            $table->string('ifr');
            $table->string('ifr_xy');
            $table->string('ian_ias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acls');
    }
}
