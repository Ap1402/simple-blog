<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    // mass assignment
    protected $fillable = [
        'title', 'content', 'author'
    ];
     
}
