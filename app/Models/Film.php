<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'thumbnail_path',
        'user_id',
        'rating',
        'ratings',
    ];

    /**
     * The tags that belong to a film.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * The user that owns a film.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comments for the film.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}