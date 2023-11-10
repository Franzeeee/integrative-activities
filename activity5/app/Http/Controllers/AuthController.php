<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if (empty($request)) {
            return redirect()->route('showLogin');
        }


        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);


        return redirect()->route('dashboard.index');
    }
    public function showLogin()
    {
        return view('login');
    }
}
