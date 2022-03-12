<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Content;

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
        $user = auth()->user();
        $content = new Content;
        return view('cabinet',['content' => $content->orderBy('id','desc')->get(),'user' => $user]);
    }

    public function search(){
        $user = new User;
        $content = new Content;
        return view('search',['content' => $content->orderBy('id','desc')->get(),'user' => $user]);
}

    public function add_content(){
        return view('form.add_content');
    }

    public function add_content_p(Request $request){
        $valid = $request->validate([
            'media' => ['required', 'image', 'mimetypes:image/jpeg,image/png']
         ]);

         $user = auth()->user();

         $review = new Content;
         
         // загрузка файла
        $file = $request->file('media');
        $upload_folder = "public/$user->id/media"; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения

        $review->media = $filename;
        $review->description = $request->input('description');
        $review->status = 0;
        $review->user = $user->id;
        $review->save();
        
        Storage::putFileAs($upload_folder, $file, $filename);
        return redirect()->route('home');
    }

    public function exit()
    {
        auth('web')->logout();
        return redirect()->route('login');
    }
}