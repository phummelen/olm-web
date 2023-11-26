<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalsToCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->integer('total_images')->unsigned()->nullable();
            $table->integer('total_smoking')->unsigned()->nullable();
            $table->integer('total_cigaretteButts')->unsigned()->nullable();
            $table->integer('total_food')->unsigned()->nullable();
            $table->integer('total_softDrinks')->unsigned()->nullable();
            $table->integer('total_plasticBottles')->unsigned()->nullable();
            $table->integer('total_alcohol')->unsigned()->nullable();
            $table->integer('total_coffee')->unsigned()->nullable();
            $table->integer('total_drugs')->unsigned()->nullable();
            $table->integer('total_needles')->unsigned()->nullable();
            $table->integer('total_sanitary')->unsigned()->nullable();
            $table->integer('total_other')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            //
        });
    }
}
