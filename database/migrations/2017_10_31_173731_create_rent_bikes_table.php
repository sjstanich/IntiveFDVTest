<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_bikes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('familyPlan');
            $table->integer('bikeQuantity');
            $table->enum('rentType', array('hour', 'day', 'week'));
            $table->float('amount');
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
        Schema::dropIfExists('rent_bikes');
    }
}
