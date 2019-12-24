<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('user_id')->unsigned();
            $table->text('details')->nullable();
            $table->string('front_image')->nullable();
            $table->string('right_image')->nullable();
            $table->string('center_image')->nullable();
            $table->string('left-image')->nullable();
            $table->string('collamon 1')->nullable();
            $table->string('collamon 2')->nullable();
            $table->string('collamon 3')->nullable();
            $table->string('collamon 4')->nullable();
            $table->string('collamon 5')->nullable();
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
        Schema::dropIfExists('shop_types');
    }
}
