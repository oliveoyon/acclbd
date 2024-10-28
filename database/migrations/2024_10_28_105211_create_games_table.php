<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_1_id')->constrained('teams')->onDelete('cascade');
            $table->foreignId('team_2_id')->constrained('teams')->onDelete('cascade');
            $table->string('stadium')->nullable();
            $table->string('match_type')->nullable();
            $table->dateTime('scheduled_datetime');
            $table->integer('score_team_1')->nullable();
            $table->integer('score_team_2')->nullable();
            $table->string('result')->nullable();
            $table->text('match_details')->nullable();
            $table->tinyInteger('status')->default(1); // 0=inactive, 1=pending, 2=completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
