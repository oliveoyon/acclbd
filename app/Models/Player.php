<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'pl',            // Additional identifier
        'team_id',       // Foreign key referencing teams
        'player_name',    // Player's full name
        'nick_name',     // Player's nickname
        'jersey_no',     // Player's jersey number
        'player_type',   // Player type (Batsman, Bowler, All Rounder)
        'player_image', // Add player_image here
        'special_type',  // Special role (Captain, Vice Captain, Wicket Keeper)
        'biography',     // Biography of the player
        'status',        // Status (active/inactive)
        'year',          // Year of association
        'slug',          // Unique slug for user-friendly URL
    ];



    // Define the relationship with the Team model
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
