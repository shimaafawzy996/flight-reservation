<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('flights')){
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('flight_id');
            $table->string('source');
            $table->string('destination');
            $table->string('departure_date');
            $table->string('return_date');
            $table->string('flight_type');
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
        Schema::dropIfExists('flights');
    }
}
