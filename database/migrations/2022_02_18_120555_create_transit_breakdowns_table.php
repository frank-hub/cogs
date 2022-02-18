<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transit_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->string('fuel_cost');
            $table->string('border_cost');
            $table->string('exchange_rate');
            $table->string('destination');
            $table->string('pickup_location');
            $table->string('date') ;           
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
        Schema::dropIfExists('transit_breakdowns');
    }
}
