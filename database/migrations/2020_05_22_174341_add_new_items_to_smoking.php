<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewItemsToSmoking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('smoking', function (Blueprint $table) {
            $table->integer('vape_pen')->unsigned()->nullable();
            $table->integer('vape_oil')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smoking', function (Blueprint $table) {
            //
        });
    }
}
