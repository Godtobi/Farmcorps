<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->integer('txid');
            $table->string('txref');
            $table->string('flwref');
            $table->string('currency');
            $table->integer('amount');
            $table->string('cycle');
            $table->string('chargedmessage');
            $table->string('authmodel');
            $table->string('ip');
            $table->string('narration');
            $table->string('vbvmessage');
            $table->string('paymenttype');
            $table->integer('paymentid');
            $table->string('fraudstatus');
            $table->string('chargetype');
            $table->string('created');
            $table->integer('customerid');
            $table->string('customerphone');
            $table->string('customername');
            $table->string('customermail');
            $table->string('accountbusinessname');
            $table->integer('accountid');
            $table->integer('amountsettledfortranc');
            $table->string('raveref');
            $table->string('orderref');
            $table->string('expirymon');
            $table->string('expiryyr');
            $table->string('lastdigit');


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
        Schema::dropIfExists('transactions');
    }
}
