<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table){
            $table->string('image');
            $table->integer('order_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_name');
            $table->string('shop_slug');
            $table->integer('shop_id');
            $table->integer('sp_counter_number');
            $table->integer('ptrshop_id')->nullable();
            $table->integer('ptr_sp_counter_number')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_slug');
            $table->string('price');
            $table->integer('quantity');
            $table->string('unit')->nullable();
            $table->string('info')->nullable();
            $table->string('action');
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
        Schema::dropIfExists('wishlists');
    }
}
