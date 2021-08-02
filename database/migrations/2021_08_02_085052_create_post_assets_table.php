<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_assets', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->unsigned();
            $table->string('hero_image');
            $table->string('hero_video')->nullable();
            $table->string('audio')->nullable();
            $table->string('background_image')->nullable();
            $table->string('image_credits')->nullable();
            $table->string('description')->nullable();
            $table->string('credits')->nullable();
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
        Schema::dropIfExists('post_assets');
    }
}
