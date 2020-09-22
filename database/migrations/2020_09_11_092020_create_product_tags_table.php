<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_title', 75);
            $table->string('tag_metaTitle', 100);
            $table->string('tag_slug', 100);
            $table->string('tag_content');
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
        Schema::dropIfExists('product_tags');
    }
}
