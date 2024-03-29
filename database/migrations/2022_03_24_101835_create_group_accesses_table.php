<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('group_accesses', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('group_id');
        $table->foreign('group_id')->references('id')->on('groups');
        $table->longText('group_access');
        $table->dateTime('createdate')->nullable();
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
        Schema::dropIfExists('group_accesses');
    }
}
