<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('profile_header')->nullable();
            $table->string('loading_page')->nullable();
            $table->string('series_episode_page')->nullable();
            $table->string('login_page')->nullable();
            $table->string('signup_page')->nullable();
            $table->string('password_page')->nullable();
            $table->string('resolution_page')->nullable();
            $table->string('contact_us_page')->nullable();
            $table->string('policy_page')->nullable();
            $table->string('terms_of_use')->nullable();
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
        Schema::dropIfExists('backgrounds');
    }
}
