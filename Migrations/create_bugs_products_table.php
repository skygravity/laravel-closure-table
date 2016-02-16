<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugsproducts', function (Blueprint $table) {
            $table->integer('bug_id')->unsigned();
            $table->foreign('bug_id')->references('id')->on('bugs');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->primary(['bug_id', 'product_id']);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bugsproducts');
    }
}
