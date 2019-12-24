<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->double('balance_bdt', 18, 2)->default(0);
            $table->double('balance_cgc', 18, 3)->default(0);
            $table->double('balance_usd', 18, 3)->default(0);
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('road')->nullable();
            $table->timestamp('birth_day')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('verifing_id_image')->nullable();
            $table->string('verifing_address_image')->nullable();
            $table->string('colamon 1')->nullable();
            $table->string('colamon 2')->nullable();
            $table->string('colamon 3')->nullable();
            $table->string('colamon 4')->nullable();
            $table->string('colamon 5')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
