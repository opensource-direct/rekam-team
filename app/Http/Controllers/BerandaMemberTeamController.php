<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaMemberTeamController extends Controller
{
    public function index()
    {
        return view('member-team.dashboard');
    }
}
