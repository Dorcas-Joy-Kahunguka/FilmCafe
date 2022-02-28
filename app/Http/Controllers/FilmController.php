<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Film;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'genre' => ['required'],
            'file' => ['required'],
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $new_file_name = time() . '_' . $file_name;

        $storage_location = $request->file('file')->storeAs('films', $new_file_name, 'public');
        $file_path = Storage::url($storage_location);

        // File url
        // $file_url = url($file_path);

        // To delete the file
        // Storage::disk('public')->delete($storage_location);

        $film = Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $file_path,
            'user_id' => auth()->user()->id,
        ]);

        $tags = Tag::find($request->genre);
        $film->tags()->attach($tags);

        dd($request->title,$request->description,$request->genre,$new_file_name,$storage_location);

        return redirect(RouteServiceProvider::ROOT);

    }

}