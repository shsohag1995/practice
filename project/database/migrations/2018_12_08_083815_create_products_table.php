<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->increments('id');
            $table->string('user_name');
            $table->integer('user_id')->unsigned();
            $table->string('shop_name');
            $table->string('shop_slug');
            $table->integer('shop_id')->unsigned();
            $table->integer('sp_counter_number')->default(0)->unsigned();
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
            $table->string('profit_rate')->default('5');
            $table->string('condition');
            $table->integer('like')->default(0)->unsigned();
            $table->integer('comment')->default(0)->unsigned();
            $table->integer('view')->default(0)->unsigned();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('using_info')->nullable();
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
        Schema::dropIfExists('products');
    }
}
