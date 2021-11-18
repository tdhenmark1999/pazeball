<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecurringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // "amount",
    // "auth_code",
    // "feed_back",
    // "first_payment_date",
    // "in_active",
    // "ref_no",
    // "signature",
    // "status",
    // "subscription_no",
    // "trans_id",
    // "transaction_no",
    // "user_id",
    public function up()
    {
        Schema::create('recurring', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount',25,2)->nullable();
            $table->string('auth_code')->nullable();
            $table->string('feed_back')->nullable();
            $table->string('first_payment_date')->nullable();
            $table->string('in_active')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('signature')->nullable();
            $table->string('status')->nullable();
            $table->string('subscription_no')->nullable();
            $table->string('trans_id')->nullable();
            $table->string('transaction_no')->nullable();
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
        Schema::dropIfExists('recurring');
    }
}
