<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('group_id');
            $table->foreign("group_id")->references('id')->on("groups");
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('bio')->nullable();
            $table->boolean("is_developer")->default(false);
            $table->rememberToken();

            $table->unsignedBigInteger("createdby")->nullable();
            $table->foreign("createdby")->references("id")->on("admins");
            $table->dateTime('Createdate')->nullable();
            $table->unsignedBigInteger("modifiedby")->nullable();
            $table->foreign("modifiedby")->references("id")->on("admins");
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
        Schema::dropIfExists('merchants');
    }
    
}
