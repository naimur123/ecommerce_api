<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id('subcat_id');
            $table->string('subcategory_name');
            $table->text('subcategory_details');
            $table->text('remarks');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
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
        Schema::dropIfExists('sub_categories');
    }
}
