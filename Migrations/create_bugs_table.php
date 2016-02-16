<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('bug_reported');
            $table->string('summary', 80);
            $table->string('description', 1000);
            $table->string('resolution', 1000);
            $table->integer('reported_by')->unsigned();
            $table->foreign('reported_by')->references('id')->on('users');
            $table->integer('asigned_to')->unsigned();
            $table->foreign('asigned_to')->references('id')->on('users');
            $table->integer('verified_by')->unsigned();
            $table->foreign('verified_by')->references('id')->on('users');
            $table->string('status', 20)->default('new');
            $table->foreign('status')->references('status')->on('bugstatus');
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
        Schema::drop('bugs');
    }
}
