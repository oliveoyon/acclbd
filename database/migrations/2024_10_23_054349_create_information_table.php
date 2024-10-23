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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('home_title')->nullable();
            $table->text('home_title_short_description')->nullable();
            $table->string('last_match_result')->nullable();
            $table->text('last_match_result_short_desc')->nullable();
            $table->text('about_main')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('values')->nullable();
            $table->string('upcoming_match')->nullable();
            $table->text('upcoming_match_short_desc')->nullable();
            $table->string('gallery')->nullable();
            $table->text('gallery_short_desc')->nullable();
            $table->string('ready_to_play')->nullable();
            $table->text('ready_to_play_short_desc')->nullable();
            $table->string('meet_the_teams')->nullable();
            $table->text('meet_the_team_short_desc')->nullable();
            $table->text('testimonial')->nullable();
            $table->text('testimonial_short_desc')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('footer_short_desc')->nullable();
            $table->text('footer_text')->nullable();
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
        Schema::dropIfExists('informations');
    }
};

