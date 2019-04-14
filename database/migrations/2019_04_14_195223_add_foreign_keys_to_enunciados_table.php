<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEnunciadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enunciados', function (Blueprint $table) {
            $table->foreign('questao_id')->references('id')->on('questoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enunciados', function (Blueprint $table) {
            $table->dropForeign(['questao_id']);
        });
    }
}
