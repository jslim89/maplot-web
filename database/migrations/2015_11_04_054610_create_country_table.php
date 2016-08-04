<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('iso_code_2', 2)->nullable();
            $table->string('iso_code_3', 3)->nullable();
            $table->tinyInteger('postcode_required')->default(0);
            $table->double('bounds_northeast_lat', 15, 12)->default(0);
            $table->double('bounds_northeast_lng', 15, 12)->default(0);
            $table->double('bounds_southwest_lat', 15, 12)->default(0);
            $table->double('bounds_southwest_lng', 15, 12)->default(0);
            $table->double('lat', 15, 12)->default(0);
            $table->double('lng', 15, 12)->default(0);
            $table->double('viewport_northeast_lat', 15, 12)->default(0);
            $table->double('viewport_northeast_lng', 15, 12)->default(0);
            $table->double('viewport_southwest_lat', 15, 12)->default(0);
            $table->double('viewport_southwest_lng', 15, 12)->default(0);
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('country');
    }
}
