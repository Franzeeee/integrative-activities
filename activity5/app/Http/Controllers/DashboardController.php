<?php

namespace App\Http\Controllers;


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
