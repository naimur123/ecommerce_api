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
            $table->id('id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('subcat_id');
            $table->foreign('subcat_id')->references('id')->on('sub_categories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_quantity');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->float('price');
            $table->float('discount_price')->nullable();
            $table->float('discount_percentage')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->binary('image_one')->nullable();
            $table->binary('image_two')->nullable();
            $table->binary('image_three')->nullable();
            $table->integer('createby');
            $table->dateTime('createdate');
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
        Schema::dropIfExists('products');
    }
}
