<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao_alternativa')->nullable();
            $table->text('path_alternativa')->nullable();
            $table->boolean('imagem')->default(0);
            $table->boolean('correta')->default(0);
            $table->integer('questao_id')->unsigned();
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
        Schema::dropIfExists('alternativas');
    }
}
