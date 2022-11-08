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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('ID')->unsigned();
            $table->integer('ID_USER')->unsigned()->default('0');
            $table->integer('ID_TARIFF')->unsigned()->default('0');

            $table->foreign('ID_USER')->references('ID')->on('users');
            $table->foreign('ID_TARIFF')->references('ID')->on('tariffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
