<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller, Auth, View;

class dashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return View::make('dashboard');
        } else {
            return View::make('notloggedin');
        }
    }
}