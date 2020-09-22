<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->float('user_Id');
            $table->string('comment_title', 75);
            $table->string('comment_published');
            $table->string('comment_description');
            $table->string('comment_userroll');
            $table->dateTime('comment_publishedat');
            $table->string('comment_content');
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_comments');
    }
}
