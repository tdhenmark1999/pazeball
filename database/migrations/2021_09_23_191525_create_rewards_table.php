<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('title')->nullable();
            $table->decimal("amount",25,2)->nullable();
            $table->string("status")->nullable();
            $table->string("type")->nullable();
            $table->text('description')->nullable();
            $table->string("directory")->nullable();
            $table->string("file_name")->nullable();
            $table->string("full_path")->nullable();
            $table->string("quantity")->nullable();
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
        Schema::dropIfExists('rewards');
    }
}
