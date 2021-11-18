<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("uuid")->nullable();
            $table->string("address")->nullable();
            $table->decimal("amount",25,2)->nullable();
            $table->string("capacity")->nullable();
            $table->string("category")->nullable();
            $table->string("city")->nullable();
            $table->text("description")->nullable();
            $table->string("directory")->nullable();
            $table->string("file_name")->nullable();
            $table->string("full_path")->nullable();
            $table->string("introduction")->nullable();
            $table->string("path")->nullable();
            $table->string("session")->nullable();
            $table->string("status")->nullable();
            $table->string("thumb_path")->nullable();
            $table->string("title")->nullable();
            $table->string("type")->nullable();
            $table->string("user_id")->nullable();
            $table->string("zip_code")->nullable();
            $table->string("url_training")->nullable();
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
        Schema::dropIfExists('training');
    }
}
