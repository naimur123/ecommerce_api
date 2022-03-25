<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('read_time')->nullable();
            $table->string('image')->nullable();
            $table->string('meta_tag')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean("publication_status")->default(false);
            $table->unsignedBigInteger('createdby')->nullable();
            $table->dateTime('createdate')->nullable();
            $table->unsignedBigInteger('updatedby')->nullable();
            $table->dateTime('modifieddate')->nullable();
           
            $table->foreign("createdby")->references("id")->on("admins");
            $table->foreign("updatedby")->references("id")->on("admins");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
