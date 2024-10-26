<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
