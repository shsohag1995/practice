<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtrshopConnectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptrshop_connects', function (Blueprint $table) {
            $table->integer('ptrshop_id')->unsigned();
            $table->string('ptrshop_name');
            $table->integer('shop_id')->unsigned();
            $table->string('shop_slug');
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
        Schema::dropIfExists('ptrshop_connects');
    }
}
