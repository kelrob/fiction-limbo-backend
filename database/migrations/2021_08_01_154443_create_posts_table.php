<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->integer('type_id')->unsigned();
            $table->integer('series_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->text('tags')->nullable();
            $table->string('cta_btn');
            $table->string('cta_btn_link');
            $table->text('post');
            $table->boolean('is_featured')->default(false);
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
        Schema::dropIfExists('posts');
    }
}
