<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoostPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boost_package', function (Blueprint $table) {
            $table->id();
            $table->string('packageName')->default('1');
            $table->double('pricing')->default('1');
            $table->integer('packageStar')->default('1');
            $table->string('packageId')->default('1');
            $table->integer('os')->default('1');
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
        Schema::dropIfExists('boost_package');
    }
}
