<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function logout() 
    {
        Auth::logout();
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request) 
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('blog.index'));
        }

        return redirect()->route('auth.login')->withErrors([
            'email' => 'L\'adresse email que vous avez entré n\'est pas valide'
        ])->onlyInput('email');
    }
}
