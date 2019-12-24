<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtrproductRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptrproduct_ratings', function (Blueprint $table) {
            $table->integer('ptrshop_id')->unsigned();
            $table->integer('ptr_sp_counter_number')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->float('rating',3,1)->unsigned();
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
        Schema::dropIfExists('ptrproduct_ratings');
    }
}
