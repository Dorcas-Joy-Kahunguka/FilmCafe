<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'film_id',
    ];

    /**
     * The film the comment belongs to.
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}