<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Games;
use App\Models\Information;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $send['info'] = Information::first();
        $send['teams'] = Team::select('id', 'team_slug', 'short_name', 'logo')->get();
        $send['games'] = Games::with(['team1', 'team2'])->get();
        $send['images'] = Gallery::inRandomOrder()->take(6)->get();
        // dd($send['images']);

        return view('web.home', $send);
    }

    public function about()
    {
        $send['info'] = Information::first();
        return view('web.about', $send);
    }

    public function teamDetail($team_slug)
    {
        $team = Team::where(['team_slug' => $team_slug, 'status' => 1])->firstOrFail();
        $players = $team->players; // or use ->with('players') if you are using eager loading in a different query
        $send = [
            'team' => $team,
            'players' => $players,
        ];
        return view('web.team', $send);
    }

    public function playerDetail($slug)
    {
        $player = Player::where(['slug' => $slug, 'status' => 1])->firstOrFail();
        $team = $player->team; // or use ->with('players') if you are using eager loading in a different query
        $send = [
            'team' => $team,
            'player' => $player,
        ];
        return view('web.playerDetail', $send);
    }

    public function fixture()
    {
        $send['games'] = Games::with(['team1', 'team2'])->get();
        $send['info'] = Information::first();
        return view('web.fixture', $send);
    }

    public function matchResult()
    {
        $send['games'] = Games::with(['team1', 'team2'])->get();
        return view('web.match_result', $send);
    }

    public function contact()
    {
        $send['info'] = Information::first();
        return view('web.contact', $send);
    }

    public function teams()
    {
        $send['info'] = Information::first();
        $send['teams'] = Team::select('id', 'team_slug', 'short_name', 'full_name', 'logo')->get();
        return view('web.allteams', $send);
    }

    public function gallery()
    {
        $send['images'] = Gallery::inRandomOrder()->get();
        return view('web.gallery', $send);
    }

    public function faq()
    {
        $send['faqs'] = Faq::all();
        return view('web.faq', $send);
    }

}
