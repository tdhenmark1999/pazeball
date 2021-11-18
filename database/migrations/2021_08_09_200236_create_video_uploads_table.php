<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  

// description varchar(255) NULL
// directory varchar(255) NULL
// duration varchar(255) NULL
// filename varchar(255) NULL
// full_path varchar(255) NULL
// is_public varchar(255) NULL
// modified_at datetime NULL
// path varchar(255) NULL
// size bigint(20) NULL
// status varchar(255) NULL
// thumbnail_full_path varchar(255) NULL
// user_id varchar(255) NULL

    
    public function up()
    {
        Schema::create('video_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->text("description")->nullable();
            $table->string("directory")->nullable();
            $table->string("duration")->nullable();
            $table->string("filename")->nullable();
            $table->string("full_path")->nullable();
            $table->string("is_public")->nullable();
            $table->bigInteger('size')->nullable();
            $table->string("status")->nullable();
            $table->string("thumbnail_full_path")->nullable();
            $table->string("user_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_uploads');
    }
}
