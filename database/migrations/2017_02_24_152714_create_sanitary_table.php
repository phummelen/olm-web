<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanitaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanitary', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condoms')->unsigned()->nullable();
            $table->integer('nappies')->unsigned()->nullable();
            $table->integer('menstral')->unsigned()->nullable();
            $table->integer('deodorant')->unsigned()->nullable();
            $table->integer('sanitaryOther')->unsigned()->nullable();
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
        //
    }
}
