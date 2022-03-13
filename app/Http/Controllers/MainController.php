<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Content;
use App\Models\Avatar;
use App\Models\Followers;

class MainController extends Controller
{
    public function home(){
        if(Auth::check()){
            
            $avatar = new Avatar;
            $followers = new Followers;
            $user = new User;
            $mi = auth()->user();
            $content = new Content;
            return view('home',['content' => $content->orderBy('id','desc')->get(),'user' => $user,'avatar' => $avatar,'mi'=>$mi,'followers'=>$followers]);
        } else {
            return view('form.login');
        }
    }
}
