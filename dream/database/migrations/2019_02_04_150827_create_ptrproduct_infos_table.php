<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtrproductInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptrproduct_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ptrshop_id')->unsigned();
            $table->integer('sp_counter_number')->default(0)->unsigned();
            $table->integer('comment')->default(0)->unsigned();
            $table->integer('view')->default(0)->unsigned();
            $table->integer('rating')->default(0)->unsigned();
            $table->integer('rate')->default(0)->unsigned();
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
        Schema::dropIfExists('ptrproduct_infos');
    }
}
