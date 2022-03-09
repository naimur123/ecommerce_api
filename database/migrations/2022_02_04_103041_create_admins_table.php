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
            $table->unsignedBigInteger('group_id')->index();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->binary('image')->nullable();
            $table->text('bio')->nullable();
            $table->rememberToken();

            $table->integer('created_by')->nullable();
            $table->dateTime('createdate')->nullable();
            $table->integer('updated_by')->nullable();
            $table->dateTime('modifieddate')->nullable();
            $table->softDeletes();
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
