<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('active')->default(3);
        $table->string('user_type');
        $table->string('user_code')->unique();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('state');
        $table->string('local_government');
        $table->string('address');
        $table->string('landmark')->nullable();
        $table->string('phone_number');
        $table->string('email')->unique();
        $table->string('profile_image')->nullable();
        $table->string('caddress')->nullable();
        $table->string('tin')->nullable();
        $table->string('cac')->nullable();
        $table->string('store_name')->nullable();
        $table->string('store_address')->nullable();
        $table->string('idcard')->nullable();
        $table->string('bank_number')->nullable();
        $table->string('bank_name')->nullable();
        $table->string('bank')->nullable();
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
        Schema::dropIfExists('dealers');
    }
}
