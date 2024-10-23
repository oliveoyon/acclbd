<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $send['info'] = Information::first();
        return view('web.home', $send);
    }
}
