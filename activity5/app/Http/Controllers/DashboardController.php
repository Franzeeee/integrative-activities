<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function goToDashboard()
    {
        return view('dashboard');
    }
    public function goToRegister()
    {
        return view('register');
    }
}
