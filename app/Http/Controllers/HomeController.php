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

        // $films = Film::all('id','title','description','file_path', 'thumbnail_path', 'user_id');

        // $film = Film::find(1);
        // $owner = $film->user->name;

        $films = (auth()->user())->films;
        
        $tags = Tag::all('id','tag_name');
                
        return view('index', [
            'films' => $films,
            'tags' => $tags,
        ]);

    }

    public function search(Request $request)
    {
        
        $validated = $request->validate([
            'search_word' => ['required', 'string'],
        ]);
        
        // $films = Film::where('title', 'like', '%' . $validated['search_word'] . '%')->get();
        // $films = Film::where('title', 'like', '%' . $validated['search_word'] . '%')->paginate(6);
        $films = (auth()->user())->films()->where('title', 'like', '%' . $validated['search_word'] . '%')->get();
        $tags = Tag::all('id','tag_name');
        
        return view('index', [
            'films' => $films,
            'tags' => $tags,
        ]);
        
    }
    
}