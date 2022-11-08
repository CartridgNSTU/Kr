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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('ID')->unsigned();
            $table->string('LOGIN', 500);
            $table->string('PASSWORD', 500);
            $table->string('NAME', 500);
            $table->string('SURNAME', 500);
            $table->float('BALANCE')->nullable()->default('0');
            $table->integer('ID_LEVEL')->unsigned()->nullable()->default('0');
            $table->integer('ID_TARIF')->unsigned()->nullable()->default('0');

            $table->foreign('ID_LEVEL')->references('ID')->on('levels');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
