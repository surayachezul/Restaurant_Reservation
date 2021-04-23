<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSunwayPyramidLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunway_pyramid_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->date('date');
            $table->string('time');
            $table->integer('adult_no');
            $table->integer('child_no');
            $table->string('name');
            $table->string('phone_no');
            $table->string('special_request')->nullable();
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
        Schema::dropIfExists('sunway_pyramid_bookings');
    }
}
