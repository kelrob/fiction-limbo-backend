<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->text('story_page_first_ad')->nullable();
            $table->text('story_page_second_ad')->nullable();
            $table->text('profile_page_ad')->nullable();
            $table->text('series_page_ad')->nullable();
            $table->text('shelf_page_ad')->nullable();
            $table->text('playlist_page_ad')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
