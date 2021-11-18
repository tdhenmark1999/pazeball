<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('curriculum_vitae_full_path')->nullable();
            $table->string('directory')->nullable();
            $table->string('first_back_id_full_path')->nullable();
            $table->string('first_front_id_full_path')->nullable();
            $table->string('first_id_number')->nullable();
            $table->string('first_id_type')->nullable();
            $table->string('path')->nullable();
            $table->string('second_back_id_full_path')->nullable();
            $table->string('second_front_id_full_path')->nullable();
            $table->string('second_id_number')->nullable();
            $table->string('second_id_type')->nullable();
            $table->string('status')->default("active");
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('identities');
    }
}
