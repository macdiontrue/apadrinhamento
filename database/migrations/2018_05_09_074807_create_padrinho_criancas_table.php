<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadrinhoCriancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padrinho_criancas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('padrinho_id');
            $table->foreign('padrinho_id')->references('id')->on('padrinhos');

            $table->unsignedInteger('crianca_id');
            $table->foreign('crianca_id')->references('id')->on('criancas');
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
        Schema::dropIfExists('padrinho_criancas');
    }
}
