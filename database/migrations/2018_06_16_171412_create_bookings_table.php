<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Adderess',50);
            $table->String('Phone_Number');
            $table->String('seat_number');
            $table->Integer('no_of_seat');
            $table->Integer('total_price');
            $table->boolean('status')->default(0);
            $table->text('email',55);
           $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->ondelete('cascade')->onupdate('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
