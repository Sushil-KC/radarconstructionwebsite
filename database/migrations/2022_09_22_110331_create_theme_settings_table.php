<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_link');
            $table->string('linkedin_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('youtube_link');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('telephone')->nullable();
            $table->string('logo');
            $table->string('maps_link');
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
        Schema::dropIfExists('theme_settings');
    }
};
