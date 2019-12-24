<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id')->unsigned();
            $table->string('shop_slug');
            $table->integer('user_id')->unsigned();
            $table->text('visitcost')->nullable();
            $table->text('maplink')->nullable();
            $table->string('colamon 1')->nullable();
            $table->string('colamon 2')->nullable();
            $table->string('colamon 3')->nullable();
            $table->string('colamon 4')->nullable();
            $table->string('colamon 5')->nullable();
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
        Schema::dropIfExists('shop_addresses');
    }
}
