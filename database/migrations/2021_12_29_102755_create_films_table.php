<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('anno');
            // $table->string('stadio_indirizzo');
            // $table->unsignedBigInteger('squadra_casa_id');
            // $table->string('stadio_squadra');
            $table->dateTime("created_at")->useCurrent();
            $table->dateTime("updated_at")->useCurrent();

            //  $table->foreign('squadra_casa_id')->references('id')->on('stadi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
