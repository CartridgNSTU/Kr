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
        Schema::create('films', function (Blueprint $table) {
            $table->increments('ID')->unsigned();
            $table->string('TITLE', 1000);
            $table->text('DESCRIPTION');
            $table->integer('DIRECTOR')->unsigned()->default('0');
            $table->date('CREATED');
            $table->string('POSTER', 1000);

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
};
