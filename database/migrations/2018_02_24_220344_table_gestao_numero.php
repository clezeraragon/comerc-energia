<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGestaoNumero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestao_numero', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('option_gestao_id')->unsigned();
            $table->decimal('valor',10,3);
            $table->foreign('option_gestao_id')->references('id')->on('option_gestao_numero');
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
        Schema::dropIfExists('gestao_numero');
    }
}
