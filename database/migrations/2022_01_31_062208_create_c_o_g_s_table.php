<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 'buying_price','car_no','kgs','comodity','border_cost','selling_price','kgs_sold_delivered','other_cost',
        // 'seller_name','seller_balance','buyer_payment_status'
        Schema::create('c_o_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('buying_price');
            $table->string('car_no');
            $table->integer('kgs');
            $table->string('comodity');
            $table->integer('border_cost');
            $table->float('selling_price');
            $table->string('kgs_sold_delivered');
            $table->string('other_cost')->nullable();
            $table->string('seller_name')->nullable();
            $table->string('seller_balance')->nullable();
            $table->string('buyer_payment_status')->nullable();
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
        Schema::dropIfExists('c_o_g_s');
    }
}
