<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('licence_plate',255);
            $table->string('brand',255);
            $table->string('color',255);

            $table->unsignedBigInteger('house_id');
            $table->unsignedBigInteger('people_id');
            $table->foreign('house_id')->references('id')->on('houses');
            $table->foreign('people_id')->references('id')->on('peoples');
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
        Schema::dropIfExists('cars');
    }
}
