<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->access === 'administrator') {
            return view('administrator.dashboard');
        } elseif (Auth::user()->access === 'member-team') {
            return view('member-team.dashboard');
        } elseif (Auth::user()->access === 'quality-assurance') {
            return view('quality-assurance.dashboard');
        }
    }
}
