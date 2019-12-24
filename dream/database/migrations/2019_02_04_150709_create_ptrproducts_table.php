<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtrproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptrproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ptrshop_name');
            $table->string('ptrshop_slug');
            $table->bigInteger('ptrshop_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('ptr_sp_counter_number')->default(0)->unsigned();
            $table->string('title');
            $table->string('group');
            $table->string('category');
            $table->string('type');
            $table->string('brand');
            $table->integer('quantity')->default(1);
            $table->string('unit')->nullable();
            $table->integer('minimum_order')->default(1);
            $table->string('price_bdt')->nullable();
            $table->string('price_cgc')->nullable();
            $table->string('price_usd')->nullable();
            $table->string('profit_rate')->default('5');
            $table->integer('like')->default(0)->unsigned();
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
        Schema::dropIfExists('ptrproducts');
    }
}
