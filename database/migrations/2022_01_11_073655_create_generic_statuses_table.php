<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generic_statuses', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('short_name');
            $table->integer('Createby')->nullable();
            $table->dateTime('Createdate')->nullable();
            $table->integer('Modifiedby')->nullable();
            $table->dateTime('Modifieddate')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generic_statuses');
    }
}
