<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jedi_id');
            $table->unsignedBigInteger('film_id');
            $table->string('quote');
            // $table->string('evento_data');
            // $table->string('evento_citta');
            // $table->string('evento_provincia');
            // $table->string('evento_regione');
            // $table->string('evento_nazione');
            $table->dateTime("created_at")->useCurrent();
            $table->dateTime("updated_at")->useCurrent();

            $table->foreign('jedi_id')->references('id')->on('jedi')->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
