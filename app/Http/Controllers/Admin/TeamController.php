<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.admin.teams', compact('teams'));
    }

    public function create()
    {
        return view('dashboard.admin.addteams');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'short_name' => 'required|string|max:50',
            'group_name' => 'required|string|max:50',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'team_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'year' => 'nullable|string|max:4',
        ]);

        $data = $request->all();

        if (!isset($data['team_slug']) && isset($data['full_name'])) {
            $data['team_slug'] = Str::slug($data['full_name'], '-');
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('team_image')) {
            $data['team_image'] = $request->file('team_image')->store('team_images', 'public');
        }

        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team added successfully.');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('dashboard.admin.editteams', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'short_name' => 'required|string|max:50',
            'group_name' => 'required|string|max:50',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'team_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'year' => 'nullable|string|max:4',
        ]);

        $team = Team::findOrFail($id);
        $data = $request->all();

        $data['team_slug'] = Str::slug($request->input('full_name'), '-');

        if ($request->hasFile('logo')) {
            // Delete old logo if it exists
            if ($team->logo) {
                Storage::disk('public')->delete($team->logo);
            }
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('team_image')) {
            // Delete old team image if it exists
            if ($team->team_image) {
                Storage::disk('public')->delete($team->team_image);
            }
            $data['team_image'] = $request->file('team_image')->store('team_images', 'public');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // Delete images from storage
        if ($team->logo) {
            Storage::disk('public')->delete($team->logo);
        }

        if ($team->team_image) {
            Storage::disk('public')->delete($team->team_image);
        }

        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully.');
    }


     // Function to display all games
    public function gamesIndex()
    {
        $games = Games::with(['team1', 'team2'])->get(); // Eager load teams
        return view('games.index', compact('games'));
    }

    // Function to show the create game form
    public function gamesCreate()
    {
        $teams = Team::all(); // Get all teams for the dropdown
        return view('games.create', compact('teams'));
    }

    // Function to store a new game
    public function gamesStore(Request $request)
    {
        $request->validate([
            'team_1_id' => 'required|exists:teams,id',
            'team_2_id' => 'required|exists:teams,id',
            'stadium' => 'nullable|string|max:255',
            'match_type' => 'nullable|string|max:255',
            'scheduled_datetime' => 'required|date',
            'score_team_1' => 'nullable|integer',
            'score_team_2' => 'nullable|integer',
            'result' => 'nullable|string|max:255',
            'match_details' => 'nullable|string',
            'status' => 'nullable|integer|between:0,2',
        ]);

        Games::create($request->all());
        return redirect()->route('admin.games.index')->with('success', 'Games created successfully.');
    }

    // Function to show the edit game form
    public function gamesEdit($id)
    {
        $game = Games::findOrFail($id);
        $teams = Team::all(); // Get all teams for the dropdown
        return view('games.edit', compact('game', 'teams'));
    }

    // Function to update a specific game
    public function gamesUpdate(Request $request, $id)
    {
        $request->validate([
            'team_1_id' => 'required|exists:teams,id',
            'team_2_id' => 'required|exists:teams,id',
            'stadium' => 'nullable|string|max:255',
            'match_type' => 'nullable|string|max:255',
            'scheduled_datetime' => 'required|date',
            'score_team_1' => 'nullable|integer',
            'score_team_2' => 'nullable|integer',
            'result' => 'nullable|string|max:255',
            'match_details' => 'nullable|string',
            'status' => 'nullable|integer|between:0,2',
        ]);

        $game = Games::findOrFail($id);
        $game->update($request->all());
        return redirect()->route('admin.games.index')->with('success', 'Games updated successfully.');
    }

    // Function to delete a specific game
    public function gamesDestroy($id)
    {
        $game = Games::findOrFail($id);
        $game->delete();
        return redirect()->route('admin.games.index')->with('success', 'Games deleted successfully.');
    }
}
