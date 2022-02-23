<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExitProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id'); 
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('amount_products');
            $table->integer('value');
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
        Schema::dropIfExists('exit_products');
    }
}
