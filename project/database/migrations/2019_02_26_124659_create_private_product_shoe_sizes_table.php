<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateProductShoeSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_product_shoe_sizes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->integer('sp_counter_number')->unsigned();
            $table->string('size');
            $table->string('unit');
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
        Schema::dropIfExists('private_product_shoe_sizes');
    }
}
