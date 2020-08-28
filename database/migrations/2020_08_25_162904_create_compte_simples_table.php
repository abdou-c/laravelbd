<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompteSimplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_simples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('solde');
            $table->integer('fraisOuverture');
            $table->string('dateOuverture');
            $table->integer('remuneration');
            $table->integer('idClient')->unsigned();
            $table->foreign('idClient')->references('id')->on('client_simples');
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
        Schema::dropIfExists('compte_simples');
    }
}
