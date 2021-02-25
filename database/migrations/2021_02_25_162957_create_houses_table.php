<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('house_num',255);
            $table->string('pincode',255);

            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('street_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('street_id')->references('id')->on('streets');
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
        Schema::dropIfExists('houses');
    }
}
