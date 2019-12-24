<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->integer('user_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->string('country');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('market');
            $table->string('name')->unique();
            $table->string('mode')->default('Basic');
            $table->string('slug')->nullable();
            $table->string('shop_type');
            $table->string('type')->default('Private');
            $table->integer('sp_counter')->default(1);
            $table->float('star', 5, 2)->default(0);
            $table->float('rating')->default(1);
            $table->integer('like')->unsigned()->default(0);
            $table->integer('unlike')->unsigned()->default(0);
            $table->integer('comment')->unsigned()->default(0);
            $table->integer('connected')->unsigned()->default(0);
            $table->integer('view')->unsigned()->default(0);
            $table->float('profit_rate', 4, 2)->default(5.00);
            $table->string('currency')->nullable();
            $table->double('balance_bdt', 18, 2)->default(0);
            $table->double('balance_cgc', 18, 3)->default(0);
            $table->double('balance_usd', 18, 3)->default(0);
            $table->double('storage',18,2)->default(2175345);
            $table->double('storage_limit',18,2)->default(128974848);
            $table->string('string')->nullable();
            $table->string('front_image')->nullable();
            $table->string('right_image')->nullable();
            $table->string('center_image')->nullable();
            $table->string('left_image')->nullable();
            $table->string('security_q1')->nullable();
            $table->integer('security_q2')->nullable();
            $table->integer('security_q3')->nullable();
            $table->integer('safety_number')->nullable();
            $table->integer('agent')->nullable();
            $table->string('action')->default('Show');
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
        Schema::dropIfExists('shops');
    }
}
