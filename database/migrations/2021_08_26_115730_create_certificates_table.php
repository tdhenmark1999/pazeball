<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('certificate');
        Schema::create('certificate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('directory')->nullable();
            $table->string('filename')->nullable();
            $table->string('full_path')->nullable();
            $table->integer('is_show')->default(0);
            $table->string('month')->nullable();
            $table->string('path')->nullable();
            $table->string('thumb_path')->nullable();
            $table->string('title')->nullable();
            $table->string('user_id')->nullable();
            $table->string('year')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('certificate');
    }
}
