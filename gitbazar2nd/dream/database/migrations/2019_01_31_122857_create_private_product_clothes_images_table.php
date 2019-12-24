<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateProductClothesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_product_clothes_images', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('shop_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('sp_counter_number')->unsigned();
            $table->string('image');
            $table->integer('s')->default(0)->unsigned();
            $table->integer('m')->default(0)->unsigned();
            $table->integer('x')->default(0)->unsigned();
            $table->integer('xl')->default(0)->unsigned();
            $table->integer('2xl')->default(0)->unsigned();
            $table->integer('3xl')->default(0)->unsigned();
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
        Schema::dropIfExists('product_clothes_images');
    }
}
