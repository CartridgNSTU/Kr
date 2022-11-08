<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films_tariffs', function (Blueprint $table) {
            $table->biginteger('ID_FILM')->unsigned();
            $table->integer('ID_TARIF')->unsigned();

            $table->foreign('ID_FILM')->references('ID')->on('films');
            $table->foreign('ID_TARIF')->references('ID')->on('tariffs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films_tariffs');
    }
};
