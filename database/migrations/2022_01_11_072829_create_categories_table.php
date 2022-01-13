<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name');
            $table->text('category_details');
            $table->text('remarks');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('status_id')->on('generic_statuses');
            $table->integer('Createby');
            $table->dateTime('Createdate');
            $table->integer('Modifiedby');
            $table->dateTime('Modifieddate');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
