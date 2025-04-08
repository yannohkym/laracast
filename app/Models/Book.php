<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    //<?php


    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'published_at',
        'price',
    ];
}


