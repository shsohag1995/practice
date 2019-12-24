<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_name');
            $table->string('shop_slug');
            $table->integer('shop_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('ptrproduct_id')->unsigned()->nullable();
            $table->integer('ptrshop_id')->unsigned()->nullable();
            $table->integer('ptr_sp_counter_number')->nullable()->unsigned();
            $table->integer('sp_counter_number')->default(1)->unsigned();
            $table->integer('p_image_counter')->default(1)->unsigned();
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->integer('quantity')->default(1);
            $table->string('unit')->nullable();
            $table->integer('minimum_order')->default(1);
            $table->string('price_bdt')->nullable();
            $table->string('price_cgc')->nullable();
            $table->string('price_usd')->nullable();
            $table->string('seller_profit_rate')->default('0');
            $table->string('profit_rate')->default('5');
            $table->integer('like')->default(0)->unsigned();
            $table->integer('comment')->default(0)->unsigned();
            $table->integer('view')->default(0)->unsigned();
            $table->string('slug');
            $table->string('payment_info')->nullable();
            $table->string('action')->default('show');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('private_products');
    }
}
