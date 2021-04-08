<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->date('date','dd mm yy');
            $table->timestamp('time');
            $table->integer('numb_of_adult');
            $table->integer('numb_of_child');
            $table->string('name');
            $table->string('phone_numb');
            $table->string('special_request',100);
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
        Schema::dropIfExists('booking_a_tables');
    }
}
