<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('customer_bookings')){
        Schema::create('customer_bookings', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('passport_number');
            $table->string('address');
            $table->string('birth_date');
            $table->string('flight_type');
            $table->string('source');
            $table->string('destination');
            $table->string('departure_date');
            $table->string('return_date');
           
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_bookings');
    }
}
