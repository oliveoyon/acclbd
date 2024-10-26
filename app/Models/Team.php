<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Only the fields that you want to allow mass assignment should be added here
    protected $fillable = [
        'full_name',
        'team_slug',
        'short_name',
        'group_name',
        'logo',
        'team_image',
        'description',
        'year',
        'status',
    ];

    // app/Models/Team.php
    public function players()
    {
        return $this->hasMany(Player::class);
    }

}
