<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id')->nullable();
            $table->string('payment_option')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_no')->nullable();
            $table->decimal('amount',25,2)->nullable();
            $table->decimal('service_fee',25,2)->nullable();
            $table->decimal('tax',25,2)->nullable();
            $table->decimal('total_amount',25,2)->nullable();
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
        Schema::dropIfExists('transaction_details');
    }
}
