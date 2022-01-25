<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->unsignedBigInteger('subcat_id');
            $table->foreign('subcat_id')->references('subcat_id')->on('sub_categories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('brand_id')->on('brands');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_quantity');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('units');
            $table->text('short_description');
            $table->text('long_description');
            $table->float('price');
            $table->float('discount_price');
            $table->float('discount_percentage');
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('currency_id')->on('currencies');
            $table->binary('image_one');
            $table->binary('image_two');
            $table->binary('image_three');
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
        Schema::dropIfExists('products');
    }
}
