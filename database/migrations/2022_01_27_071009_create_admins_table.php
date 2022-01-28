<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('group_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->binary('image')->nullable();
            $table->text('bio')->nullable();
            $table->rememberToken();

            $table->integer('created_by')->nullable();
            $table->dateTime('Createdate');
            $table->integer('updated_by')->nullable();
            $table->dateTime('Modifieddate');
            $table->softDeletes();

            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
