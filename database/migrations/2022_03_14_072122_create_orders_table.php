<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('total_price');
            $table->integer('discount')->nullable();
            $table->float('sub_total');
            $table->dateTime('order_date');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('generic_statuses');
            $table->text('remarks')->nullable();
            $table->integer('modifiedby')->nullable();
            $table->dateTime('modifieddate')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
