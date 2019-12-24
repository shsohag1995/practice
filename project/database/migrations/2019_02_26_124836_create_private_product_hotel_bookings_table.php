<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateProductHotelBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_product_hotel_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('user_id');
            $table->integer('shop_id');
            $table->string('customer_name')->nullable();
            $table->dateTimeTz('enter_at')->nullable();
            $table->dateTimeTz('exit_at')->nullable();
            $table->text('address')->nullable();
            $table->string('price')->nullable();
            $table->string('info')->nullable();
            $table->string('action')->nullable();
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
        Schema::dropIfExists('private_product_hotel_bookings');
    }
}
