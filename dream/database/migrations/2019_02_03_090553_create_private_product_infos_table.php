<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateProductInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_product_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id')->unsigned();
            $table->integer('sp_counter_number')->default(0)->unsigned();
            $table->integer('comment')->default(0)->unsigned();
            $table->integer('view')->default(0)->unsigned();
            $table->integer('rating')->default(0)->unsigned();
            $table->float('rate', 4 ,2)->default(0)->unsigned();
            $table->text('description')->nullable();
            $table->text('details_link')->nullable();
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
        Schema::dropIfExists('private_product_infos');
    }
}
