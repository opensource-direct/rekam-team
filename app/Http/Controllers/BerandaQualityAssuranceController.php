<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaQualityAssuranceController extends Controller
{
    public function index()
    {
        return view('quality-assurance.dashboard');
    }
}
