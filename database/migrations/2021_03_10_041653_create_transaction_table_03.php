<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('stars')->defalt(0)->before('created_at');
            $table->string('purchaseToken')->defalt('')->before('created_at');
            $table->string('purchaseState')->defalt('')->before('created_at');
            $table->timestamp('purchaseTime')->useCurrent()->before('created_at');
            $table->string('packageName')->defalt('')->before('created_at');
            $table->string('orderId')->defalt(0)->before('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
}
