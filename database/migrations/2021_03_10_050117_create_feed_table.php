<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->string('uniqueId');
            $table->string('following');
            $table->string('heart');
            $table->string('fans');
            $table->string('covers');
            $table->string('boostStars');
            $table->timestamp('boost_date')->nullable();
            $table->timestamp('bought_date')->nullable();
            $table->timestamp('boost_completion')->nullable();
            $table->boolean('isNew')->default(1);
            $table->string('tokens')->default('');
            $table->boolean('upsert')->deault(0);
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
        Schema::dropIfExists('feeds');
    }
}
