<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_type')->nullable();
            $table->decimal('amount',25,2)->nullable();
            $table->string('code')->nullable();
            $table->string('method')->nullable();
            $table->string('reciever_account_number')->nullable();
            $table->string('sender_account_number')->nullable();
            $table->string('reference_code')->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('wallet');
    }
}
