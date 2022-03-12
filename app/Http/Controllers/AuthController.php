<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(){
        return view('form.registration');
    }

    public function registration_p(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'login' => ['required', 'string', 'unique:users,login'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'email' => $request->input('email'),
            'login' => $request['login'],
            'password' => bcrypt($request->input('password')),
            'status' => 0
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect()->route('home');
    }

    public function login(){
        return view('form.login');
    }

    public function login_p(Request $request)
    {
        $data = $request->validate([
            'login' => ['required', 'string'],
            'password' => ['required']
        ]);

        if (auth('web')->attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->withErrors([
                'login' => 'Логин или пароль введены неверно!'
            ]);
        }
    }

    public function cabinet(){
        return view('cabinet');
    }

    public function exit()
    {
        auth('web')->logout();
        return redirect()->route('login');
    }
}