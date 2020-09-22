<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments( 'id');
            $table->integer('user_Id')->nullable()->unsigned();
            $table->string('name', 75)->nullable();
            $table->string('description', 100)->nullable();
            $table->string('short_description')->nullable();
            $table->string('category')->nullable();
            $table->string('sku')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('products');
    }
}
