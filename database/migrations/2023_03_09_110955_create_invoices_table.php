<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->string('user_id');
            $table->string('buyer_name');
            $table->string('user_code');
            $table->decimal('total_price',8,2)->default(0);
            $table->decimal('added_price',8,2)->default(0);
            $table->string('issue_date');
            $table->string('due_date');
            $table->unsignedBigInteger('active')->default(2);
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
        Schema::dropIfExists('invoices');
    }
}
