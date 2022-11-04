<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $title = trans('main.dashboard');
        return view('dashboard.welcome', compact('title'));
    }
}
