<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';
    protected $fillable = [
        'imdb',
        'title',
        'genre',
        'year',
        'description',
        'poster',
    ];
}
