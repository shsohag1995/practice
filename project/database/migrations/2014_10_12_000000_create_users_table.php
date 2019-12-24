<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('balance_bdt')->default('0.00');
            $table->string('balance_cgc')->default('0.000');
            $table->string('balance_usd')->default('0.000');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name')->unique()->nullable();
            $table->string('logintype')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('type')->default('Unverified');
            $table->integer('user_role_id')->default(2);
            $table->string('user_type')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
