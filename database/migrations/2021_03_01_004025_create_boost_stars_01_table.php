<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoostStars01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boost_stars', function (Blueprint $table) {
            $table->integer('boost_used')->after('numberOfFollower');
            $table->integer('stars')->change();
            $table->integer('numberOfFollower')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boost_stars', function (Blueprint $table) {
            //
        });
    }
}
