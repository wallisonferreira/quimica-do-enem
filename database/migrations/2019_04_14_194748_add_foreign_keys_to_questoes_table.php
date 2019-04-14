<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->foreign('competencia_id')->references('id')->on('competencias');
            $table->foreign('conteudo_id')->references('id')->on('conteudos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->dropForeign(['competencia_id']);
            $table->dropForeign(['conteudo_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
