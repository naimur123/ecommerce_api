<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('short_name');
            $table->text('remarks');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('generic_statuses');
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
        Schema::dropIfExists('countries');
    }
}
