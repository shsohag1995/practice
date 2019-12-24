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
            $table->integer('order_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->integer('shop_id')->nullable();
            $table->integer('sp_counter_number');
            $table->string('aduls')->nullable();
            $table->string('childreen')->nullable();
            $table->string('infants')->nullable();
            $table->date('arival_date');
            $table->timeTz('arival_time')->nullable();
            $table->date('exit_date');
            $table->timeTz('exit_time')->nullable();
            $table->text('message');
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
