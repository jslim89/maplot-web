<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospect', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password', 60)->nullable(); // customer may not have password in the first phase
            $table->string('name', 128);
            $table->string('address', 128)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('postcode', 20)->nullable();
            $table->integer('state_id')->unsigned()->default(0);
            $table->integer('country_id')->unsigned()->default(0);
            $table->double('lat', 15, 13)->default(0);
            $table->double('lng', 15, 12)->default(0);
            $table->string('mobile', 20);
            $table->integer('user_id')->unsigned()->default(0); // the owner of the prospect
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('updated_by')->unsigned()->default(0);
            $table->integer('deleted_by')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prospect');
    }
}
