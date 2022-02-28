<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $films = Film::all('id','title','description','file_path', 'user_id');

        // $film = Film::find(1);
        // $owner = $film->user->name;

        // $user = User::find(auth()->user()->id);
        // $films = $user->films;
        
        $tags = Tag::all('id','tag_name');
                
        return view('index', [
            'films' => $films,
            'tags' => $tags,
        ]);

    }
}