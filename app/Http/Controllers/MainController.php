<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MainController extends Controller
{
    public function home(){
        if(Auth::check()){
            return view('home');
        } else {
            return view('form.login');
        }
    }
}
