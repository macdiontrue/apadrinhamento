<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padrinhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo', 1);
            $table->string('idade', 2);
            $table->string('profissao', 45);
            $table->string('telefone', 45);
            $table->string('email', 45);

            $table->unsignedInteger('tipo_ajuda_id'); 
            $table->foreign('tipo_ajuda_id')->references('id')->on('tipo_ajudas');
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
        Schema::dropIfExists('padrinhos');
    }
}
