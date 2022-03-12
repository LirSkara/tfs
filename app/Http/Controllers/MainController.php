<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Content;

class MainController extends Controller
{
    public function home(){
        if(Auth::check()){
            $user = new User;
            $content = new Content;
            return view('home',['content' => $content->orderBy('id','desc')->get(),'user' => $user]);
        } else {
            return view('form.login');
        }
    }
}
