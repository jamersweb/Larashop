<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('user_id');
//            $table->unsignedInteger('o_id');
            $table->unsignedInteger('p_id');
            $table->unsignedInteger('co_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('o_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('p_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('co_id')->references('id')->on('couriers')->onDelete('cascade');

            $table->integer('quantity');
            $table->boolean('delivery_status');

//            $table->primary(['user_id','p_id','co_id']);

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
        Schema::dropIfExists('orders');
    }
}
