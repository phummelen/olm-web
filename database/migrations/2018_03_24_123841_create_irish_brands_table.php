<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrishBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('irish_brands', function (Blueprint $table) {
        //     // $table->increments('id');
        //     // $table->integer('photo_id')->unsigned()->nullable();
        //     // $table->foreign('photo_id')->references('id')->on('brands');
        //     // $table->integer('topaz')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->integer('applegreen')->unsigned()->nullable();
        //     // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('irish_brands');
    }
}
