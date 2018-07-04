<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrInserirPadrinhoCriancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tr_inserir_padrinho_crianca', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        // DB::unprepared('
        //     CREATE TRIGGER tr_inserir_padrinho_crianca AFTER DELETE ON `padrinho_criancas` FOR EACH ROW
        //     INSERT INTO historico_padrinho_criancas(`padrinho_id`, `crianca_id`,`created_at`,`updated_at`) VALUES (OLD.padrinho_id, OLD.crianca_id,NOW(),NOW());
        //     ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('tr_inserir_padrinho_crianca');
         // DB::unprepared('DROP TRIGGER `tr_inserir_padrinho_crianca`');
    }
}
