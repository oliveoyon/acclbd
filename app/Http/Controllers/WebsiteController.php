<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Team;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $send['info'] = Information::first();
        $send['teams'] = Team::select('id', 'team_slug', 'short_name', 'logo')->get();
        return view('web.home', $send);
    }

    public function about()
    {
        $send['info'] = Information::first();
        return view('web.about', $send);
    }
}
