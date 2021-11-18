<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 'date','status','time_end','time_start','training_id'
     * @return void
     */
    public function up()
    {
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('training_id')->nullable();
            $table->string('date')->nullable();
            $table->string('status')->default('active');
            $table->string('time_start')->nullable();
            $table->string('time_end')->nullable();
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
        Schema::dropIfExists('training_sessions');
    }
}
