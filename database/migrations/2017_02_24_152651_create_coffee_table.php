<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coffeeCups')->unsigned()->nullable();
            $table->integer('coffeeLids')->unsigned()->nullable();
            $table->integer('coffeeOther')->unsigned()->nullable();
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
