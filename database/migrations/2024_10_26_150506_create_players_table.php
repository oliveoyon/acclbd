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
        Schema::create('players', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('pl'); // Additional identifier (can be customized)
            $table->foreignId('team_id')->constrained()->onDelete('cascade'); // Foreign key referencing teams
            $table->string('player_name'); // Player's full name
            $table->string('nick_name')->nullable(); // Player's nickname
            $table->integer('jersey_no')->nullable(); // Player's jersey number
            $table->string('player_image')->nullable(); // Add player_image field
            $table->enum('player_type', ['Batsman', 'Bowler', 'All Rounder']); // Player type
            $table->enum('special_type', ['Captain', 'Vice Captain', 'Wicket Keeper'])->nullable(); // Special role
            $table->text('biography')->nullable(); // Biography of the player
            $table->boolean('status')->default(true); // Status (active/inactive)
            $table->year('year')->nullable(); // Year of association
            $table->string('slug')->unique(); // Unique slug for user-friendly URL
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};

