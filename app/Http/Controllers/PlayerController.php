<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    // Display the form to create a new player
    public function create($teamId)
    {
        $team = Team::findOrFail($teamId);
        return view('players.create', compact('team'));
    }

    // Store a newly created player in storage
    public function store(Request $request, $teamId)
    {
        // Validate that the team exists
        $team = Team::findOrFail($teamId);

        $data = $request->validate([
            'player_name' => 'required|string|max:255',
            'nick_name' => 'nullable|string|max:255',
            'jersey_no' => 'required|integer',
            'player_type' => 'required|string|in:Batsman,Bowler,All Rounder',
            'special_type' => 'nullable|string|in:Captain,Vice Captain,Wicket Keeper',
            'biography' => 'nullable|string',
            'status' => 'required|boolean',
            'year' => 'required|integer',
            'player_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Generate slug from player name
        $slug = Str::slug($data['player_name']);

        // Ensure slug is unique
        $originalSlug = $slug;
        $counter = 1;
        while (Player::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
        $data['slug'] = $slug; // Assign unique slug to the data

        // Generate a random string for the pl field
        $data['pl'] = Str::random(10); // Adjust the length as needed

        if ($request->hasFile('player_image')) {
            $data['player_image'] = $request->file('player_image')->store('player_images', 'public');
        }

        $data['team_id'] = $teamId;

        Player::create($data);

        return redirect()->route('admin.viewPlayers', $teamId)->with('success', 'Player added successfully!');
    }


    // Display the specified player's details
    public function show($teamId, $id)
    {
        $team = Team::findOrFail($teamId);
        $player = Player::findOrFail($id);
        return view('players.show', compact('player', 'team'));
    }

    // Show the form for editing the specified player
    public function edit($teamId, $id)
    {
        $team = Team::findOrFail($teamId);
        $player = Player::findOrFail($id);
        return view('players.edit', compact('team', 'player'));
    }

    public function update(Request $request, $teamId, $id)
    {
        $player = Player::findOrFail($id);

        $data = $request->validate([
            'player_name' => 'required|string|max:255',
            'nick_name' => 'nullable|string|max:255',
            'jersey_no' => 'required|integer',
            'player_type' => 'required|string|in:Batsman,Bowler,All Rounder',
            'special_type' => 'nullable|string|in:Captain,Vice Captain,Wicket Keeper',
            'biography' => 'nullable|string',
            'status' => 'required|boolean',
            'year' => 'required|integer',
            'player_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('player_image')) {
            // Delete old player image if it exists
            if ($player->player_image) {
                Storage::disk('public')->delete($player->player_image);
            }
            $data['player_image'] = $request->file('player_image')->store('player_images', 'public');
        }

        $player->update($data);

        return redirect()->route('admin.viewPlayers', $teamId)->with('success', 'Player updated successfully!');
    }



    // Remove the specified player from storage
    public function destroy($teamId, $playerId)
    {
        // Find the player by ID
        $player = Player::findOrFail($playerId);

        // Check if the player has an image and delete it from storage
        if ($player->player_image) {
            Storage::disk('public')->delete($player->player_image);
        }

        // Delete the player
        $player->delete();

        return redirect()->route('admin.viewPlayers', $teamId)->with('success', 'Player deleted successfully.');
    }


    // List all players of a specific team
    public function index($teamId)
    {
        $team = Team::findOrFail($teamId);
        $players = Player::where('team_id', $teamId)->get();
        return view('players.index', compact('players', 'team'));
    }
}
