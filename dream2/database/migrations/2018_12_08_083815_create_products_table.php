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
           $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('shop_name');
            $table->string('shop_slug');
            $table->bigInteger('shop_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('mode');
            $table->integer('ptrproduct_id')->unsigned()->nullable();
            $table->integer('ptrshop_id')->unsigned()->nullable();
            $table->integer('ptr_sp_counter_number')->nullable()->unsigned();
            $table->integer('sp_counter_number')->default(0)->unsigned();
            $table->string('title');
            $table->string('category');
            $table->string('type');
            $table->string('brand');
            $table->integer('quantity')->default(1);
            $table->integer('minimum_order')->default(1);
            $table->float('import_price', 8, 2)->nullable();
            $table->float('export_price', 8, 2)->nullable();
            $table->float('offer_price', 8, 2)->nullable();
            $table->float('addition_price', 8, 2)->nullable();
            $table->string('condition');
            $table->integer('like')->default(0)->unsigned();
            $table->integer('comment')->default(0)->unsigned();
            $table->integer('view')->unsigned();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('details_link')->nullable();
            $table->text('using_info')->nullable();
            $table->string('payment_info')->nullable();
            $table->string('action')->default('Hide');
            $table->string('image')->nullable();
            $table->string('collamon 1')->nullable();
            $table->string('colamon 5')->nullable();
            $table->string('colamon 6')->nullable();
            $table->string('colamon 7')->nullable();
            $table->string('colamon 8')->nullable();
            $table->integer('colamon 9')->nullable();
            $table->integer('colamon 10')->nullable();
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
